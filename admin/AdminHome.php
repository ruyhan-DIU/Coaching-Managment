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
    <link rel="stylesheet" type="text/css" href="css/adminhome.css"/>
     <link rel="stylesheet" type="text/css" href="css/stylehome.css"/>
</head>
<header>
	<ul>
  <li><a class ="b"href="logout.php">Log out</a></li>
  <li><a class ="a"href="AdminHome.php">Admin Panel</a></li>

</ul>
</header>
<center>
<body>
<div class="container">
  <section id="content">
    <form action="adminlogin.php" method="POST">
      <h1>Admin Panel</h1>
      <span style="color:red;font-size: 18px">
      </span>
      <a href="admission.php" class="button">Student Admission Form</a><br>
      <a href="studentinfo.php" class="button">Student information</a>
      <a href="payment.php" class="button">Student Payment</a>
      <br>
      <a href="resultinput.php" class="button">Insert Student Result</a>
      <a href="resultupdate.php" class="button">Update Result</a>
      <br>
    </form><!-- form -->
  </section><!-- content -->
</div><!-- container -->
</body>
</center>
</html>
  <?php
    include 'footer.php';
    ?>
<style>
	.button {
 background-color: #d5d8de; /* Green */
  border: none;
  color: #2b2626;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
border-radius: 12px;
  width: -20%;
}
.button:hover{
  opacity: 0.8;
}
h1{
	font-family: serif;	   
	font-weight: bold;
}
</style>