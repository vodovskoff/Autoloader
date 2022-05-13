<?php

spl_autoload_register(function($class) {
		$root = $_SERVER['DOCUMENT_ROOT'];
		$ds = DIRECTORY_SEPARATOR;
		
		$filename = $root . $ds . 'src'. $ds .str_replace('\\', $ds, $class) .  '.php';
		require_once($filename);
	});

use extra\DayOfTheWeek;
use extra\etc\current_time;

$day = new DayOfTheWeek();
$day->echoDayOfTheWeek();

$date1 = new MyDate();
$date1->echodate();

$current_time = new current_time();
$current_time->echoCurrentTime();
