<?php
/**
 * unit-japan:/japan.class.php
 *
 * @created   2016-12-01
 * @version   1.0
 * @package   unit-japan
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/**
 * japan
 *
 * @created   2016-12-01
 * @version   1.0
 * @package   unit-japan
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
class japan extends OnePiece
{
	/**
	 * Get japanese tax by date.
	 *
	 * <pre>
	 * $tax = japan::Tax(Time::Date());
	 * </pre>
	 *
	 * @param  string
	 * @return integer
	 */
	static function Tax($date)
	{
		return Tax::Get($date);
	}
}