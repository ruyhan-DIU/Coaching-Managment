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
  <li><a class ="b"href="login.php">Student Login/reg</a></li>
</ul>
</header>
<center>
<form action="registrar.php" method = "POST" style="border:1px solid #ccc">
  <div class="container">
    <center><h1>Sign Up</h1></center>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <input type="text" placeholder="Enter your name" name="name" required>
    <input type="text" placeholder="Enter Your Phone Number" name="phone" required>
    <input type="text" placeholder="Enter Your Address" name="address" required>
    <input type="text" placeholder="Enter Your Father Name" name="fatherName" required>
    <input type="email" placeholder="Enter Email" name="email" required>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
    <input type="file" name="image" required><br>
    <input type="submit" class="button" value="signup" name="submit" id="add-show">
    <a href="login.php" class="button1">Log in</a>
  </div>
  </form>
  </center>

<?php 
include_once 'crud.php';
   $crud = new crud();

   if(isset($_POST['submit'])){
   	   $name=$_POST['name'];
       $phone=$_POST['phone'];
       $address=$_POST['address'];
       $fatherName=$_POST['fatherName'];
       $email = $_POST['email'];
       $password =($_POST['psw']);
      $image = $_POST['image'];

       $res = $crud->execute("insert into register(name,phone,address,fatherName,email,password,image) values('$name','$phone','$address','$fatherName','$email', '$password','$image')");

       if($res){
           echo("Successfully registrared");
           echo("<br/>");
       }
       else{
           echo("something is wrong");
           echo("<br/>");
       }

   }

?>
 <?php
    include 'footer.php';
    ?>
        <script type="text/javascript">
$(document).ready(function(){
  $('#add-show').click(function(){
    $('#form').slideDown();
  })
})
</script>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
  width: 50%;
  padding: 10px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.button{
   background-color: #006400;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: -2px 2px;
  cursor: pointer;
border-radius: 0px;
  width: 25%;
  align-items: center;
}
.button1{
   background-color: #FF0000;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: -2px 2px;
  cursor: pointer;
border-radius: 0px;
  width: 25%;
  align-items: center;
}

.signupbtn:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #1158BF;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>