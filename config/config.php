<?php

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('\HeimrichHannot\OwlCarousel\Hooks', 'loadDataContainerHook');
$GLOBALS['TL_HOOKS']['parseArticles'][] = array('\HeimrichHannot\OwlCarousel\Hooks', 'parseArticlesHook');

/**
 * Supported TL_DCA Entities, spreading efa palette to
 */

// News support
$GLOBALS['TL_OWLCAROUSEL']['SUPPORTED']['tl_module']['newslist'] = 'type;[[OWLCAROUSEL_PALETTE_DEFAULT]]';
$GLOBALS['TL_OWLCAROUSEL']['SUPPORTED']['tl_news_archive']['default'] = 'jumpTo;[[OWLCAROUSEL_PALETTE_PRESETCONFIG]]';
$GLOBALS['TL_OWLCAROUSEL']['SUPPORTED']['tl_news']['default'] = 'addImage;[[OWLCAROUSEL_PALETTE_GALLERY]]';

// Content support
$GLOBALS['TL_OWLCAROUSEL']['SUPPORTED']['tl_content']['owlcarousel'] = '[[OWLCAROUSEL_PALETTE_CONTENT]]';

// Owl carousel config support
$GLOBALS['TL_OWLCAROUSEL']['SUPPORTED']['tl_owlconfig']['default'] = 'title;[[OWLCAROUSEL_PALETTE_FLAT]]';


/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['system'], 1, array('owlconfig' => array
(
	'tables'     => array('tl_owlconfig'),
	'icon'       => 'system/modules/owlcarousel/assets/owl-logo.png'
)));


/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['news']['newslist'] = 'HeimrichHannot\OwlCarousel\ModuleNewsList';

if(TL_MODE == 'FE')
{
	/**
	 * CSS
	 */
	$GLOBALS['TL_USER_CSS']['animate.css'] = 'system/modules/owlcarousel/assets/vendor/animate.css/animate.css|screen|static|3.1.0';
	$GLOBALS['TL_USER_CSS']['owl.carousel'] = 'system/modules/owlcarousel/assets/vendor/owl.carousel/assets/owl.carousel.min.css|screen|static|2.0.0-beta.2.4';
	$GLOBALS['TL_USER_CSS']['owl.carousel.theme'] = 'system/modules/owlcarousel/assets/vendor/owl.carousel/assets/owl.theme.default.min.css|screen|static|2.0.0-beta.2.4';
	
	
	/**
	 * Javascript
	 */
	$GLOBALS['TL_JAVASCRIPT']['owl.carousel'] = 'system/modules/owlcarousel/assets/vendor/owl.carousel/owl.carousel.js|static';
}

/**
 * Content elements
 */
array_insert($GLOBALS['TL_CTE']['media'], 2, array('owlcarousel' => 'HeimrichHannot\OwlCarousel\ContentOwlCarousel'));