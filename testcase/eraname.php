<?php
/**
 * module-testcase:/unit/japan/eraname.php
 *
 * @creation  2019-04-29
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @creation  2019-04-29
 */
namespace OP;

/* @var $app   UNIT\App */
/* @var $japan UNIT\Japan */
$japan = $app->Unit('Japan');

//	...
foreach( [null,'2009','2019-05-01 00:00:00','2019-04-30 23:59:59','1989-01-08','1989-01-07','1926-12-25 00:00:00','1926-12-24','1868-01-25','1868-01-24'] as $date ){
	D($date, $japan->EraName($date));
};
