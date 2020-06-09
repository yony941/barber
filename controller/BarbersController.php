<?php 
	
	require_once("model/BarbersModel.php");	
	$barbers = new BarbersModel();
	$arrayBarbers = $barbers ->getBarbers();	   
	require_once("view/BarbersView.php");
 ?>