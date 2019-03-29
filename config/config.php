<?php

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('\HeimrichHannot\OwlCarousel\Hooks', 'loadDataContainerHook');
$GLOBALS['TL_HOOKS']['parseArticles'][]     = array('\HeimrichHannot\OwlCarousel\Hooks', 'parseArticlesHook');

/**
 * Supported TL_DCA Entities, spreading efa palette to
 */
// News support
$GLOBALS['TL_OWLCAROUSEL']['SUPPORTED']['tl_module']['owl_newslist']  = 'skipFirst;[[OWLCAROUSEL_PALETTE_FLAT]]';
$GLOBALS['TL_OWLCAROUSEL']['SUPPORTED']['tl_news_archive']['default'] = 'protected;[[OWLCAROUSEL_PALETTE_PRESETCONFIG]]';
$GLOBALS['TL_OWLCAROUSEL']['SUPPORTED']['tl_news']['default']         = 'addImage;[[OWLCAROUSEL_PALETTE_GALLERY]]';

// Content support
$GLOBALS['TL_OWLCAROUSEL']['SUPPORTED']['tl_content']['owlcarousel']               = '[[OWLCAROUSEL_PALETTE_CONTENT]]';
$GLOBALS['TL_OWLCAROUSEL']['SUPPORTED']['tl_content']['owlcarousel-content-start'] = '[[OWLCAROUSEL_PALETTE_CONTENT_SLIDER_START]]';

// Owl carousel config support
$GLOBALS['TL_OWLCAROUSEL']['SUPPORTED']['tl_owlconfig']['default'] = 'title;[[OWLCAROUSEL_PALETTE_FLAT]]';

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_owlconfig'] = 'HeimrichHannot\\OwlCarousel\\OwlConfigModel';

/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['system'], 1, array(
	'owlconfig' => array
	(
		'tables' => array('tl_owlconfig'),
		'icon'   => 'system/modules/owlcarousel/assets/owl-logo.png'
	)
));


/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['news']['owl_newslist'] = '\HeimrichHannot\OwlCarousel\ModuleOwlNewsList';

if (TL_MODE == 'FE') {
	/**
	 * CSS
	 */
	$GLOBALS['TL_USER_CSS']['animate.css']        = 'system/modules/owlcarousel/assets/vendor/animate.css/animate.css|screen|static|3.1.0';
	$GLOBALS['TL_USER_CSS']['owl.carousel']       = 'system/modules/owlcarousel/assets/vendor/owl.carousel/assets/owl.carousel.min.css|screen|static|2.0.0-beta.2.4';
	$GLOBALS['TL_USER_CSS']['owl.carousel.theme'] = 'system/modules/owlcarousel/assets/vendor/owl.carousel/assets/owl.theme.default.min.css|screen|static|2.0.0-beta.2.4';


	/**
	 * Javascript
	 */
	$GLOBALS['TL_JAVASCRIPT']['owl.carousel'] = 'system/modules/owlcarousel/assets/vendor/owl.carousel/owl.carousel.js|static';
}

/**
 * Content elements
 */
array_insert($GLOBALS['TL_CTE'], 3, array(
	'owl' => array(
		'owlcarousel'                 => 'HeimrichHannot\OwlCarousel\ContentOwlCarousel',
		'owlcarousel-content-start'   => 'HeimrichHannot\OwlCarousel\ContentOwlCarouselContentStart',
		'owlcarousel-slide-separator' => 'HeimrichHannot\OwlCarousel\ContentOwlCarouselSlide',
		'owlcarousel-slide-start'     => 'HeimrichHannot\OwlCarousel\ContentOwlCarouselSlideStart',
		'owlcarousel-slide-stop'      => 'HeimrichHannot\OwlCarousel\ContentOwlCarouselSlideStop',
		'owlcarousel-content-stop'    => 'HeimrichHannot\OwlCarousel\ContentOwlCarouselContentStop',
		'owlcarousel-nav-start'       => 'HeimrichHannot\OwlCarousel\ContentOwlCarouselNavStart',
		'owlcarousel-nav-separator'   => 'HeimrichHannot\OwlCarousel\ContentOwlCarouselNavSlide',
		'owlcarousel-nav-stop'        => 'HeimrichHannot\OwlCarousel\ContentOwlCarouselNavStop',
	)
));

/**
 * Intend elements
 */
$GLOBALS['TL_WRAPPERS']['start'][]     = 'owlcarousel-content-start';
$GLOBALS['TL_WRAPPERS']['start'][]     = 'owlcarousel-slide-start';
$GLOBALS['TL_WRAPPERS']['start'][]     = 'owlcarousel-nav-start';
$GLOBALS['TL_WRAPPERS']['stop'][]      = 'owlcarousel-content-stop';
$GLOBALS['TL_WRAPPERS']['stop'][]      = 'owlcarousel-slide-stop';
$GLOBALS['TL_WRAPPERS']['stop'][]      = 'owlcarousel-nav-stop';
$GLOBALS['TL_WRAPPERS']['separator'][] = 'owlcarousel-slide-separator';
$GLOBALS['TL_WRAPPERS']['separator'][] = 'owlcarousel-nav-separator';