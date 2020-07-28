<?php
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	if(isset($_POST['update'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
        $address = $_POST['address'];
        $fatherName = $_POST['fatherName'];
        $email = $_POST['email'];
		
		$result = $crud->execute("Update register SET name='$name',phone='$phone',address='$address',fatherName='$fatherName',email='$email' where id=$id");
		
		if($result){
			header("Location:profile.php");
		}else{
			echo "Insertion Problem!";
		}
		
	}
	
	
?>