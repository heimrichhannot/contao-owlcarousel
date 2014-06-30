<?php 

namespace HeimrichHannot\OwlCarousel;

class Hooks extends \Controller
{
	
	private static $strSpreadDca = 'tl_owlcarousel_spread';
	
	/**
	 * Spread Fields to existing DataContainers
	 * @param string $strName
	 * @return boolean false if Datacontainer not supported
	 */
	public function loadDataContainerHook($strName)
	{
		if(!is_array($GLOBALS['TL_OWLCAROUSEL']['SUPPORTED']) || !in_array($strName, array_keys($GLOBALS['TL_OWLCAROUSEL']['SUPPORTED']))) return false;
	
		$this->loadDataContainer(static::$strSpreadDca);

		if(!is_array($GLOBALS['TL_DCA'][static::$strSpreadDca]['fields'])) return false;
	
		$dc = &$GLOBALS['TL_DCA'][$strName];
		
		foreach($GLOBALS['TL_OWLCAROUSEL']['SUPPORTED'][$strName] as $strPalette => $prependTo)
		{
			if(!isset($dc['palettes'][$strPalette])) continue;

			$dc['palettes'][$strPalette] = str_replace($prependTo, $GLOBALS['TL_DCA'][static::$strSpreadDca]['palettes']['default'] . ' ' . $prependTo, $dc['palettes'][$strPalette]);
			$dc['palettes']['__selector__'] = array_merge($dc['palettes']['__selector__'], $GLOBALS['TL_DCA'][static::$strSpreadDca]['palettes']['__selector__']);
			
			$dc['subpalettes'] = array_merge($dc['subpalettes'], $GLOBALS['TL_DCA'][static::$strSpreadDca]['subpalettes']);
			$dc['fields'] = array_merge($dc['fields'], $GLOBALS['TL_DCA'][static::$strSpreadDca]['fields']);
		}
		
		\System::loadLanguageFile(static::$strSpreadDca);
		
		// add language to TL_LANG palette
		$GLOBALS['TL_LANG'][$strName] = array_merge($GLOBALS['TL_LANG'][$strName], $GLOBALS['TL_LANG'][static::$strSpreadDca]);
	}
	
}