<!DOCTYPE html>
<html>
<head>
  <title>Profile | United Boys Hostel</title>
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
</style>
</head>
<body>

<div class="sidenav">
  <a href="newprofile.html">Personal info</a>
  <a href="newroom.html">Room info</a>
  <a href="newhostelfees.html">Hostel Fees</a>
  <a href="newcomplain1.php">Complain Box</a>
  <a href="newpayment.html">Payment</a>
  <a href="firstpage.html">Back&raquo;</a>
</div>

<center>
       <i class="material-icons" style="font-size: 80px;">chat_bubble_outline</i><span style="font-size: 50px;"><ins>Complain Box</ins></span>
<br/><br/><br/>



<form method="POST" action="newcomplain1.php">
        <textarea rows="20" cols="80" name="comptext">Enter your complain here..</textarea><br/><br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="sub" value="Send &raquo;" style="font-size: 20px;color: white;background-color: black;border-radius: 20px;height: 50px;width: 100px;font-family: verdana;" />
 
</form>

</center>

<br/>
    <h1 style="float: right;font-family: script;font-size: 50px;color: black;">UNITED BOYS HOSTEL</h1>
  

</body>
</html> 

<?php
if (isset($_POST['sub'])) {
  # code...
$conn = new mysqli('localhost','root','','firsttable');
if ($conn->connect_error) {
  # code...
  die("Error in connecting to the database.." . $conn->connect_error);
}

$getcomplain=$_POST['comptext'];

$i=0;
$sql = "SELECT * FROM student;";

if ($res=$conn->query($sql)) {
  # code...
  while ($rows=$res->fetch_assoc()) {
    # code...
    

            $stdid=$rows['Student_Id'];
            $firstname=$rows['First_Name'];

            $newsql = "INSERT INTO recievecomplain (Student_Id,First_Name,complain) VALUES($stdid,'$firstname','$getcomplain');";
            if ($firstname=="Muhammad") {
              # code...
                  if ($conn->query($newsql)===TRUE) {
                  # code...
                    echo "Complain sent to admin succesfullly";
                  }
                  else{
                     echo "Complain failed to sent:  " . $conn->error;
                  }
            }
                  
  }

}
}
?>