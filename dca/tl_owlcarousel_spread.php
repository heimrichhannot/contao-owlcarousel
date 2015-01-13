<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2014 Heimrich & Hannot GmbH
 * @package owlcarousel
 * @author Rico Kaltofen <r.kaltofen@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

$this->import('\HeimrichHannot\OwlCarousel\Constants');

// Content Fields
\Controller::loadDataContainer('tl_content');
\Controller::loadLanguageFile('tl_content');

// reusable palettes extension for tl_news, tl_content, tl_module etc
$GLOBALS['TL_DCA']['tl_owlcarousel_spread'] = array
(
	'palettes'    => array
	(
		'__selector__'                   => array('addOwl', 'addGallery'),
		OWLCAROUSEL_PALETTE_DEFAULT      => '{owlcarousel_legend},addOwl;',
		OWLCAROUSEL_PALETTE_PRESETCONFIG => '{owlcarousel_config},owlConfig;',
		OWLCAROUSEL_PALETTE_GALLERY      => '{owlcarousel_gallery},addGallery;',
		OWLCAROUSEL_PALETTE_CONTENT      => '{type_legend},type;{owlcarousel_config},owlConfig;{source_legend},multiSRC,sortBy,useHomeDir;{image_legend},size,fullsize,numberOfItems;{template_legend:hide},owlgalleryTpl,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop',
	),
	'subpalettes' => array
	(
		'addOwl'     => 'owl_items,owl_margin,owl_loop,owl_center,
							owl_mouseDrag,owl_touchDrag,owl_pullDrag,owl_freeDrag,
							owl_stagePadding,owl_merge,owl_mergeFit,
							owl_autoHeight, owl_autoHeightClass,
							owl_autoWidth,owl_startPosition,owl_URLhashListener,
							owl_nav,owl_navRewind,owl_navText,
							owl_slideBy,
							owl_dots,owl_dotsEach,owl_dotData,
							owl_lazyLoad,owl_lazyContent,
							owl_autoplay,owl_autoplayTimeout,owl_autoplayHoverPause,
							owl_smartSpeed,owl_fluidSpeed,owl_autoplaySpeed,owl_navSpeed,owl_dotsSpeed,owl_dragEndSpeed,
							owl_callbacks,
							owl_responsive,owl_responsiveRefreshRate,owl_responsiveBaseElement,owl_responsiveClass,
							owl_video,owl_videoHeight,owl_videoWidth,
							owl_animateOut,owl_animateIn,owl_fallbackEasing,
							owl_rtl',
		'addGallery' => 'owlMultiSRC,owlSortBy,owlUseHomeDir,owlSize,owlFullsize,owlNumberOfItems,owlgalleryTpl,owlCustomTpl',
	),
	'fields'      => array
	(
		'owlConfig'                 => array
		(
			'label'      => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owlConfig'],
			'inputType'  => 'select',
			'exclude'    => true,
			'foreignKey' => 'tl_owlconfig.title',
			'sql'        => "int(10) unsigned NOT NULL",
			'wizard' => array
			(
				array('tl_owlcarousel_spread', 'editOwlConfig')
			),
		),
		'addOwl'                    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['addOwl'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array
			(
				'submitOnChange' => true,
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		// START: Gallery fields
		'addGallery'                => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['addGallery'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array
			(
				'submitOnChange' => true,
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owlMultiSRC'               => $GLOBALS['TL_DCA']['tl_content']['fields']['multiSRC'],
		'owlOrderSRC'               => $GLOBALS['TL_DCA']['tl_content']['fields']['orderSRC'],
		'owlSortBy'                 => $GLOBALS['TL_DCA']['tl_content']['fields']['sortBy'],
		'owlUseHomeDir'             => $GLOBALS['TL_DCA']['tl_content']['fields']['useHomeDir'],
		'owlSize'                   => $GLOBALS['TL_DCA']['tl_content']['fields']['size'],
		'owlFullsize'               => $GLOBALS['TL_DCA']['tl_content']['fields']['fullsize'],
		'owlNumberOfItems'          => $GLOBALS['TL_DCA']['tl_content']['fields']['numberOfItems'],
		'owlCustomTpl'              => $GLOBALS['TL_DCA']['tl_content']['fields']['customTpl'],
		'owlgalleryTpl'             => array
		(
			'label'            => &$GLOBALS['TL_LANG']['tl_content']['galleryTpl'],
			'exclude'          => true,
			'inputType'        => 'select',
			'options_callback' => array('tl_owlcarousel_spread', 'getGalleryTemplates'),
			'eval'             => array('tl_class' => 'w50'),
			'sql'              => "varchar(64) NOT NULL default ''"
		),
		// END: Gallery fields
		// START: Owl Carousel JS - Config Fields
		'owl_items'                 => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_items'],
			'inputType' => 'text',
			'default'   => 3,
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "smallint(5) unsigned NOT NULL default '0'"
		),
		'owl_margin'                => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_margin'],
			'inputType' => 'text',
			'default'   => 15,
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "smallint(5) unsigned NOT NULL default '0'"
		),
		'owl_loop'                  => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_loop'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_center'                => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_center'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_mouseDrag'             => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_mouseDrag'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'default'   => 0,
			'eval'      => array
			(
				'tl_class' => 'w50',
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_touchDrag'             => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_touchDrag'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'default'   => 1,
			'eval'      => array
			(
				'tl_class' => 'w50',
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_pullDrag'              => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_pullDrag'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'default'   => 1,
			'eval'      => array
			(
				'tl_class' => 'w50',
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_freeDrag'              => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_freeDrag'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_stagePadding'          => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_stagePadding'],
			'inputType' => 'text',
			'default'   => 0,
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "smallint(5) unsigned NOT NULL default '0'"
		),
		'owl_merge'                 => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_merge'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50 clr',
				'rgxp'     => 'digit'
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_mergeFit'              => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_mergeFit'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'default'   => 1,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_autoHeight'            => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_autoHeight'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50 clr',
				'rgxp'     => 'digit'
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_autoHeightClass'       => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_autoHeightClass'],
			'inputType' => 'text',
			'exclude'   => true,
			'default'   => 'owl-height',
			'eval'      => array
			(
				'tl_class' => 'w50'
			),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'owl_autoWidth'             => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_autoWidth'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_startPosition'         => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_startPosition'],
			'inputType' => 'text',
			'default'   => 0,
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "smallint(5) unsigned NOT NULL default '0'"
		),
		'owl_URLhashListener'       => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_URLhashListener'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_nav'                   => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_nav'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'default'   => 1,
			'eval'      => array
			(
				'tl_class' => 'w50 clr',
				'rgxp'     => 'digit'
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_navRewind'             => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_navRewind'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_navText'               => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_navText'],
			'inputType' => 'text',
			'exclude'   => true,
			'default'   => array('prev', 'next'),
			'eval'      => array
			(
				'tl_class'  => 'w50 clr',
				'size'      => 2,
				'multiple'  => true,
				'allowHtml' => true
			),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'owl_slideBy'               => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_slideBy'],
			'inputType' => 'text',
			'default'   => 1,
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
			),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'owl_dots'                  => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_dots'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'default'   => 1,
			'eval'      => array
			(
				'tl_class' => 'w50 clr',
				'rgxp'     => 'digit'
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_dotsEach'              => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_dotsEach'],
			'inputType' => 'text',
			'default'   => 0,
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "smallint(5) unsigned NOT NULL default '0'"
		),
		'owl_dotData'               => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_dotData'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		// TODO: not working yet
		'owl_lazyLoad'              => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_lazyLoad'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50 clr',
				'rgxp'     => 'digit'
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		// TODO: not working yet
		'owl_lazyContent'           => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_lazyContent'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_autoplay'              => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_autoplay'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_autoplayTimeout'       => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_autoplayTimeout'],
			'inputType' => 'text',
			'default'   => 5000,
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "smallint(10) unsigned NOT NULL default '0'"
		),
		'owl_autoplayHoverPause'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_autoplayHoverPause'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'default'   => 1,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_smartSpeed'            => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_smartSpeed'],
			'inputType' => 'text',
			'default'   => 250,
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50 clr',
				'rgxp'     => 'digit'
			),
			'sql'       => "smallint(10) unsigned NOT NULL default '0'"
		),
		'owl_fluidSpeed'            => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_fluidSpeed'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_autoplaySpeed'         => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_autoplaySpeed'],
			'inputType' => 'text',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50 clr',
				'rgxp'     => 'digit'
			),
			'sql'       => "smallint(10) unsigned NOT NULL default '0'"
		),
		'owl_navSpeed'              => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_navSpeed'],
			'inputType' => 'text',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "smallint(10) unsigned NOT NULL default '0'"
		),
		'owl_dotsSpeed'             => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_dotsSpeed'],
			'inputType' => 'text',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "smallint(10) unsigned NOT NULL default '0'"
		),
		'owl_dragEndSpeed'          => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_dragEndSpeed'],
			'inputType' => 'text',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "smallint(10) unsigned NOT NULL default '0'"
		),
		'owl_callbacks'             => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_callbacks'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'default'   => 1,
			'eval'      => array
			(
				'tl_class' => 'w50',
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_responsive'            => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_responsive'],
			'inputType' => 'multiColumnWizard',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class'     => 'clr',
				'columnFields' => array
				(
					'owl_breakpoint' => array
					(
						'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_breakpoint'],
						'exclude'   => true,
						'inputType' => 'text',
						'eval'      => array
						(
							'style' => 'width:100px',
							'rgxp'  => 'digit'
						)
					),
					'owl_config'     => array
					(
						'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_config'],
						'inputType' => 'textarea',
						'eval'      => array
						(
							'style' => 'width:500px; height: 80px;',
							'rows'  => 5,
							'cols'  => 20
						)
					),
				)
			),
			'sql'       => "blob NULL"
		),
		'owl_responsiveRefreshRate' => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_responsiveRefreshRate'],
			'inputType' => 'text',
			'exclude'   => true,
			'default'   => 200,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "smallint(10) unsigned NOT NULL default '0'"
		),
		'owl_responsiveBaseElement' => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_responsiveBaseElement'],
			'inputType' => 'text',
			'default'   => 'window',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
			),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'owl_responsiveClass'       => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_responsiveClass'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_video'                 => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_video'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50 clr',
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'owl_videoHeight'           => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_videoHeight'],
			'inputType' => 'text',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50 clr',
				'rgxp'     => 'digit'
			),
			'sql'       => "smallint(10) unsigned NOT NULL default '0'"
		),
		'owl_videoWidth'            => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_videoWidth'],
			'inputType' => 'text',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
				'rgxp'     => 'digit'
			),
			'sql'       => "smallint(10) unsigned NOT NULL default '0'"
		),
		'owl_animateOut'            => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_animateOut'],
			'inputType' => 'text',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
			),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'owl_animateIn'             => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_animateIn'],
			'inputType' => 'text',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
			),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'owl_fallbackEasing'        => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_fallbackEasing'],
			'inputType' => 'text',
			'default'   => 'swing',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50',
			),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'owl_rtl'                   => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_rtl'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array
			(
				'tl_class' => 'w50 clr',
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		// END: Owl Carousel JS - Config Fields
	)
);

