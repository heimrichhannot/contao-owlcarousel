<?php 

namespace HeimrichHannot\OwlCarousel;

class OwlConfig extends \Controller
{
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
		
		return json_encode($arrConfig);
	}
}

