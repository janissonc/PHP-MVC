<?php

class Conexao
{
	public static $instance;

	public static function get_instance()
	{
		if(!isset(self::$instace)){
			self::$instance = new PDO("mysql:host=localhost;dbname=agendamento;","root","",  array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
			self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}

	return self::$instance;
	}
}
