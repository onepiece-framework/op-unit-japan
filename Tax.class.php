<?php
/**
 * unit-japan:/Tax.class.php
 *
 * @created   2016-12-01
 * @version   1.0
 * @package   unit-japan
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/**
 * Tax
 *
 * @created   2016-12-01
 * @version   1.0
 * @package   unit-japan
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
class Tax extends OnePiece
{
	/**
	 * Get japanese tax by date.
	 *
	 * <pre>
	 * $tax = Tax::Get(Time::Date());
	 * </pre>
	 *
	 * @param  string
	 * @return integer
	 */
	static function Get($date)
	{
		if(!$date){
			Notice::Set("Has not been set date.");
			return false;
		}

		//	...
		$time = strtotime($date);
		if( $time >= strtotime('2014-04-01') ){
			$tax = 8;
		}else if( $time >= strtotime('1997-04-01') ){
			$tax = 5;
		}else if( $time >= strtotime('1989-01-01') ){
			$tax = 3;
		}else{
			$tax = 0;
		}
		return $tax;
	}
}