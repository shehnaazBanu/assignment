<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<body >
	<table width="100%" height="100%" >
	  <tr height="10" >
	     <td>    <?php include 'header.php'; ?>    </td>
			  </tr>
	  <tr height="50">
	     <td width="100%" height="5"  align="center" valign="top">
<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="admin_db"; 
$tbl_name="login"; 
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");
$username=$_POST['username']; 
$password=$_POST['password']; 
$newpassword=$_POST['newpassword'];
$reenter=$_POST['reenter'];
$username = stripslashes($username);
$password = stripslashes($password);
$newpassword = stripslashes($newpassword);
$reenter = stripslashes($reenter);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);
$newpassword = mysqli_real_escape_string($conn,$newpassword);
$reenter = mysqli_real_escape_string($conn,$reenter);
$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
if($newpassword == $reenter){
 	$sql2="UPDATE  $tbl_name SET password = $newpassword WHERE username = $username ";
	 $result2=mysqli_query($conn,$sql2);
	 
 		echo "<br>Password changed successfully";
 }
 else
echo "Enter Correct password";
?>
        </td>    
	   </tr>
	   <tr>
	     <td ><?php include 'nav.php'; ?>    </td>
		   </tr> 
    </table>		    
</body>
</html>
