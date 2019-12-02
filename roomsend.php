<?php

$newroom=$_POST['selroom'];
$conn = new mysqli('localhost','root','','adminttable');

if ($conn->connect_error) {
	# code...
	die("Error in connecting to databse.." . $conn->connect_error);
}

$sql = "SELECT * FROM temptable;";
if ($res=$conn->query($sql)) {
	# code...
	while ($rows=$res->fetch_assoc()) {
		# code...
		
		$newroomdes=$rows['roomcategory'];
		$newroomtype=$rows['roomtype'];

		$sql1 = "INSERT INTO room (Room_Id,Room_Description,Room_Type,Room_Price,Booking_Status) VALUES($newroom,'$newroomdes','$newroomtype',8000,'Alloted');";

		if ($conn->query($sql1)===TRUE) {
			# code...
			echo "Data Store in database succesfully";
		}
		else{
			echo "Error in sending information to database : " . $conn->error;
		}
	}
}

?>