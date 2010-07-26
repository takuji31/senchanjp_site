<?php
class DATABASE_CONFIG {

	var $dev = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'site_dev',
		'encoding' => 'utf8'
	);
	var $pub = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'site',
		'encoding' => 'utf8'
	);
}
?>
