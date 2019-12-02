<!DOCTYPE html>
<html>
<head>
	<title>Welcome to United Boys Hostel Portal</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<style type="text/css">
		.mySlides {display:none;}

		ul{
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: black;
			border-radius: 20px;
		}
		li a{
			display: block;
			text-height: 50px;
			padding: 20px 22px;
			background-color: black;
			color: khaki;
			font-family: verdana;
			text-decoration: none;

		}
		li{
			float: left;
			background-color: deepskyblue;
		}
		li a:hover{
			background-color: khaki;
			color: black;
			transition-duration: 0.5s;
		}
		.firstone{
			font-size: 50px;
			color: black;
			font-family: sans-serif;
		}
		#border{
			border:5px solid black;
		}
	</style>
</head>
<body style="background-color: khaki;">
	<ul>
		<li><a href="firstpage.html"><i class="material-icons">home</i><b>HOME</b></a></li>
		<li><a href="facility.html"><i class="material-icons">beenhere</i><b>FACILITIES</b></a></li>
		<li><a href="gallery.html"><i class="material-icons">camera_alt</i><b>GALLERY</b></a></li>
		<li><a href="sitemap.html"><i class="material-icons">directions</i><b>SITEMAP</b></a></li>
		<li><a href="contact.html"><i class="material-icons">contacts</i><b>CONTACT US</b></a></li>
		<li style="float: right;"><a href="newprofile.html"><i class="material-icons">account_circle</i></a></li>
	</ul>
	<center>
		<marquee><h1 class="firstone"><ins>WELCOME TO UNITED BOYS HOSTEL WEB PORTAL</ins></h1></marquee>
	</center>
	<br/><br/>


    <div class="w3-content w3-display-container">
  <img class="mySlides" src="https://unitedboyshostel.files.wordpress.com/2018/06/img_20180602_013235-01.jpeg?w=1024" style="width:100%" id="border">
  <img class="mySlides" src="hostelimg2.jpg" style="width:100%" id="border">
  <img class="mySlides" src="hostelimg3.jpg" style="width:100%" id="border">
  <img class="mySlides" src="hostelimg4.jpg" style="width:100%" id="border">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<br/><br/><br/>
<i class="material-icons" style="font-size: 100px;">room</i><span style="font-size: 50px;"><ins>Location</ins></span><br/><br/>
<center>
	<img src="map.png">
</center>
<br/><br/><br/>
<i class="material-icons" style="font-size: 100px;">view_headline</i><span style="font-size: 50px;"><ins>About</ins></span><br/><br/>
<center>
	<pre>
		<span style="font-size: 50px;">United Boys Hostel provide facility for <br/>   students for past 5 year through which <br/>students can find home like <br/> environment even awayfrom home..</span>
	</pre>
</center>
<br/><br/><br/>
<h1 style="float: right;font-family: script;font-size: 50px;color: black;">UNITED BOYS HOSTEL</h1>
</body>
</html>