// flat palette, renders widtout submitOnChange Field
$GLOBALS['TL_DCA']['tl_owlcarousel_spread']['palettes'][OWLCAROUSEL_PALETTE_FLAT] = str_replace('addOwl', $GLOBALS['TL_DCA']['tl_owlcarousel_spread']['subpalettes']['addOwl'], $GLOBALS['TL_DCA']['tl_owlcarousel_spread']['palettes']['default']);


// Gallery Support -- not tl_content type present, set isGallery as default for multiSRC
$GLOBALS['TL_DCA']['tl_owlcarousel_spread']['fields']['owlMultiSRC']['eval']['orderField'] = 'owlOrderSRC';
$GLOBALS['TL_DCA']['tl_owlcarousel_spread']['fields']['owlMultiSRC']['eval']['isGallery']  = true;

// Content Support -- set isGallery by type
$GLOBALS['TL_DCA']['tl_content']['fields']['multiSRC']['load_callback'][] = array('tl_owlcarousel_spread', 'setFileTreeFlags');


class tl_owlcarousel_spread extends \Backend
{
	/**
	 * Return all gallery templates as array
	 * @return array
	 */
	public function getGalleryTemplates()
	{
		return $this->getTemplateGroup('owl_carousel');
	}

	public function setFileTreeFlags($varValue, DataContainer $dc)
	{

		if ($dc->activeRecord) {
			if ($dc->activeRecord->type == 'owlcarousel') {
				$GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['isGallery'] = true;
			}
		}

		return $varValue;
	}

	public function editOwlConfig(DataContainer $dc)
	{
		return ($dc->value < 1) ? '' : ' <a href="contao/main.php?do=owlconfig&amp;act=edit&amp;id=' . $dc->value . '&amp;popup=1&amp;nb=1&amp;rt=' . REQUEST_TOKEN . '" title="' . sprintf(specialchars($GLOBALS['TL_LANG']['tl_carousel_spread']['editOwlConfig'][1]), $dc->value) . '" style="padding-left:3px" onclick="Backend.openModalIframe({\'width\':768,\'title\':\'' . specialchars(str_replace("'", "\\'", sprintf($GLOBALS['TL_LANG']['tl_owlcarousel_spread']['editOwlConfig'][1], $dc->value))) . '\',\'url\':this.href});return false">' . Image::getHtml('alias.gif', $GLOBALS['TL_LANG']['tl_carousel_spread']['editOwlConfig'][0], 'style="vertical-align:top"') . '</a>';
	}
}