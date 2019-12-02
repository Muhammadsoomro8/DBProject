
<?php

	$conn = new mysqli('localhost','root','','firsttable');
	if($conn->connect_error){
		die("Error in connecting to database.");
	}

	#query for fetching the data from admin table
	$sqlquery = "SELECT firstname,lastname,email,password,confirmpassword,id,fathername,cnicnum,cityname,birthdate,batchno,facultymember,mobilenumber,fathermobilenum,recommandation,roomcategory,roomtype,image,roomnum FROM temptable";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Admin db</title>
	<style type="text/css">
		th{
			border: 1px solid black;
			text-align: center;
			color: white;
			background-color:black; 
			width: 200px;
			height: 50px;
		}
		td{
			border: 1px solid black;
			text-align: center;
			color: black;
			background-color: lavender;
			width: 200px;
			height: 50px;
			font-size: 20px;
		}
		.stylebutton{
			height: 80px;
			width: 350px;
			border-radius: 20px;
			font-size: 30px;
			color: white;
			background-color: black;
		}
	</style>
</head>
<body>
	
	<center><h1></h1></center>
	<br>
	<center>
		<h1>Welcome Admin</h1>
		<table>
		<tr>
			<th>no:</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>ID</th>
			<th>Father Name</th>
			<th>CNIC</th>
			<th>City</th>
			<th>Birth Date</th>
			<th>Batch</th>
			<th>Faculty</th>
			<th>Mobile</th>
			<th>Father Mobile</th>
			<th>Recommand</th>
			<th>Room Cat:</th>
			<th>Room Type</th>
			<th>Image</th>
			<th>Room Number</th>
		</tr>

		<?php
			$i=0;
			if ($result=$conn->query($sqlquery)) {
				# code...
				while ($rows=$result->fetch_assoc()) {	
		?>
			<tr>
				<?php
					$newfname=$rows['firstname'];
					$newlname=$rows['lastname'];
					$newemail=$rows['email'];
					$newpassword=$rows['password'];
					$newconfirm=$rows['confirmpassword'];
					$newid=$rows['id'];
					$newfather=$rows['fathername'];
					$newcnic=$rows['cnicnum'];
					$newcity=$rows['cityname'];
					$newbdate=$rows['birthdate'];
					$newbatch=$rows['batchno'];
					$newfaculty=$rows['facultymember'];
					$newmobile=$rows['mobilenumber'];
					$newfmobile=$rows['fathermobilenum'];
					$newrecomand=$rows['recommandation'];
					$newroomcat=$rows['roomcategory'];
					$newroomt=$rows['roomtype'];
					$newimg=$rows['image'];
					$newroomnum=$rows['roomnum'];

				?>
				<td><?php echo ($i++) ?></td>
				<td><?php echo ($newfname); ?></td>
				<td><?php echo ($newlname); ?></td>
				<td><?php echo ($newemail); ?></td>
				<td><?php echo ($newid); ?></td>
				<td><?php echo ($newfather); ?></td>
				<td><?php echo ($newcnic); ?></td>
				<td><?php echo ($newcity); ?></td>
				<td><?php echo ($newbdate); ?></td>
				<td><?php echo ($newbatch); ?></td>
				<td><?php echo ($newfaculty); ?></td>
				<td><?php echo ($newmobile); ?></td>
				<td><?php echo ($newfmobile); ?></td>
				<td><?php echo ($newrecomand); ?></td>
				<td><?php echo ($newroomcat); ?></td>
				<td><?php echo ($newroomt); ?></td>
				<td><?php echo ($newimg); ?></td>
				<td><?php echo ($newroomnum); ?></td>
			</tr>
		<?php
		}
		}
		?>
	</table>
	<br/><br/>
	<form method="POST" action="adminsend.php">
		<input type="submit" name="subbtn" value="Click to Allot" onclick="alert('Once Allot will not be changed!!')" class="stylebutton">
	</form>
	
	</center>
</body>
</html>

<?php

if (isset($_POST['subbtn'])) {

	$i=1;

	$conn = new mysqli('localhost','root','','firsttable');
	if ($conn->connect_error) {
		# code...
		die("Error in connecting to databse" . $conn->connect_error);
	}

	$sql = "SELECT * FROM temptable;";
	if ($res=$conn->query($sql)) {
		while ($rows=$res->fetch_assoc()) {
			# code...
				$newfname=$rows['firstname'];
				$newlname=$rows['lastname'];
				$newemail=$rows['email'];
				$newpassword=$rows['password'];
				$newconfirm=$rows['confirmpassword'];
				$newid=$rows['id'];
				$newfather=$rows['fathername'];
				$newcnic=$rows['cnicnum'];
				$newcity=$rows['cityname'];
				$newbdate=$rows['birthdate'];
				$newbatch=$rows['batchno'];
				$newfaculty=$rows['facultymember'];
				$newmobile=$rows['mobilenumber'];
				$newfmobile=$rows['fathermobilenum'];
				$newrecomand=$rows['recommandation'];
				$newroomcat=$rows['roomcategory'];
				$newroomt=$rows['roomtype'];
				$newimg=$rows['image'];
				$newroomnum=$rows['roomnum'];


			$query1 = "INSERT INTO student (Student_Id,First_Name,Last_Name,Email,Password,Father_Name,CnicNumber,DateOfBirth,City,ContactNumber,BatchNumber,Faculty_Member,Recommandation,Room_Number) VALUES($newid,'$newfname','$newlname','$newemail','$newpassword','$newfather','$newcnic','$newbdate','$newcity','$newmobile','$newbatch','$newfaculty','$newrecomand',$newroomnum);";

			if ($conn->query($query1)===TRUE) {
				# code...
				echo "Data stored in database succesfully..";
			}
			else{
				echo "Error in storing data in database :" . $conn->error;
			}
		}
	}


		if ($res=$conn->query($sql)) {
			# code...
			while ($rows=$res->fetch_assoc()) {
				# code...
				$query2 = "INSERT INTO alotroom (Roomid,Roomcat,Roomtype,Roomrent,Bookingstatus,Totalstd) VALUES($newroomnum,'$newroomcat','	$newroomt',8000,'Alloted',4);";
				if ($conn->query($query2)===TRUE) {
					# code...
					echo "Data stored succesfully in table 2";
				}
				else{
					echo "Error in Storing information in table 2 : " . $conn->error;
				}
			}
		}
	}
?>