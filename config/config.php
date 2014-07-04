<?php 

/**
 * Hooks
 */

$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('\HeimrichHannot\OwlCarousel\Hooks', 'loadDataContainerHook');

/**
 * Supported TL_DCA Entities, spreading efa palette to
 */
$GLOBALS['TL_OWLCAROUSEL']['SUPPORTED']['tl_module']['newslist'] = '{config_legend}';

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
	$GLOBALS['TL_JAVASCRIPT']['owl.carousel'] = 'system/modules/owlcarousel/assets/vendor/owl.carousel/owl.carousel.js';
}