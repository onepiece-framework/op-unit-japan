<?php
/**
 * unit-japan:/Japan.class.php
 *
 * @created   2018-07-30
 * @version   1.0
 * @package   unit-japan
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @created   2018-07-30
 */
namespace OP\UNIT;

/** Used class
 *
 * @created   2019-04-29
 */
use OP\OP_CORE;
use OP\OP_UNIT;
use OP\IF_UNIT;

/** Japan
 *
 * @created   2018-07-30
 * @version   1.0
 * @package   unit-japan
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
class Japan implements IF_UNIT
{
	/** trait
	 *
	 */
	use OP_CORE, OP_UNIT;

	/** imperial era name.
	 *
	 * @param	 string		 $date
	 */
	function EraName($date=null)
	{
		include_once('EraName.class.php');
		return JAPAN\EraName::Get($date);
	}

	/** Japanese consumption tax. (sales tax)
	 *
	 * @param	 string		 $date
	 */
	function Tax($date)
	{
		include_once('Tax.class.php');
		return JAPAN\Tax::Rate($date);
	}
}
