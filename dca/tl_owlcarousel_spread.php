<?php 

// reusable palettes extension for tl_news, tl_content, tl_module etc
$GLOBALS['TL_DCA']['tl_owlcarousel_spread'] = array
(
	'palettes' => array
	(
		'__selector__'	=> array('addOwl'),
		'default'		=> '{owlcarousel_legend},addOwl;',
	),
	'subpalettes' => array
	(
		'addOwl'		=> 'owl_items,owl_margin,owl_loop,owl_center,
							owl_mouseDrag,owl_touchDrag,owl_pullDrag,owl_freeDrag,
							owl_stagePadding,owl_merge,owl_mergeFit,
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
							owl_rtl'
	),
	'fields' => array
	(
		'addOwl' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['addOwl'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'eval'						=> array
			(
				'submitOnChange'	=> true,
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_items'	=> array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_items'],
			'inputType'					=> 'text',
			'default'					=> 3,
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "smallint(5) unsigned NOT NULL default '0'"
		),
		'owl_margin' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_margin'],
			'inputType'					=> 'text',
			'default'					=> 15,
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "smallint(5) unsigned NOT NULL default '0'"
		),
		'owl_loop' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_loop'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_center' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_center'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_mouseDrag' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_mouseDrag'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'default'					=> 0,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_touchDrag' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_touchDrag'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'default'					=> 1,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_pullDrag' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_pullDrag'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'default'					=> 1,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_freeDrag' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_freeDrag'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_stagePadding' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_stagePadding'],
			'inputType'					=> 'text',
			'default'					=> 0,
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "smallint(5) unsigned NOT NULL default '0'"
		),
		'owl_merge' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_merge'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50 clr',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_mergeFit' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_mergeFit'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'default'					=> 1,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_autoWidth' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_autoWidth'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_startPosition' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_startPosition'],
			'inputType'					=> 'text',
			'default'					=> 0,
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "smallint(5) unsigned NOT NULL default '0'"
		),
		'owl_URLhashListener' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_URLhashListener'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_nav' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_nav'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'default'					=> 1,
			'eval'						=> array
			(
				'tl_class'		=> 'w50 clr',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_navRewind' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_navRewind'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_navText' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_navText'],
			'inputType'					=> 'text',
			'exclude'					=> true,
			'default'					=> array('prev', 'next'),
			'eval'						=> array
			(
				'tl_class'		=> 'w50 clr',
				'size'			=> 2,
				'multiple'		=> true,
				'allowHtml'		=> true
			),
			'sql'                     	=> "varchar(255) NOT NULL default ''"
		),
		'owl_slideBy' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_slideBy'],
			'inputType'					=> 'text',
			'default'					=> 1,
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
			),
			'sql'                     	=> "varchar(255) NOT NULL default ''"
		),
		'owl_dots' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_dots'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'default'					=> 1,
			'eval'						=> array
			(
				'tl_class'		=> 'w50 clr',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_dotsEach' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_dotsEach'],
			'inputType'					=> 'text',
			'default'					=> 0,
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "smallint(5) unsigned NOT NULL default '0'"
		),
		'owl_dotData' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_dotData'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		// TODO: not working yet
		'owl_lazyLoad' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_lazyLoad'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50 clr',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		// TODO: not working yet
		'owl_lazyContent' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_lazyContent'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_autoplay' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_autoplay'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_autoplayTimeout' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_autoplayTimeout'],
			'inputType'					=> 'text',
			'default'					=> 5000,
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "smallint(10) unsigned NOT NULL default '0'"
		),
		'owl_autoplayHoverPause' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_autoplayHoverPause'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'default'					=> 1,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_smartSpeed' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_smartSpeed'],
			'inputType'					=> 'text',
			'default'					=> 250,
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50 clr',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "smallint(10) unsigned NOT NULL default '0'"
		),
		'owl_fluidSpeed' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_fluidSpeed'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_autoplaySpeed' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_autoplaySpeed'],
			'inputType'					=> 'text',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50 clr',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "smallint(10) unsigned NOT NULL default '0'"
		),
		'owl_navSpeed' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_navSpeed'],
			'inputType'					=> 'text',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "smallint(10) unsigned NOT NULL default '0'"
		),
		'owl_dotSpeed' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_dotSpeed'],
			'inputType'					=> 'text',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "smallint(10) unsigned NOT NULL default '0'"
		),
		'owl_dragEndSpeed' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_dragEndSpeed'],
			'inputType'					=> 'text',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "smallint(10) unsigned NOT NULL default '0'"
		),
		'owl_callbacks' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_callbacks'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'default'					=> 1,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_responsive' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_responsive'],
			'inputType'					=> 'multiColumnWizard',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'clr',		
				'columnFields' => array
				(
					'owl_breakpoint' => array
					(
						'label'                 => &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_breakpoint'],
						'exclude'               => true,
						'inputType'             => 'text',
						'eval' 					=> array
						(
							'style'=>'width:100px', 
							'rgxp' => 'digit'
						)
					),
					'owl_config' => array
					(
						'label' 				=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_config'],
						'inputType' 			=> 'textarea',
						'eval'                  => array
						(
							'style' =>'width:500px; height: 80px;',
							'rows'	=> 5,
							'cols'	=> 20
						)
					),
				)
			),
			'sql'                     	=> "blob NULL"
		),
		'owl_responsiveRefreshRate' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_responsiveRefreshRate'],
			'inputType'					=> 'text',
			'exclude'					=> true,
			'default'					=> 200,
			'eval'						=> array
			(
					'tl_class'		=> 'w50',
					'rgxp'			=> 'digit'
			),
			'sql'                     	=> "smallint(10) unsigned NOT NULL default '0'"
		),
		'owl_responsiveBaseElement' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_responsiveBaseElement'],
			'inputType'					=> 'text',
			'default'					=> 'window',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
			),
			'sql'                     	=> "varchar(255) NOT NULL default ''"
		),
		'owl_responsiveClass' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_responsiveClass'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50',
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_video' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_video'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'eval'						=> array
			(
					'tl_class'		=> 'w50 clr',
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
		'owl_videoHeight' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_videoHeight'],
			'inputType'					=> 'text',
			'exclude'					=> true,
			'eval'						=> array
			(
				'tl_class'		=> 'w50 clr',
				'rgxp'			=> 'digit'
			),
			'sql'                     	=> "smallint(10) unsigned NOT NULL default '0'"
		),
		'owl_videoWidth' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_videoWidth'],
			'inputType'					=> 'text',
			'exclude'					=> true,
			'eval'						=> array
			(
					'tl_class'		=> 'w50',
					'rgxp'			=> 'digit'
			),
			'sql'                     	=> "smallint(10) unsigned NOT NULL default '0'"
		),
		'owl_animateOut' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_animateOut'],
			'inputType'					=> 'text',
			'exclude'					=> true,
			'eval'						=> array
			(
					'tl_class'		=> 'w50',
			),
			'sql'                     	=> "varchar(255) NOT NULL default ''"
		),
		'owl_animateIn' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_animateIn'],
			'inputType'					=> 'text',
			'exclude'					=> true,
			'eval'						=> array
			(
					'tl_class'		=> 'w50',
			),
			'sql'                     	=> "varchar(255) NOT NULL default ''"
		),
		'owl_fallbackEasing' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_fallbackEasing'],
			'inputType'					=> 'text',
			'default'					=> 'swing',
			'exclude'					=> true,
			'eval'						=> array
			(
					'tl_class'		=> 'w50',
			),
			'sql'                     	=> "varchar(255) NOT NULL default ''"
		),
		'owl_rtl' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_owlcarousel_spread']['owl_rtl'],
			'inputType'					=> 'checkbox',
			'exclude'					=> true,
			'eval'						=> array
			(
					'tl_class'		=> 'w50 clr',
			),
			'sql'                     	=> "char(1) NOT NULL default ''"
		),
	)
);