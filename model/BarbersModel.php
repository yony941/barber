<?php 

	class BarbersModel{
		private $dbConnection;
		private $barbers;

		public function __construct(){
			require_once("Connection.php");
			$this ->dbConnection = Connection::connectionDataBase();	
			$this ->barbers = array(); 	

		}

		public function getBarbers(){
			$consult = $this ->dbConnection ->query("SELECT id,BarberName,BarberAdress,BarberPhone,imageSource FROM barbers");
			while ($filas = $consult ->fetch(PDO::FETCH_ASSOC)) {
				$this -> barbers[] = $filas;
			}
			return $this ->barbers;

		}
	}

 ?>