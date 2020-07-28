<?php
session_start();
if(!isset($_SESSION['email']))
{
    header("location:adminlogin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

</body>
</html>
<?php
	
	include_once 'crud.php';
	
	$crud = new crud();
	
	if(isset($_POST['update'])){
		$id=$_POST['id'];
       $payable=$_POST['payable'];
       $paid=$_POST['paid'];
       $due=$_POST['due'];


		
		$result = $crud->execute("Update admission SET payable='$payable',paid='$paid',due='$due' where id=$id");
		
		if($result){
			header("Location:payment.php");
		}else{
			echo "Insertion Problem!";
		}
		
	}
	
	
?>