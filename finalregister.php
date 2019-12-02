<?php

if (isset($_POST['finalbtn'])) {
	# code...
	$conn = new mysqli('localhost','root','','firsttable');

	if ($conn->connect_error) {
		# code...
		die("Error in connecting to the database.." . $conn->connect_error);
	}

	$sql1 = "SELECT * from temptable";
	if($res=$conn->query($sql1)){
		while ($rows1=$res->fetch_assoc()) {
			# code...
			$newfname=$rows1['firstname'];
			$newlname=$rows1['lastname'];
			$newemail=$rows1['email'];
			$newpass=$rows1['password'];
			$newconfirm=$rows1['confirmpassword'];
			$newid=$rows1['id'];
			$newfather=$rows1['fathername'];
			$newcnic=$rows1['cnicnum'];
			$newcity=$rows1['cityname'];
			$newbdate=$rows1['birthdate'];
			$newbatch=$rows1['batchno'];
			$newfaculty=$rows1['facultymember'];
			$newmobile=$rows1['mobilenumber'];
			$newfathernum=$rows1['fathermobilenum'];
			$newrecomand=$rows1['recommandation'];
			$newroomcat=$rows1['roomcategory'];
			$newroomtype=$rows1['roomtype'];
			$newimage=$rows1['image'];
			$newroomnum=$rows1['roomnum'];

			#query for storing the data into WAITTABLE 
			$sql2 = "INSERT INTO waittable (firstname,lastname,email,password,confirmpassword,id,fathername,cnic,city,DOB,batch,faculty,	mobile,fathermobile,recommandation,roomcat,roomtype,image,roomnum) VALUES('$newfname','$newlname','$newemail','$newpass','$newconfirm',$newid,'$newfather','$newcnic','$newcity','$newbdate','$newbatch','$newfaculty','$newmobile','$newfathernum','$newrecomand','$newroomcat','$newroomtype','$newimage','$newroomnum');";

			if ($conn->query($sql2)===TRUE) {
					# code...
			}
			else{
				echo "Error in connecting to the database.." . $conn->error;
			}	
		}
	}

	echo "<br><center><ins><h1>Registration Successful,Wait for Allotment..</h1></ins></center>";

}

?>