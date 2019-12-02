<!DOCTYPE html>
<html>
<head>
	<title>United Boys Hostel</title>

	<style type="text/css">
	.place{
	    padding:200px 100px;
    }

    input[type="text"],input[type="password"]{
    	height: 40px;
    	width: 320px;
    	border-radius: 10px;
    	border:2px solid darkgray;
    	font-size: 20px;
    	color: black;
    	background-color: darkgray;

    }

    input[type="submit"]{
    	height: 50px;
    	width: 320px;
    	border: 2px solid deepskyblue;
    	border-radius: 20px;
    	color: black;
    	background-color: deepskyblue;
    	font-size: 20px;
    	font-family: verdana;

    }

    input[type="text"]:hover{
    	box-shadow: 2px 4px 4px black;
    	transition-duration: 0.5s;
    }

    input[type="password"]:hover{
    	box-shadow: 2px 4px 4px black;
    	transition-duration: 0.5s;
    }

    input[type="submit"]:hover{
    	box-shadow: 2px 4px 4px black;
    	transition-duration: 0.5s;
    }

    .box{
    	width: 400px;
    	padding: 40px;
    	position: absolute;
    	top: 25%;
    	background-color: white;
    	border:2px solid lightgrey;
    	box-shadow: 1px 2px 2px darkgray;
    }
	</style>
	
</head>
<body>
	<img src="index.jpg" style="float: right;height: 650px;width: 650px;">
    <p style="font-size: 40px;padding: 60px 130px;color: deepskyblue;"><ins>United Boys Admin Portal</ins></p>
	<form action="profile.php" method="POST" onsubmit="return validation()">
		<div class="place">
			<div class="box">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="uname" id="uname" placeholder=" Email" title="Enter email"><br/><br/>
		    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pass" id="pass" placeholder=" password" title="Enter password"><br/><br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="login" id="login">Keep me logged in.<br/><br/><br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p id="demo" style="color:red;"></p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" id="submit" value="Sign in &raquo;" title="Click to Sign in">
				<br/><br/><br/>
			</div>
	    </div>
	</form>
	
	<script type="text/javascript">
		function validation(){
			var user=document.getElementById('uname').value;
			var pass=document.getElementById('pass').value;

            if(user=="admin@gmail.com" && pass=="admin123"){
                return true;
            }

			else{
				document.getElementById('demo').innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;**Enter valid email and password!";
				return false;
			}
			 
		}
	</script>
</body>
</html>