<?php
session_start();
include_once"crud.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css"/>
</head>
<body>
<div class="container">
	<section id="content">
		<form action="adminlogin.php" method="POST">
			<h1>Admin Login</h1>
			<span style="color:red;font-size: 18px">
			</span>
			<div>
				<input type="text" placeholder="User" name="adminEmail"/>
			</div>
			<div>
				<input type="password" placeholder="Password" name="adminPass"/>
			</div>
			<div>
				<input type="submit" value="Log in" name="submit" />
			</div>
		</form><!-- form -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>
<?php
	$Crud=new crud();
	if (isset($_POST['submit'])) {
		$email=$_POST['adminEmail'];
		$password=$_POST['adminPass'];
		$loggedIn=$Crud->getData("select * from adminlogin where email='$email' and password='$password'");
    foreach ($loggedIn as  $log) {
      $email=$log['email'];
    }

		if ($loggedIn) {
			$_SESSION['email']=$email;
			header('location:AdminHome.php');
		}
    else{
      echo "Incorrect Username or Password";
    }
	}
	?>
  <?php
    include 'footer.php';
    ?>