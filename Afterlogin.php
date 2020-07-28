<?php
session_start();
if(!isset($_SESSION['email']))
{
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	 <link href="css/style.css" rel="stylesheet" />
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
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="img/logo.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img/img0.jpg" style="width:100%">
</div>
</div>
<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
</div>
</body>
<?php
    include 'footer.php';
    ?>
  <script>
  	   var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
  </script>
 </html>
