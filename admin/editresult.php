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
	
	$id = $_GET['id'];
	
	$query = "select * from result where id=$id";
	
	$result = $crud->getData($query);
	
	foreach($result as $res){
		  $id=$res['id'];
       $subject1=$res['subject1'];
       $mark1 =$res['mark1'];
        $subject2=$res['subject2'];
       $mark2 =$res['mark2'];
        $subject3=$res['subject3'];
       $mark3 =$res['mark3'];
        $subject4=$res['subject4'];
       $mark4 =$res['mark4'];
        $subject5=$res['subject5'];
       $mark5 =$res['mark5'];
	}
?>
<center>
<form action="editactionresult.php" method="POST" class="form">
	<h2>Result Update</h2>
	<input type="text" name="id" hidden value="<?php echo $id;?>"/>
<br>
    Subject: <input type="text" class="a" name="subject1" value="<?php echo $subject1;?>"/>
    Marks: <input type="text" class="a" name="mark1" value="<?php echo $mark1;?>"/>
 	<br>
 	<br>
    Subject: <input type="text" class="a" name="subject2" value="<?php echo $subject2;?>"/>
    Marks: <input type="text" class="a" name="mark2" value="<?php echo $mark2;?>"/>
 	<br>
 	<br>
    Subject: <input type="text" class="a" name="subject3" value="<?php echo $subject3;?>"/>
    Marks: <input type="text" class="a" name="mark3" value="<?php echo $mark3;?>"/>
 	<br>
 	<br>
    Subject: <input type="text" class="a" name="subject4" value="<?php echo $subject4;?>"/>
    Marks: <input type="text" class="a" name="mark4" value="<?php echo $mark4;?>"/>
 	<br>
 	<br>
    Subject: <input type="text" class="a" name="subject5" value="<?php echo $subject5;?>"/>
    Marks: <input type="text" class="a" name="mark5" value="<?php echo $mark5;?>"/>
 	<br>
  
	<input type="submit" name="update" value="update" class="update" />
</form>
</center>
<style>
	.a{
		width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
	}

	.update{
		background-color: #1158BF; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
border-radius: 12px;
  width: 50%;
	}



</style>