<?php
session_start();
if(!isset($_SESSION['id']))
{
    header("location:adminlogin.php");
}

	include_once 'crud.php';
	
	$crud = new crud();
	
	$id = $_GET['id'];
	
	if($crud->delete($id,"admission")){
		header("location:studentinfo.php");
	}


?>