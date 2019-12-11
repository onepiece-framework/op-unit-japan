<?php
/**
 * unit-japan:/EraName.class.php
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
use OP\Env;
use OP\Notice;

/** EraName
 *
 * @created   2018-10-05
 * @version   1.0
 * @package   unit-japan
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
class EraName
{
	/** trait
	 *
	 */
	use OP_CORE;

	/** Get Japan era name.
	 *
	 * @param  string $date
	 * @return string $eraname
	 */
	static function Get($date=null)
	{
		//	...
		if( $date ){
			//	...
			if(!strpos($date, '-') ){
				Notice::Set("Date is not date. only year. ($date)");
				$date = null;
			};
		};

		//	...
		$time = $date ? strtotime($date): Env::Time();

		//	...
		foreach( [
			[
				'date' => '2019-05-01',
				'en'   => 'Reiwa',
				'ja'   => '令和',
			],[
				'date' => '1989-01-08',
				'en'   => 'Heisei',
				'ja'   => '平成',
			],[
				'date' => '1926-12-25',
				'en'   => 'Shouwa',
				'ja'   => '昭和',
			],[
				'date' => '1912-07-30',
				'en'   => 'Taishou',
				'ja'   => '大正',
			],[
				'date' => '1868-01-25',
				'en'   => 'Meiji',
				'ja'   => '明治',
			],[
				'date' => '645-07-17',
				'en'   => 'Taika',
				'ja'   => '大化',
			],
		] as $eraname ){
			if( strtotime($eraname['date']) <= $time ){
				$eraname['year'] = date('Y', $time) - date('Y', strtotime($eraname['date'])) +1;
				break;
			};
		};

		//	...
		return $eraname;
	}
}
