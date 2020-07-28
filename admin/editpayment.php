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
	
	$query = "select * from admission where id=$id";
	
	$result = $crud->getData($query);
	
	foreach($result as $res){
		  $id=$res['id'];
       $payable=$res['payable'];
       $paid=$res['paid'];
       $due=$res['due'];
	}
?>
<center>
<form action="editactionpayment.php" method="POST" class="form">
  <h2>Payment Update</h2>
	<input type="text" name="id" hidden value="<?php echo $id;?>"/>
    Payable: <input type="number" name="payable" value="<?php echo $payable;?>"/>

   <br>
   <br>
    Paid: <input type="number" name="paid" value="<?php echo $paid;?>"/>

   <br>
   <br>
    Due Payment: <input type="number" name="due" value="<?php echo $due;?>"/>

   <br>
	<input type="submit" name="update" value="update" class="update" />
</form>
</center>
<style>
	input[type=number]{
		width: 50%;
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