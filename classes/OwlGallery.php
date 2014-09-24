<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2014 Heimrich & Hannot GmbH
 * @package owlgallery
 * @author Rico Kaltofen <r.kaltofen@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

namespace HeimrichHannot\OwlCarousel;


class OwlGallery
{

	public static function createSettings(array $arrData=array(), OwlConfigModel $objConfig)
	{
		\Controller::loadDataContainer('tl_owlcarousel_spread');

		$objSettings = $objConfig->current();

		foreach($arrData as $key => $value)
		{
			if(substr($key, 0, 3) != 'owl') continue;

			$arrData = &$GLOBALS['TL_DCA']['tl_owlcarousel_spread']['fields'][$key];

			if($arrData['eval']['multiple'] || $key == 'owlOrderSRC')
			{
				$value = deserialize($value, true);
			}

			$objSettings->{$key} = $value;
		}

		return $objSettings;
	}

	public static function parseGallery($objSettings)
	{
		OwlConfig::createConfigJs($objSettings);

		$objT = new \FrontendTemplate('owl_gallery_default');
		$objT->setData((array) $objSettings);
		$objT->class .= ' ' . OwlConfig::getCssClassFromModel($objSettings) . ' owl-carousel';

		return $objT->parse();
	}

} 