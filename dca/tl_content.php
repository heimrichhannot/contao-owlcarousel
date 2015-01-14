<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2014 Heimrich & Hannot GmbH
 * @package owlcarousel
 * @author Rico Kaltofen <r.kaltofen@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */
$dc = &$GLOBALS['TL_DCA']['tl_content'];

$dc['palettes']['owlcarousel-content-start'] = '{type_legend},type,headline;{owlcarousel_config},owlConfig;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$dc['palettes']['owlcarousel-content-stop']  = '{type_legend},type,headline;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop';

$dc['palettes']['owlcarousel-slide-start'] = '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$dc['palettes']['owlcarousel-slide-stop']  = '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop';

$dc['palettes']['owlcarousel-nav-start'] = '{type_legend},type,headline;{owlcarousel_config},owlConfig,owlContentSlider;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$dc['palettes']['owlcarousel-nav-stop']  = '{type_legend},type,headline;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop';

$dc['palettes']['owlcarousel-slide-separator'] = '{type_legend},type,headline;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$dc['palettes']['owlcarousel-nav-separator']   = '{type_legend},type,headline;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

$dc['fields']['owlContentSlider'] = array
(
	'label'            => &$GLOBALS['TL_LANG']['tl_content']['owlContentSlider'],
	'exclude'          => true,
	'inputType'        => 'select',
	'options_callback' => array('tl_content_owlcarousel', 'getContentSliderCarousels'),
	'eval'             => array('tl_class' => 'w50', 'mandatory' => true),
	'wizard' => array
	(
		array('tl_content', 'editAlias')
	),
	'sql'              => "varchar(64) NOT NULL default ''",
);

class tl_content_owlcarousel extends \Backend
{

	public function getContentSliderCarousels(DataContainer $dc)
	{
		$arrOptions = array();

		$objSlider = \ContentModel::findBy('type', 'owlcarousel-content-start');

		if ($objSlider === null) return $arrOptions;

		while ($objSlider->next()) {

			$objArticle = \ArticleModel::findByPk($objSlider->pid);

			if ($objArticle === null) continue;

			$arrOptions[$objSlider->id] = sprintf($GLOBALS['TL_LANG']['tl_content']['contentSliderCarouselSelectOption'],
				$objArticle->title,
				$objArticle->id,
				$objSlider->id);

		}


		return $arrOptions;
	}

}