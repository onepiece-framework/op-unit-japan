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

namespace Japan;

/**
 * Tax
 *
 * @created   2016-12-01
 * @version   1.0
 * @package   unit-japan
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
class Tax
{
	/**
	 * Use trait.
	 */
	use \OP_CORE;

	/**
	 * Calculate japanese consumer tax.
	 *
	 * @param integer $price
	 * @param string  $date
	 */
	static function Calc($price, $date)
	{
		//	...
		$rate = self::Rate($date);

		//	...
		return round($price * $rate / 100);
	}

	/**
	 * Get japanese consumer tax date.
	 *
	 * <pre>
	 * $rate = Tax::Rate(Time::Date());
	 * </pre>
	 *
	 * @param  string
	 * @return integer
	 */
	static function Rate($date)
	{
		if(!$date){
			Notice::Set("Has not been set date.");
			return false;
		}

		//	...
		$time = strtotime($date);
		if( $time >= strtotime('2014-04-01') ){
			$rate = 8;
		}else if( $time >= strtotime('1997-04-01') ){
			$rate = 5;
		}else if( $time >= strtotime('1989-01-01') ){
			$rate = 3;
		}else{
			$rate = 0;
		}
		return $rate;
	}
}