<?php namespace Bakesale\Services;

class Holidays {

	/**
	 * Get the public (or national) holiday of a specified date
	 * 
	 * @param  string $date The date input (default: today)
	 * @return string       The holiday on date provided
	 */
	public static function getHoliday($date=null)
	{
		if (is_null($date))
			$date = date('Y-m-d');

		$holidate = Holidays::checkWeb($date);

		return $holidate;
	}

	/**
	 * Check online for today's holiday
	 * 
	 * @param  string $date Input date
	 * @return [type]       [description]
	 */
	private static function checkWeb($date)
	{
		return $date;
	}
}
