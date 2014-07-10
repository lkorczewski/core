<?php

namespace Core;

class Autoloader {
	
	static function register($library_path){
		
		// appending include path
		$real_library_path = realpath($library_path);
		$include_path = get_include_path() . PATH_SEPARATOR . $real_library_path;
		set_include_path($include_path);
		
		// registering standard autoload function
		spl_autoload_register();
	}
	
}
