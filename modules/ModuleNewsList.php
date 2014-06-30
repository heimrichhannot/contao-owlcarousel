<?php

namespace HeimrichHannot\OwlCarousel;


/**
 * Class ModuleNewsList
 *
 * Front end module "news list".
 * @copyright  Leo Feyer 2005-2014
 * @author     Leo Feyer <https://contao.org>
 * @package    News
 */
class ModuleNewsList extends \ModuleNewsList
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_newslist';

	public function generate()
	{
		if($_GET && \Environment::get('isAjaxRequest') && \Input::get('fmd'))
		{
			$objModule = \ModuleModel::findByPk(\Input::get('fmd'));
			
			if($objModule === null) die();
			
			die(OwlConfig::createConfig($objModule));
		}
		
		if (TL_MODE == 'BE')
		{
			$objTemplate = new \BackendTemplate('be_wildcard');
		
			$objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['newslist'][0]) . ' ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;
		
			return $objTemplate->parse();
		}
		
		parent::generate();
		
		global $objPage;
		
		if($this->addOwl)
		{
			$this->Template->class .= ' owl-carousel';
			$this->Template->cfgSrc = ampersand($this->generateFrontendUrl($objPage->row()) . '?act=' . OWLCAROUSEL_ACT_CONFIG . '&fmd='. $this->id);
		}
		
		
		return $this->Template->parse();
	}


	/**
	 * Generate the module
	 */
	protected function compile()
	{
		parent::compile();
	}
}