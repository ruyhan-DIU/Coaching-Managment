<?php
session_start();
if(!isset($_SESSION['email']))
{
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<title>Coaching Center</title>
<head>
  <meta charset="utf-8" />
   <link href="css/profile.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<header>
<ul>
  <li><a class ="a"href="Afterlogin.php">Home</a></li>
  <li><a class ="a"href="#about">Admission Info</a></li>
  <li><a class ="b"href="logout.php">Log out</a></li>
   <li><a class ="b"href="profile.php">Profile</a></li>
   <li><a class ="b"href="searchresult.php">Result</a></li>

</ul>
</header>
<body>

</body>



  <?php
include_once 'crud.php';

$crud = new crud();
$show=$_SESSION['email'];

$query = "select * from register where email='$show'";

$result  = $crud->getData($query);

?>
<h4 style="color:black; font-size: 20px;font-family:Lucida Console;">Student Profile</h4>
 <td><h2>Profile Pic</h2></td>
    <?php foreach($result as $key=> $res){
    echo "<td><image width='50%' src='".$res['image']."'/></td>";
     }?>
<table border = "1">

<tr>
<td><h2>Name</h2></td>
<?php foreach($result as $key=> $res){
    echo "<td>".$res['name']."</td>";
  }?>
</tr>


<tr>
<td><h2>Phone</h2></td>
<?php foreach($result as $key=> $res){
    echo "<td>".$res['phone']."</td>";}?>
</tr>


<tr>
<td><h2>Address</h2></td>
<?php foreach($result as $key=> $res){
    echo "<td>".$res['address']."</td>";}?>
</tr>


<tr>
<td><h2>Father Name</h2></td>
<?php foreach($result as $key=> $res){
    echo "<td>".$res['fatherName']."</td>";}?>
</tr>


<tr>
<td><h2>Email</h2></td>
<?php foreach($result as $key=> $res){
    echo "<td>".$res["email"]."</td>";}?>
</tr>


<tr>
	<td><h2></h2></td>
	<?php foreach($result as $key=> $res){
    echo "<td> <a href='edit.php?id=$res[id]'>Edit</a></td>";
}?>

</tr>


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

    </style>
