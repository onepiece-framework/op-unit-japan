<?php
/**
 * unit-japan:/index.php
 *
 * @created   2016-12-01
 * @version   1.0
 * @package   unit-japan
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	...
include(__DIR__.'/Japan.class.php');

//	Set locale timezone.
Time::Timezone('Asia/Tokyo');

//	Set auto loader.
spl_autoload_register( function ($path) {
	//	...
	if( strpos($path, 'Japan\\') === false ){
		return;
	}

	//	...
	$name = substr($path, 6);

	//	...
	$path = __DIR__."/{$name}.class.php";
	if( file_exists($path) ){
		include($path);
	}else{
		Notice::Set("Does not exists this file. ($path)");
	}
});