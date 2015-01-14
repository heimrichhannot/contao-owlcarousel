<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package Owlcarousel
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'HeimrichHannot',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Models
	'HeimrichHannot\OwlCarousel\OwlConfigModel'                 => 'system/modules/owlcarousel/models/OwlConfigModel.php',

	// Modules
	'HeimrichHannot\OwlCarousel\ModuleOwlNewsList'              => 'system/modules/owlcarousel/modules/ModuleOwlNewsList.php',

	// Elements
	'HeimrichHannot\OwlCarousel\ContentOwlCarouselSlideStop'    => 'system/modules/owlcarousel/elements/ContentOwlCarouselSlideStop.php',
	'HeimrichHannot\OwlCarousel\ContentOwlCarouselContentStart' => 'system/modules/owlcarousel/elements/ContentOwlCarouselContentStart.php',
	'HeimrichHannot\OwlCarousel\ContentOwlCarouselNavStop'      => 'system/modules/owlcarousel/elements/ContentOwlCarouselNavStop.php',
	'HeimrichHannot\OwlCarousel\ContentOwlCarousel'             => 'system/modules/owlcarousel/elements/ContentOwlCarousel.php',
	'HeimrichHannot\OwlCarousel\ContentOwlCarouselNavStart'     => 'system/modules/owlcarousel/elements/ContentOwlCarouselNavStart.php',
	'HeimrichHannot\OwlCarousel\ContentOwlCarouselSlideStart'   => 'system/modules/owlcarousel/elements/ContentOwlCarouselSlideStart.php',
	'HeimrichHannot\OwlCarousel\ContentOwlCarouselContentStop'  => 'system/modules/owlcarousel/elements/ContentOwlCarouselContentStop.php',

	// Classes
	'HeimrichHannot\OwlCarousel\Constants'                      => 'system/modules/owlcarousel/classes/Constants.php',
	'HeimrichHannot\OwlCarousel\Hooks'                          => 'system/modules/owlcarousel/classes/Hooks.php',
	'HeimrichHannot\OwlCarousel\OwlUpdater'                     => 'system/modules/owlcarousel/classes/OwlUpdater.php',
	'HeimrichHannot\OwlCarousel\OwlConfig'                      => 'system/modules/owlcarousel/classes/OwlConfig.php',
	'HeimrichHannot\OwlCarousel\OwlCarousel'                    => 'system/modules/owlcarousel/classes/OwlCarousel.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'jquery.owlcarousel'           => 'system/modules/owlcarousel/templates/jquery',
	'news_full'                    => 'system/modules/owlcarousel/templates/news',
	'mod_newslist'                 => 'system/modules/owlcarousel/templates/modules',
	'owl_carousel_default'         => 'system/modules/owlcarousel/templates/gallery',
	'ce_owlcarousel_slide_start'   => 'system/modules/owlcarousel/templates/elements',
	'ce_owlcarousel_content_stop'  => 'system/modules/owlcarousel/templates/elements',
	'ce_owlcarousel_content_start' => 'system/modules/owlcarousel/templates/elements',
	'ce_owlcarousel_slide_stop'    => 'system/modules/owlcarousel/templates/elements',
	'ce_owlcarousel_nav_start'     => 'system/modules/owlcarousel/templates/elements',
	'ce_owlcarousel'               => 'system/modules/owlcarousel/templates/elements',
	'ce_owlcarousel_nav_stop'      => 'system/modules/owlcarousel/templates/elements',
	'block_owlcarousel'            => 'system/modules/owlcarousel/templates/block',
));
