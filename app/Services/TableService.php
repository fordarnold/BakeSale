<?php namespace Bakesale\Services;

/**
 * :'D Get it? a table service service :'D
 */
class TableService {

	/**
	 * Check if this module is enabled for this app installation
	 * @return boolean true/false
	 */
	public static function isEnabled()
	{
		return \Bakesale\Module::where('name', 'table service')->get(['enabled']);
	}
}
