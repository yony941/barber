<?php 

	class Connection{
		public static function connectionDataBase(){
			try{
				$connection = new PDO('mysql:host=localhost; dbname=barbers', 'root','');
				$connection ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$connection ->exec("SET CHARACTER SET UTF8");

			}catch (Exception $e){
				die("Error" . $e ->getMessage());
				echo "Linea de error" . $e ->getLine();

			}
			return $connection;
		}
	}


 ?>