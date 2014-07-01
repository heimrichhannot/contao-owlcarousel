<?php 

namespace HeimrichHannot\OwlCarousel;

class OwlConfig extends \Controller
{
	public static function createConfigJs($objConfig)
	{
		$objT = new \FrontendTemplate('jquery.owlcarousel');
		
		$objT->config = json_encode(static::createConfig($objConfig));
		$objT->cssID = static::getCssIdFromModel($objConfig);
		
		$strFile = 'assets/js/' . $objT->cssID . '.js';
		
		$objFile = new \File($strFile, file_exists(TL_ROOT . '/' . $strFile));
		
		// simple file caching
		if($objConfig->tstamp > $objFile->mtime)
		{
			$objFile->write($objT->parse());
			$objFile->close();
		}
		
		$GLOBALS['TL_JAVASCRIPT']['owl.carousel_' . $objT->cssID] = $strFile;
	}
	
	public static function getCssIdFromModel($objConfig)
	{
		$strClass = static::stripNamespaceFromClassName($objConfig);

		return 'owlCarousel_' . substr(md5($strClass .'_'. $objConfig->id), 0, 6);
	}
	
	public static function createConfig($objConfig)
	{
		\Controller::loadDataContainer('tl_owlcarousel_spread');
		
		$arrConfig = array();
		
		foreach($objConfig->row() as $key => $value)
		{
			if(strstr($key, 'owl_') === false) continue;
			
			$arrData = $GLOBALS['TL_DCA']['tl_owlcarousel_spread']['fields'][$key];
			
			$owlKey = substr($key, 4);
			
			if($arrData['eval']['rgxp'] == 'digit')
			{
				$value = intval($value);
			}
			
			if($arrData['inputType'] == 'checkbox' && !$arrData['eval']['multiple'])
			{
				$value = filter_var($value, FILTER_VALIDATE_BOOLEAN);
			}
			
			if($arrData['eval']['multiple'] || $arrData['inputType'] == 'multiColumnWizard')
			{
				$value = deserialize($value, true);
			}
			
			if($key == 'owl_responsive')
			{
				$arrResponsive = array();
				
				foreach($value as $config)
				{
					if(empty($config['owl_breakpoint']) || empty($config['owl_config'])) continue;
					
					$arrResponsiveConfig = trimsplit(',', $config['owl_config']);
					
					if(!is_array($arrResponsiveConfig)) continue;
						
					$objResponsiveConfig = new \stdClass();
					
					foreach($arrResponsiveConfig as $cKey => $configRow)
					{
						$arrConfigRow = trimsplit(':', $configRow);
						$objResponsiveConfig->{$arrConfigRow[0]} = $arrConfigRow[1];
					}
					
					$arrResponsive[$config['owl_breakpoint']] = (array) $objResponsiveConfig;
				}
				
				if(empty($arrResponsive))
				{
					$value = false;
				}
				else 
				{
					$value = $arrResponsive;
				}
			}
			
			$arrConfig[$owlKey] = $value;
		}
		
		return $arrConfig;
	}
	
	public static function stripNamespaceFromClassName($obj)
	{
		$classname = get_class($obj);
	
		if (preg_match('@\\\\([\w]+)$@', $classname, $matches)) {
			$classname = $matches[1];
		}
	
		return $classname;
	}
}

