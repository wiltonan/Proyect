<?php
class ConexionDB{
	private static $dbhost="localhost";
	private static $dbname="informecapacidad";
	private static $dbuser="root";
	private static $dbpass="";
	private static $conn=null;
	public static function AbrirBD(){
		if (self::$conn==null) {
			try {
				self::$conn=new PDO('mysql:host='.self::$dbhost.';dbname='.self::$dbname.'',self::$dbuser,self::$dbpass);
				self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
			return self::$conn;
		}
	}
	public static function CerrarBD(){
		self::$conn=null;
	}
}
 ?>
