<!DOCTYPE html>
<html>
<head>
	<title>Registration | United hostel</title>

	<style type="text/css">
		input[type="text"],[type="email"],[type="password"],select{
			height: 50px;
    		width: 350px;
    		border-radius: 20px;
    		border:2px solid darkgrey;
    		font-size: 20px;
    		color: black;
    		background-color: gainsboro;
		}
		input[type="text"]:hover{
			box-shadow: 2px 4px 4px black;
    		transition-duration: 0.5s;
		}
		input[type="email"]:hover{
			box-shadow: 2px 4px 4px black;
    		transition-duration: 0.5s;
		}
		input[type="password"]:hover{
			box-shadow: 2px 4px 4px black;
    		transition-duration: 0.5s;
		}
		.fieldstyle{
			border: 5px solid black;
		}
		label{
			font-size: 20px;
			font-family: verdana;
		}
		input[type="submit"]{
			height: 50px;
    		width: 350px;
    		border-radius: 20px;
    		border:2px solid darkgrey;
    		font-size: 20px;
    		color: white;
    		background-color: black;
		}

		.footer{
			font-family: script;
			float: right;
			font: 30px;
			color: black;
		}
	</style>
</head>
<body>
	<center>
		<br/>
		<mark>Registration period is not active...</mark>
		<br/><br/><br/>
		<img src="https://png.pngtree.com/svg/20170427/requirement_registration_6885.png" height="150px" width="150px">
		<h1><ins>Registration</ins></h1>
		<br/><br/><br/>
        
		<form action="sendregister.php" method="POST" onsubmit="return validation()">
			<fieldset class="fieldstyle">
				<br/><br/>
			 <label>First name:</label><input type="text" name="fname" id="fname" placeholder=" Enter first name" required="" maxlength="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Last name:</label><input type="text" name="lname" id="lname" placeholder=" Enter last name" maxlength="10" required="required"><br/><br/>
			<label>User email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="email" name="email" id="email" placeholder=" Enter your email" maxlength="20" required="required" required="required"><br/><br/>
			<label>User password:&nbsp;&nbsp;</label><input type="password" name="pass1" id="pass1" placeholder=" Enter your password" maxlength="10" required="required"><br/><br/>
			<label>Confirm Password:&nbsp;&nbsp;&nbsp;</label><input type="password" name="pass2" id="pass2" placeholder=" Confirm password" maxlength="10" required="required"><br/><br/>
			<label>ID:&nbsp;&nbsp;&nbsp;</label><input type="text" name="stdid" id="stdid" placeholder="Enter your nu id." maxlength="4" required="required">
			<br/><br/>

			<br/>
			    <p id="demo" style="color: red;"></p>
			<br/>
			<br/><br/>

			<h2><ins>Other information....</ins></h2>
			<label>Father name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="fathername" id="fathname" placeholder=" Enter Father name" maxlength="15" required="required"><br/><br/>
			<label>CNIC num:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="cnic" id="cnic" placeholder=" XXXXX-XXXXXXX-X" maxlength="13" required="required"><br/><br/>
			<label>city name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="city" id="city" placeholder=" Enter your city" maxlength="12" required="required"><br/><br/>
			<label>Birth Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="bdate" id="bdate" placeholder=" XX-XX-XXXX" maxlength="10"  required="required"><br/><br/>
			<label>Batch no:&nbsp;&nbsp;&nbsp;</label>
			<select name="batch"  required="required">
				<option>--select--</option>
				<option>2016</option>
				<option>2017</option>
				<option>2018</option>
				<option>2019</option>
			</select>
			<br/><br/>
			<label>Faculty member:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="fmember" id="fmember" placeholder=" Y/N" maxlength="1"  required="required"><br/><br/>
			<label>Enter mobile number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="mobile" id="mobile" placeholder=" 03XX-XXXXXXX" maxlength="11"  required="required"><br/><br/>
			<label>Enter father num:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="fmobile" id="fmobile" placeholder=" 03XX-XXXXXXX" maxlength="11"  required="required"><br/><br/>
			<label>Recommendation:</label><br/>
			<textarea rows="8"  cols="50" name="recmd" style="background-color: lightgray;border:2px solid gray;font-family: serif;
			font-size:20px;"  required="required">Who Recommended you to join this hostel?</textarea><br/><br/>
			<br/><br/>
			<label>Room-Category:&nbsp;&nbsp;&nbsp;</label>
			<select name="roomct"  required="required">
				<option>--select--</option>
				<option>A</option>
				<option>B</option>
			</select>
			<br/><br/>
			<label>Room-Type:&nbsp;&nbsp;&nbsp;</label>
			<select name="roomt"  required="required">
				<option>--select--</option>
				<option>2-bed</option>
				<option>3-bed</option>
				<option>4-bed</option>
			</select>
			<br/><br/>


			<label>Room Number:&nbsp;&nbsp;&nbsp;</label>
			<select name="roomnum" required="required">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
			</select>
			<br/><br/><br/>
			



			<label>Upload Image:&nbsp;&nbsp;&nbsp;</label><input type="file" name="stdimg">
			<br/><br/><br/>
			<input type="submit" name="submit" value="Submit &raquo;" onclick="alert('Entered information will not be change..')">
			</fieldset>
		</form>
		
	</center>

	<h1 class="footer">United boys hostel</h1>
</body>
</html>