<?php

	
	      define('DB_SERVER', 'localhost');
	      define('DB_USER', 'root');
	      define('DB_PASSWORD', '');
	      define('DB_NAME', 'ipperuc_web');
	      define('DB_PORT', '3306'); 

	     /*define('DB_SERVER', 'localhost');
	  	 define('DB_USER', 'ipperuc_web');
	     define('DB_PASSWORD', 'c%3_49}@Yt}^');
	     define('DB_NAME', 'ipperuc_web');
	     define('DB_PORT', '3306'); */

	class Conectar{

	    public static function conexion(){

		$conexion=new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);	
	        $conexion->query("SET NAMES 'utf8'");

	        return $conexion;

	    }
	}

	


?>