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
       $subject1=$_POST['subject1'];
       $mark1 =$_POST['mark1'];
       $subject2=$_POST['subject2'];
       $mark2 = $_POST['mark2'];
       $subject3 = $_POST['subject3'];
       $mark3 = $_POST['mark3'];
       $subject4 = $_POST['subject4'];
       $mark4 = $_POST['mark4'];
       $subject5 = $_POST['subject5'];
       $mark5 = $_POST['mark5'];


		
		$result = $crud->execute("Update result SET subject1='$subject1',mark1='$mark1',subject2='$subject2',mark2='$mark2',subject3='$subject3',mark3='$mark3',subject4='$subject4',mark4='$mark4',subject5='$subject5',mark5='$mark5' where id=$id");
		
		if($result){
			echo "Result Updated Succesfully";
			header("Location:resultupdate.php");
		}else{
			echo "Insertion Problem!";
		}
		
	}
	
	
?>