<?php
	class Conecta{

	public static $connect;


	public static function abrirConexao(){
		//se não existir ainda...
		if(!isset(self::$connect)){
			self::$connect= new PDO ('mysql:host=localname; dbname=nome_bd','root','',
				array (PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8'));
			self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	return self::$connect; 
	}
	} 
?>
