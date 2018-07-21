<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<body >
	<table width="100%" height="100%" >
	  <tr width="200" height="100" >
	     <td ><?php include 'header.php'; ?>  </td>
	  </tr>
	  <tr height="300">
	     <td width = "220" >
	     <?php include 'nav.php'; ?>
	     </td>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,"admin_db");
if(!$conn )
{
  die('Could not connect: ' . mysql_error());
}
$emp_name = $_GET["name"];
$emp_name = stripslashes($emp_name);
$emp_name = mysqli_real_escape_string($conn,$emp_name);
$result = mysqli_query($conn,"SELECT * FROM emp where name='$emp_name'");
$row = mysqli_fetch_array($result);
?>
 <td >
	<head><h1> Update Employee Details</h1></head>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="update_emp.php">
  <td>
  <table width="100%" >
  <tr>
  <td width="78">Name</td>
  <td width="6">:</td>
  <td width="294"><input name="name" type="text" id="name" value="<?php echo $row['name'];?>"></td>
  </tr>
   <tr>
  <tr>
  <td width="78">Age</td>
  <td width="6">:</td>
  <td width="294"><input name="age" type="text" id="age" value="<?php echo $row['age'];?>"></td>
  </tr>
  <tr>
  <td width="78">Location</td>
  <td width="6">:</td>
  <td width="294"><input name="location" type="text" id="location" value="<?php echo $row['location'];?>"></td>
  </tr>
  <tr>
  <td width="78">Salary</td>
  <td width="6">:</td>
  <td width="294"><input name="salary" type="text" id="salary" value="<?php echo $row['salary'];?>">
<input name="emp_id" type="hidden" id="emp_id" value="<?php echo $row['id']; ?>"></td>
  </tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><input type="submit" name="Submit" value="Save"></td>
 </tr>
  </table>
  </td>
</form>
</tr>
</table>
     </td>    
	   </tr>
    </table>	    
    </body>
</html>
