

<?php
include_once 'crud.php';

$crud = new crud();

$query = "select * from admission order by id DESC";

$result  = $crud->getData($query);

?>
<table id = "customers" border=".5">

  <th><h3>Student ID</h3></th>

<th><h3>Admission Date(mm/dd/yy)</h3></th>
<th><h3>Student Name</h3></th>
<th><h3>Father Name</h3></th>
<th><h3>Mother Name</h3></th>
<th><h3>Date Of Birth(mm/dd/yy)</h3></th>
<th><h3>Email</h3></th>
<th><h3>Mobile Number</h3></th>
<th><h3>Gender</h3></th>
<th><h3>Address</h3></th>
<th><h3>Class</h3></th>
<th><h3>Subjects</h3></th>
</tr>


<?php 

foreach($result as $key=> $res){
    echo "<tr>";
      echo "<td>".$res["student_id"]."</td>";
    echo "<td>".$res['date']."</td>";
    echo "<td>".$res['studentname']."</td>";
    echo "<td>".$res['fathername']."</td>";
    echo "<td>".$res['mothername']."</td>";
    echo "<td>".$res["birth"]."</td>";
    echo "<td>".$res["email"]."</td>";
    echo "<td>".$res["phone"]."</td>";
      echo "<td>".$res["gender"]."</td>";
        echo "<td>".$res["address"]."</td>";
          echo "<td>".$res["sclass"]."</td>";
          echo "<td>".$res["subjects"]."</td>";
    echo "<td><button id=".$res['id']." class='edit'>Edit</button>
		 <a href='delete.php?id=$res[id]'>Delete</a></td>";
               echo "</tr>";
}

?>

</table>


<script type="text/javascript" src="js/jquery.min.js"></script>
		

<script type="text/javascript">
$(document).ready(function(){

$('.edit').click(function(){
			var id = $(this).attr('id');
			$.ajax({
				url:"edit.php",
				type:"POST",
				data: {id:id},
				success: function(data){
					$('#edit-form').show();
					$('#edit-form').html(data);
				}
			})
		})

})
</script>





<?php
    include 'footer.php';
    ?>
    <style>
    	@import url(https://fonts.googleapis.com/css?family=Oswald:400,700,300);
body{
  width: 100%
}
* {
  font-family: "italic";
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

    </style>





