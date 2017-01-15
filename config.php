<?php
require 'environment.php';

define("BASE_URL", "http://localhost/mvc");

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
} else {
	$config['dbname'] = 'mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}
?>