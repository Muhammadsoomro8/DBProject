<?php 

$conn = new mysqli('localhost','root','','firsttable');

$enterfname=$_POST['fname'];
$enterlname=$_POST['lname'];
$enteremail=$_POST['email'];
$enterpass=$_POST['pass1'];
$enterconfirm=$_POST['pass2'];
$enterid=$_POST['stdid'];
$enterfather=$_POST['fathername'];
$entercnic=$_POST['cnic'];
$entercity=$_POST['city'];
$enterbdate=$_POST['bdate'];
$enterbatch=$_POST['batch'];
$enterfaculty=$_POST['fmember'];
$entermobile=$_POST['mobile'];
$enterfathernum=$_POST['fmobile'];
$enterrecomand=$_POST['recmd'];
$entertoomcat=$_POST['roomct'];
$enterroomtype=$_POST['roomt'];
$enterimage=$_POST['stdimg'];
$roomnum=$_POST['roomnum'];



if ($conn->connect_error) {
	# code...
	die("Error in connecting to database.." . $conn->connect_error);
}

$sql = "INSERT INTO temptable (firstname,lastname,email,password,confirmpassword,id,fathername,cnicnum,cityname,birthdate,batchno,facultymember,mobilenumber,fathermobilenum,recommandation,roomcategory,roomtype,image,roomnum) VALUES('$enterfname','$enterlname','$enteremail','$enterpass','$enterconfirm',$enterid,'$enterfather','$entercnic','$entercity','$enterbdate','$enterbatch','$enterfaculty','$entermobile','$enterfathernum','$enterrecomand','$entertoomcat','$enterroomtype','$enterimage','$roomnum');";

if ($conn->query($sql)===TRUE) {
	# code...
	echo "<center><h1><ins>Continue your Allotment process..</ins></h1></center>";
}
else{
	echo "Error in sending information to admin,Try again.." . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Payment | United Boys Hostel</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

input[type="submit"]{
	height: 60px;
	width: 120px;
	color: white;
	background-color: teal;
	border:2px solid teal;
	border-radius: 20px;
	font-size: 40px;
	font-family: serif;
}

</style>
</head>
<body>
<center>
	<br><br>
	<i class="material-icons" style="font-size: 70px;">monetization_on</i><span style="font-size: 60px;"><ins>Payment Info</ins></span>
	<br/><br/><br/><br/>
	<img src="hbl-logo.jpg" style="height: 250px;width: 800px;" /><br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<form method="POST" action="finalregister.php">
		<input type="submit" name="finalbtn" value="pay&raquo;">
	</form>
</center>
</body>
</html>
