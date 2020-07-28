<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/adminhome.css"/>
</head>
<header>
  <ul>
    <li><a class ="a"href="AdminHome.php">Admin Panel</a></li>
    <li><a class ="b"href="logout.php">Log out</a></li>

</ul>
</header>
   <center> 
<body>
  
<form action="resultupdate.php" method="POST">
  <center>
  <b><input type="submit" name="search" value="RESULT UPDATE" class="s"></b>
  <input type="number" name="student_id1" placeholder="Search with Student ID">
</center>
<center>
<br>
<h6 style="color:black; font-size: 30px; font:bold; font-family: Lucida Console;">Search with ID for update result</h6>
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
    echo "<th>Subjects</th>";
    echo "<th>Marks</th>";
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
                echo "<td> <a href='editresult.php?id=$res[id]'>Edit</a></td>";
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
table a:link {
  color: #f00;
  font-weight: bold;
  text-decoration: none;
  
}

table a:visited {
  color: #00a0de;
  font-weight: bold;
  text-decoration: none;
}

table a:active,
table a:hover {
  color: #bd5a35;
  text-decoration: underline;
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