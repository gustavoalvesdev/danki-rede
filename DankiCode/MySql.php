<?php 

namespace DankiCode;

class MySql
{

	private static $pdo;

	public static function connect()
	{
		if (self::$pdo == null) {
			try {
				self::$pdo = new \PDO('mysql:host=localhost;dbname=rede_social_curso_devweb20', 'root', '');
			} catch(\Exception $e) {
				echo 'erro ao conectar';
				error_log($e->getMessage());
			}
		}

		return self::$pdo;
	}

	
}
