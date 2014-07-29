<?php
namespace Craft;

/**
 * Interface IPlugin
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2014, Pixel & Tonic, Inc.
 * @license   http://buildwithcraft.com/license Craft License Agreement
 * @link      http://buildwithcraft.com
 * @package   craft.app.etc.plugins
 * @since     2.1
 */
interface IPlugin extends ISavableComponentType
{
	/**
	 * @return string|null
	 */
	public function getSettingsUrl();
}
