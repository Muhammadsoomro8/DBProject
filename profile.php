<?php

$conn = new mysqli('localhost','root','','firsttable');
  if($conn->connect_error){
    die("Error in connecting to database.");
  }


$sql = "SELECT * from student";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Profile | United Boys Hostel</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

  table,th,td{
   border:1px solid black;
   border-spacing:8px;
   text-align:center;
}
tr{
  background-color:blue;
  color:white;
}
th{
 background-color:black;
}

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
  <a href="profile.php">Personal info</a>
  <a href="roominfo.php">Room info</a>
  <a href="hostelfees.php">Hostel Fees</a>
  <a href="adminsend.php">Allotment</a>
  <a href="profile.php">Back &raquo;</a>
</div>

<center>
  <i class="material-icons" style="font-size: 80px;">account_circle</i><span style="font-size: 50px;"><ins>Welcome Admin</ins></span>
  <br/><br/><br/>
  <table style="width: 70%;">
<caption ><h2>Student Information..</h2></caption>
<tr>
   <th>Reg id</th>
   <th>Name</th>
   <th>Batch</th>
   <th>Faculty member</th>
   <th>City</th>
</tr>

<tr>
  <?php
  if ($res=$conn->query($sql)) {
    # code...
    while ($rows=$res->fetch_assoc()) {
      # code...
     ?>
          <td><?php echo $rows['Student_Id']; ?></td>
          <td><?php echo $rows['First_Name']; ?></td>
          <td><?php echo $rows['BatchNumber']; ?></td>
          <td><?php echo $rows['Faculty_Member']; ?></td>
          <td><?php echo $rows['City']; ?></td>
</tr>

     <?php  
    }
  }
  ?>


</table>
</center>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <h1 style="float: right;font-family: script;font-size: 50px;color: black;">UNITED BOYS HOSTEL</h1>
  

</body>
</html> 
