<?php
session_start();
if(!isset($_SESSION['email']))
{
    header("location:adminlogin.php");
}
?>
<html>

  <head>
  
  <title>Admission Form</title>
  <link rel="stylesheet" type="text/css" href="css/adminhome.css"/>
  <link rel="stylesheet" type="text/css" href="css/admission.css"/>
  </head>
  <header>
  <ul>
  <li><a class ="b"href="logout.php">Log out</a></li>
  <li><a class ="a"href="AdminHome.php">Admin Panel</a></li>

</ul>
</header>
  <form action="admission.php" method = "POST">
  <center>
  <body>
    <br>
    <br>
  	<h1 align = "center"> Student Admission Form</h1>
    <br>
    <br>
  	<table align ="center" cellpadding = "10">
      <td>Date:</td>
        <td>
        <input type="date" class="form-control" id="date" placeholder="Date" name="date" required>
        </td>
  <tr>
  <td>Student Name:</td>
  			<td><input type="text" placeholder="Student Name" name="studentname" required></td>
<td>Father Name:</td>
<td><input type="text" placeholder="Father Name" name="fathername" required></td>
      <td>Mother Name:</td>
<td>
        <input type="text" placeholder="Mother Name" name="mothername" required>
      </td>
</tr>
<tr> 
	<td>	Date Of Birth:</td>
<td>
      <input type="date" placeholder="Date of Birth" name="birth" required>
     </td>
        <td>
        	Email Id:
        </td>
        <td>
        <input type="email" placeholder="example@example.com" name="email" required>
    	</td>
        <td>
        	Mobile Number:
        </td>
        <td>
        <input type="number" placeholder="+88xxxxxxxx" name="phone" required>
        </td>
      	<tr>
        <td>
      		Gender:
      	</td>
      	<td>
             <select class="option" name="gender"> 
     <option >Select Gender</option>
     <option value = "Male" >Male</option>
     <option value = "Female">Female</option>
   </select>
   
     </td>
        
<!--------address------->

        <td>
        	Address:
        </td>

        <td>
        <input type="text" placeholder="Enter Address" rows = "10" column = "30" class="ta" name="address" required>
    	</td>
    </tr>
    
<!--------city------->  
<tr>
        <td>
        	Class:
        </td>
        <td>
        <input type="number" placeholder="Class" rows = "1" column = "30" name="sclass" required>
    	</td>
        <td>
          Subjects:
        </td>
        <td>
        <input type="text" placeholder="Subjects" name="subjects" required>
      </td>
        <td>
          Create Student ID:
        </td>
        <td>
        <input type="number" placeholder="Create New ID" name="student_id" required>
      </td>
    	</tr>
    	  </table>
 
<!----- Submit and Reset --->

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
       $date=$_POST['date'];
       $studentname=$_POST['studentname'];
       $fathername =$_POST['fathername'];
       $mothername=$_POST['mothername'];
       $birth = $_POST['birth'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $gender = $_POST['gender'];
       $address = $_POST['address'];
       $sclass = $_POST['sclass'];
       $subjects = $_POST['subjects'];
       $student_id = $_POST['student_id'];


       $res = $crud->execute("insert into admission(date,studentname,fathername,mothername,birth,email,phone,gender,address,sclass,subjects,student_id) values('$date','$studentname','$fathername','$mothername','$birth', '$email','$phone','$gender','$address','$sclass','$subjects','$student_id')");

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
