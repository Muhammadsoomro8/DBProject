<?php
session_start();
$mysqli = new mysqli('localhost','root','','hostelmanagementsystem');

if(isset($_GET['delete']))
   {
     $studentid = $_GET['delete'];
     $mysqli->query("DELETE FROM student WHERE Student_id = $studentid") or die($mysqli->error());

     $_SESSION['message'] = "Record has been deleted";
     $_SESSION['msg_type'] = "danger";

     header("Location: SearchSnippet.php");
   }
?>
