<?php
session_start();
if(!isset($_SESSION['email']))
{
    header("location:adminlogin.php");
}
?>
<html>

  <head>
  
  <title>Insert Subject</title>
  <link rel="stylesheet" type="text/css" href="css/adminhome.css"/>
  <link rel="stylesheet" type="text/css" href="css/admission.css"/>
  </head>
  <header>
  <ul>
  <li><a class ="b"href="logout.php">Log out</a></li>
  <li><a class ="a"href="AdminHome.php">Admin Panel</a></li>

</ul>
</header>
    <body>
  <form action="resultinput.php" method = "POST">
  <center>

    <br>
    <br>
    <h1 align = "center"> Insert Result</h1>
    <br>
    <br>
    <table align ="center" cellpadding = "10">
      <tr>
  <td>Student ID:</td>
        <td><input type="number" placeholder="Enter Student ID" name="student_id1"></td>
</tr>
  <tr>
  <td>Subject 1:</td>
        <td><input type="text" placeholder="Subject Name" name="subject1"></td>
<td>Result:</td>
<td><input type="text" placeholder="Enter Marks" name="mark1" ></td>
</tr>
  <tr>
  <td>Subject 2:</td>
        <td><input type="text" placeholder="Subject Name" name="subject2" ></td>
<td>Result:</td>
<td><input type="text" placeholder="Enter Marks" name="mark2" ></td>
</tr>
  <tr>
  <td>Subject 3:</td>
        <td><input type="text" placeholder="Subject Name" name="subject3" ></td>
<td>Result:</td>
<td><input type="text" placeholder="Enter Marks" name="mark3" ></td>
</tr>
  <tr>
  <td>Subject 4:</td>
        <td><input type="text" placeholder="Subject Name" name="subject4" ></td>
<td>Result:</td>
<td><input type="text" placeholder="Enter Marks" name="mark4" ></td>
</tr>
  <tr>
  <td>Subject 5:</td>
        <td><input type="text" placeholder="Subject Name" name="subject5" ></td>
<td>Result:</td>
<td><input type="text" placeholder="Enter Marks" name="mark5" ></td>
</tr>
</table>

<tr>
<input type="submit" value="Submit" name="submit">
<input type="reset" value="Reset" name="reset">
</tr>

</form>
    </body>
    </center>
  </html>

<?php 
include_once 'crud.php';
   $crud = new crud();

   if(isset($_POST['submit'])){
       $student_id1 = $_POST['student_id1'];
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


       $res = $crud->getData("select student_id from admission where student_id='$student_id1'");
       if($res){
           $resa= $crud->execute("insert into result (student_id1,subject1,mark1,subject2,mark2,subject3,mark3,subject4,mark4,subject5,mark5) values('$student_id1','$subject1','$mark1','$subject2','$mark2','$subject3','$mark3','$subject4','$mark4','$subject5','$mark5')");
           echo("Result Inserted");
       }
       else{
           echo("ID not Found");
           echo("<br/>");
       }

   }
?>
<?php
    include 'footer.php';
    ?>

