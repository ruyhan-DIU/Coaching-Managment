<?php
session_start();
if(!isset($_SESSION['email']))
{
    header("location:adminlogin.php");
}
?>
<!DOCTYPE html>
<html>

<?php
	
	include_once 'crud.php';
	
	$crud = new crud();
	

	   $id=$_POST['id'];
       $studentname=$_POST['studentname'];
       $fathername =$_POST['fathername'];
       $mothername=$_POST['mothername'];
       $birth = $_POST['birth'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $address = $_POST['address'];
       $sclass = $_POST['sclass'];
       $subjects = $_POST['subjects'];


		
		$result = $crud->execute("Update admission SET studentname='$studentname',fathername='$fathername',mothername='$mothername',birth='$birth',email='$email',phone='$phone',address='$address',sclass='$sclass',subjects='$subjects' where id=$id");
		
		if($result){
			echo 'success';
		}else{
			echo 'problem';
		}
		
	
	
	
?>