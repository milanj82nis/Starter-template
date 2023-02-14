<?php 


spl_autoload_register( 'class_autoloader');

function class_autoloader( $className ){

	$path = 'classes/';
	$ext = '.class.php';
	$fullPath = $path.$className.$ext;
	require_once $fullPath;
}





