<?php

/**
 * Laravel Helpers File
 * Extracted by Alan Milani
 * alan.fabiano@gmail.com
 */

if(! function_exists('date_convert'))
{
	/**
	* Convert date and time format
	  *
	  * @param $date, $input, $output
	  *   $date 01/03/2016, $input d/m/Y, $output Y-m-d
	  * @return $date 2016-03-01
	*/
	function date_convert($date, $input, $output ){
		if (!empty($date))
		{
			$timezone = new DateTimeZone(date_default_timezone_get());
			$f_date = date_create_from_format($input, $date, $timezone);
			return date_format($f_date,$output);
		}else{
			return '';
		}

	}
}