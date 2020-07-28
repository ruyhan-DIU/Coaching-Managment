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
	<title>Student Info</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/adminhome.css"/>
</head>
<body>

</body>
</html>
<?php
    include 'searchpayment.php';
    ?>

  <?php
include_once 'crud.php';

$crud = new crud();

$query = "select * from admission order by id DESC";

$result  = $crud->getData($query);

?>
<table id = "customers" border=".5">

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

foreach($result as $key=> $res){
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

?>

</table>
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

    </style>