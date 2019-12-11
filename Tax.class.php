<?php
/**
 * unit-japan:/Tax.class.php
 *
 * @created   2018-10-05
 * @version   1.0
 * @package   unit-japan
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @created   2018-10-05
 */
namespace OP\UNIT\JAPAN;

/** Used class
 *
 * @created   2019-04-29
 */
use OP\OP_CORE;

/** Tax
 *
 * @created   2018-10-05
 * @version   1.0
 * @package   unit-japan
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
class Tax
{
	/** trait
	 *
	 */
	use OP_CORE;

	/** Get Japanese tax rate.
	 *
	 */
	function Rate($date)
	{
		$rate = null;
		return $rate;
	}
}
