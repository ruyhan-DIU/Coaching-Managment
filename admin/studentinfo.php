
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
</head>
<body>
 
</body>
</html>
<?php
    include 'searchstudent.php';
    ?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$.get('StudentInfor.php',function(data){
			$('#data-show').html(data);
		})
	})
</script>



        
        <div id="edit-form"></div>
        <div id="data-show"></div>











