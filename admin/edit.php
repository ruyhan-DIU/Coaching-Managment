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
	
	$id = $_REQUEST['id'];
	
	$query = "select * from admission where id=$id";
	
	$result = $crud->getData($query);
	
	foreach($result as $res){
		  $id=$res['id'];
       $studentname=$res['studentname'];
       $fathername =$res['fathername'];
       $mothername=$res['mothername'];
       $birth = $res['birth'];
       $email = $res['email'];
       $phone = $res['phone'];
       $address = $res['address'];
       $sclass = $res['sclass'];
       $subjects = $res['subjects'];
	}
?>
<center>
	<h2>Student Data Update</h2>
	<input type="text" id="sid" name="id" hidden value="<?php echo $id;?>"/>
	<input type="text" class="b" id="studentname" name="studentname" value="<?php echo $studentname;?>"/>
	<input type="text" class="b" id="fathername" name="fathername" value="<?php echo $fathername;?>"/>
    <input type="text" class="b" id="mothername" name="mothername" value="<?php echo $mothername;?>"/>
	<input type="date" class="b" id="birth" name="birth" value="<?php echo $birth;?>"/>
	<input type="email" class="b" id="email" name="email" value="<?php echo $email;?>"/>
	<input type="number" class="b" id="phone" name="phone" value="<?php echo $phone;?>"/>
	<input type="text" class="b" id="address" name="address" value="<?php echo $address;?>"/>
	<input type="text" class="b" id="sclass" name="sclass" value="<?php echo $sclass;?>"/>
	<input type="text" class="b" id="subjects" name="subjects" value="<?php echo $subjects;?>"/>
	<input type="button" id="update" name="update" value="Update" class="update" />
	<input type="button" onclick="$('#edit-form').hide();" name="cancel" class="cancel"value="Cancel"/>
	</center>

<script type="text/javascript">
	$(document).ready(function(){
		
		$('#update').click(function(){
			
			var id = $('#sid').val();
			var studentname = $('#studentname').val();
			var fathername = $('#fathername').val();
			var mothername = $('#mothername').val();
			var birth = $('#birth').val();
			var email = $('#email').val();
			var phone = $('#phone').val();
			var address = $('#address').val();
			var sclass = $('#sclass').val();
			var subjects = $('#subjects').val();
		
			$.ajax({
				url:"editaction.php",
				type:"POST",
				data: {id:id,studentname:studentname,fathername:fathername,mothername:mothername, birth:birth, email:email, phone:phone, address:address,sclass:sclass,subjects:subjects},
				success: function(data){
					
					
						$.get('StudentInfor.php',function(data){
							$('#data-show').html(data);
						})
						$('#edit-form').slideUp();

				}
			})
		})
		
		
		
	})
</script>



<style>
.b{
		width: 10%;
  padding: 12px 0px;
  margin: 0px 5px;
  box-sizing: border-box;
  text-align: center;
  text-decoration-style: bold;
	}

	.update{
		background-color: #06491c; /* Green */
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: center;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
border-radius: 12px;
  width: 12%;
  float: center;
	}
		.cancel{
		background-color: #a60808; /* Green */
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: center;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
border-radius: 12px;
  width: 12%;
  float: right;
	}



</style>
