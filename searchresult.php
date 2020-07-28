<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<header>
  <ul>
  <li><a class ="a"href="Home.php">Home</a></li>
  <li><a class ="a"href="#about">Admission Info</a></li>
    <li><a class ="b"href="searchresult.php">Result</a></li>

</ul>
</header>
   <center> 
<body>
  
<form action="searchresult.php" method="POST">
  <center>
  <b><input type="submit" name="search" value="RESULT" class="s"></b>
  <input type="number" name="student_id1" placeholder="Search with your ID">
</center>
<center>
<br>
<h6 style="color:black; font-size: 30px; font:bold; font-family: Lucida Console;">Search with ID for result</h6>
<br>
<br>
</center>
<?php
include_once 'crud.php';
$crud = new crud();

 if(isset($_POST['search']))
 {
    
    $student_id1 = $_POST['student_id1'];

$query = "Select * from result where student_id1 = '$student_id1'";
$result = $crud->getData($query);

if($result) {
      ?>

  <table id = "customers" border="1">


<?php
       foreach($result as $key=>$res)
   {

     echo "<tr>";
    echo "<th><h2>Subjects</h2></th>";
    echo "<th><h2>Marks</h2></th>";
     echo "</tr>";
    echo "<tr>";
    echo "<td>".$res['subject1']."</td>";
    echo "<td>".$res['mark1']."</td>";
     echo "</tr>";
     echo "<tr>";
    echo "<td>".$res['subject2']."</td>";
    echo "<td>".$res['mark2']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>".$res["subject3"]."</td>";
    echo "<td>".$res["mark3"]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>".$res["subject4"]."</td>";
      echo "<td>".$res["mark4"]."</td>";
      echo "</tr>";
      echo "<tr>";
        echo "<td>".$res["subject5"]."</td>";
          echo "<td>".$res["mark5"]."</td>";
               echo "</tr>";
   }
  }
   else{
    echo "<center><h1>Result Not Found</h1></center>";
   }
}
?>
</table>

</form>
  
</body>
</center>  
</html>
<?php
    include 'footer.php';
    ?>
 <style>
      @import url(https://fonts.googleapis.com/css?family=Oswald:400,700,300);

* {
  font-family: "italic";
}

.container {
  height: 300px;
  overflow-y: auto;
}

table {
    border-collapse: collapse;
    width: 50%;
    text-align: center;
}

tr {
  cell-padding: 10px 0;
}

tr:nth-child(even) {
  background: #ececec;
}

tr:first-child {
  border-bottom: 2px solid #333;
}

th {
  font-size: 18px;
  font-family: "Lucida Console";
}

td {
  height: 40px;
  font-family: "Lucida Console";
  font-size: 13px;
  font-weight: 100;
  padding: 5px;
}
a{
  border: block;
  color: black;
  align-items: center;
}
a:hover {
  opacity:1;
}
input[type=number] {
  padding: 7px;
  font-size: 19px;
  border: 1px solid grey;
  width: 26%;
  background: #f1f1f1;
}

.s {
  width: 11%;
  padding: 7px;
  background: #333e49;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  cursor: pointer;
}

    </style>