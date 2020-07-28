
<?php
session_start();
include_once"crud.php";
?>
<head>
  <meta charset="utf-8" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/login.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<header>
<ul>
  <li><a class ="a"href="Home.php">Home</a></li>
  <li><a class ="a"href="#about">Admission Info</a></li>
  <li><a class ="b"href="login.php">Login/reg</a></li>
  <li><a class ="b"href="searchresult.php">Result</a></li>
</ul>
</header>
   <center>
    <body>
    <form action="login.php" method="POST">
  <div class="imgcontainer">
    <img src="img/user.png" alt="Avatar" class="avatar">
  
  <center><h2>Student Login</h2></center>

  <div class="container">
    <input type="email" placeholder="Enter Your email" name="email" required>
<br>
    <input type="password" placeholder="Enter Your Password" name="psw" required>
        <br>
    <input type="submit" value="Login" name="submit" class="submit">

    <h2> Dont have a account?</h2>
    <a href="registrar.php" class="signup">Sign Up</a>
  </div>
  </div>
</form>
</body>
    </center>


<?php
	$Crud=new crud();
	if (isset($_POST['submit'])) {
		$email=$_POST['email'];
		$password=$_POST['psw'];
		$loggedIn=$Crud->getData("select * from register where email='$email' and password='$password'");
    foreach ($loggedIn as  $log) {
      $email=$log['email'];
    }

		if ($loggedIn) {
			$_SESSION['email']=$email;
			header('location:Afterlogin.php');
		}
    else{
      echo "Incorrect Username or Password";
    }
	}
	?>
  <?php
    include 'footer.php';
    ?>
