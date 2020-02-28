<?php
/**
 * @package    HR_Custom
 *
 * @author     HR-IT-Solutions Florian Häusler <info@hr-it-solutions.com>
 * @copyright  Copyright (C) 2020 - 2020 HR-IT-Solutions GmbH
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 **/

defined('_JEXEC') or die;

/**
 * Class PlgSystemHR_Custom
 *
 * @since  Version  1.0.0.0
 */
class PlgSystemHR_Custom extends JPlugin
{
	/**
	 * @var JApplicationWeb
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

		if ($this->app->isClient('site'))
		{
			$doc = JFactory::getDocument();

			$tmpl_path = JUri::base() . '/templates/' . $this->app->getTemplate() . '/';
			$doc->addStyleSheet($tmpl_path . 'css/custom.css');
			$doc->addScript($tmpl_path . 'js/custom.js');

			$doc->addStyleSheet(JUri::base() . 'media/plg_system_hr_custom/css/custom.css');
			$doc->addScript(JUri::base() . 'media/plg_system_hr_custom/js/custom.js');
		}

		return true;
	}
}
