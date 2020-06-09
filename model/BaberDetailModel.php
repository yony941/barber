<?php 

	class BarbersDetailModel{
		private $dbConnection;
		private $barbersDetail;

		public function __construct(){
			require_once("Connection.php");
			$this ->dbConnection = Connection::connectionDataBase();	
			$this ->barbersDetail = array(); 	

		}

		public function getBarbersDetail($id){
			$consult = $this ->dbConnection ->query("SELECT id,BarberName,BarberAdress,BarberPhone,imageSource FROM barbers where id = $id");
			while ($filas = $consult ->fetch(PDO::FETCH_ASSOC)) {
				$this -> barbersDetail[] = $filas;
			}
			return $this ->barbersDetail;

		}
	}

 ?>