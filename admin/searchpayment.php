
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
  <li><a class ="b"href="logout.php">Log out</a></li>
  <li><a class ="a"href="AdminHome.php">Admin Panel</a></li>
  <li><a class ="a"href="payment.php">Payment Info</a></li>

</ul>
</header>
<body>
	
<form action="searchpayment.php" method="POST">
  <center>
  <b><input type="submit" name="search" value="SEARCH" class="s"></b>
  <input type="number" name="student_id" placeholder="Search with ID">
</center>
<center>
<br>
<br>
<h6 style="color:black; font-size: 30px; font:bold; font-family: Lucida Console;">Payment Information</h6>
<br>
<br>
</center>
<?php
include_once 'crud.php';
$crud = new crud();

 if(isset($_POST['search']))
 {
    
    $student_id = $_POST['student_id'];

$query = "Select * from admission where student_id = '$student_id'";
$result = $crud->getData($query);

if($result) {
      ?>
  <table id = "customers" border="1">
<tr class="tr">
  <th><h3>Student ID</h3></th>
<th><h3>Admission Date(mm/dd/yy)</h3></th>
<th><h3>Student Name</h3></th>
<th><h3>Class</h3></th>
<th><h3>Subjects</h3></th>
<th><h3>Payable</h3></th>
<th><h3>Paid</h3></th>
<th><h3>Due Payment </h3></th>
<th><h3>Total Paid</h3></th>
</tr>


<?php
       foreach($result as $key=>$res)
   {
   	echo "<center><h1>Data Found</h1></center>";
   echo "<tr>";
    echo "<td>".$res["student_id"]."</td>";
    echo "<td>".$res['date']."</td>";
    echo "<td>".$res['studentname']."</td>";
    echo "<td>".$res["class"]."</td>";
    echo "<td>".$res["subjects"]."</td>";
    echo "<td>".$res["payable"]."</td>";
    echo "<td>".$res["paid"]."</td>";
    echo "<td>".$res["due"]."</td>";
    echo "<td>".$res["totalpaid"]."</td>";
    echo "<td> <a href='editpayment.php?id=$res[id]'>Edit</a></td>";
               echo "</tr>";
   }
  }
   else{
    echo "<center><h1>Data Not Found</h1></center>";
   }
}
?>
</table>

</form>
	
</body>
</html>
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
    width: 100%;
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
  color: #666;
  font-weight: bold;
  text-decoration: none;
}

table a:visited {
  color: #999999;
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