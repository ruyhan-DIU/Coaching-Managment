<?php
	include_once 'crud.php';
	
	$crud = new crud();
	
	$id = $_GET['id'];
	
	$query = "select * from register where id=$id";
	
	$result = $crud->getData($query);
	
	foreach($result as $res){
		$id = $res['id'];
        $name = $res['name'];
        $phone = $res['phone'];
        $address = $res['address'];
        $fatherName = $res['fatherName'];
        $email = $res['email'];
	}
?>

<form action="editaction.php" method="POST" class="form">
	<input type="number" name="id" hidden value="<?php echo $id;?>"/>
   Name: <input type="text" name="name" value="<?php echo $name;?>"/>
   Phone: <input type="text" name="phone" value="<?php echo $phone;?>"/>
Address:<input type="text" name="address" value="<?php echo $address;?>"/>
	Fathers Name:<input type="text" name="fatherName" value="<?php echo $fatherName;?>"/>
	Email:<input type="email" name="email" value="<?php echo $email;?>"/>
	<input type="submit" name="update" value="update" class="update" />
</form>

<style>
	input[type="text"], input[type=Email]{
		width: 100%;
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