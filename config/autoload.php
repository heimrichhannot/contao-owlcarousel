<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
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
	// Modules
	'HeimrichHannot\OwlCarousel\ModuleNewsList' => 'system/modules/owlcarousel/modules/ModuleNewsList.php',

	// Classes
	'HeimrichHannot\OwlCarousel\Hooks'          => 'system/modules/owlcarousel/classes/Hooks.php',
	'HeimrichHannot\OwlCarousel\OwlConfig'      => 'system/modules/owlcarousel/classes/OwlConfig.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'jquery.owlcarousel' => 'system/modules/owlcarousel/templates/jquery',
	'mod_newslist'       => 'system/modules/owlcarousel/templates/modules',
	'block_owlcarousel'  => 'system/modules/owlcarousel/templates/block',
));
