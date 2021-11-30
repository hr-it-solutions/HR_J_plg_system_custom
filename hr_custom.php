<?php
/**
 * @package    HR_Custom
 *
 * @author     HR-IT-Solutions Florian Häusler <info@hr-it-solutions.com>
 * @copyright  Copyright (C) 2020 - 2020 HR-IT-Solutions GmbH
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 **/

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Uri\Uri;

/**
 * Class PlgSystemHR_Custom
 *
 * @since  Version  1.0.0.0
 */
class PlgSystemHR_Custom extends JPlugin
{
    /**
     * @var JApplicationWeb
     * @since version
     */
    protected $app;

    /**
     * onBeforeCompileHead
     *
     * @since version
     * @return boolean
     */
    public function onBeforeCompileHead()
    {
        $doc = Factory::getDocument();

        $tmpl_path = Uri::base() . 'templates/' . $this->app->getTemplate() . '/';
        $doc->addStyleSheet($tmpl_path . 'css/custom.css');
        $doc->addScript($tmpl_path . 'js/custom.js');

        $doc->addStyleSheet(Uri::base() . 'media/plg_system_hr_custom/css/custom.css');
        $doc->addScript(Uri::base() . 'media/plg_system_hr_custom/js/custom.js');

        return true;
    }
}
