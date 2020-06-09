<?php 
	require_once("../model/BaberDetailModel.php");	
	$id = $_REQUEST["id"];
	$barbersDetail = new BarbersDetailModel();
	$arrayBarbersDetail = $barbersDetail ->getBarbersDetail($id);	   
	require_once("../view/BaberDetailView.php");
 ?>