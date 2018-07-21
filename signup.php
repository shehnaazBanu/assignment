<?php
  //session_start();
  
  //connecton to database
  $conn = mysqli_connect("localhost","root","","admin_db");
  
  if (isset($_POST['signup'])){
		$username= $_POST["username"];
		$password=$_POST["password"];
		$password2=$_POST["password2"]; 
	 	//session_start();
		$username=stripslashes($username);
		$password=stripslashes($password);
		$password2=stripslashes($password2);

		$username = mysqli_real_escape_string($conn,$username);
		//$email = mysqli_real_escape_string($conn,$_POST['email']);
		$password = mysqli_real_escape_string($conn,$password);
		$password2 = mysqli_real_escape_string($conn,$password);
	  
		if($password == $password2) {
			//create user_error
			//$password = md5($password);
			$sql = "INSERT INTO login(username,password) VALUES('$username','$password')";
			$result=mysqli_query($conn,$sql);
			echo $result;
    		$_SESSION['message'] = "you are now logged in";
			$_SESSION['username'] = $username;
			header("location: homepage.php");
	  	}else{
			$_SESSION['message'] = "The two passwords do not match";
	  }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>
<h1>Signup</h1>
<form method="post" action="signup.php">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" class="textInput"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" class="textInput"></td>
		</tr>
		<tr>
			<td>Password again:</td>
			<td><input type="password" name="password2" class="textInput"></td>
		</tr>
		<tr>
			<td></td>
			</div> <br><td>
			<input type="Submit" name="signup" value="submit">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<!--<a href="update.php">update</a>-->
			
			</td>
</tr>
		</table>
</form>
</body>
</html>