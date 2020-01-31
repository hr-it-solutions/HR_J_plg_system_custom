<?php
/**
 * @package    HR_Custom_Script
 *
 * @author     HR-IT-Solutions Florian Häusler <info@hr-it-solutions.com>
 * @copyright  Copyright (C) 2020 - 2020 HR-IT-Solutions GmbH
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 **/

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Uri\Uri;
use Joomla\CMS\Application\SiteApplication;

/**
 * Class PlgSystemHR_Custom_Script
 *
 * @since  Version  1.0.0.0
 */
class PlgSystemHR_Custom_Script extends JPlugin
{
	/**
	 * @var
	 */
	protected $app;

	/**
	 * onBeforeCompileHead
	 *
	 * @since Version 1.0.0.0
	 * @return boolean
	 */
	public function onBeforeCompileHead()
	{
		// Front end
		if ($this->app instanceof SiteApplication)
		{
			$doc = Factory::getDocument();

			$tmpl_path = Uri::base() . '/templates/' . $this->app->getTemplate() . '/';
			$doc->addScript($tmpl_path . 'js/custom.js');
		}

		return true;
	}
}
