<?php 
	
	class DB {
		protected static $con;

		public function __construct(){
			try{
				self::$con = new PDO('mysql:host=localhost; charset=utf8mb4; dbname=loginregister', 'admin', 'Carbon@786');
				self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e){
				echo "Could not connected to database ".$e->getMessage();
			}
		}
		public function getConnection(){
			if(!self::$con){
				new DB();
			}
			return self::$con;
		}
	}
?>