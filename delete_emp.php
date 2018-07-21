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
	     <td width="100%" height="100%"  align="left" valign="top">
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db_name="admin_db"; 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db_name);
if(!$conn )
{
  die('Could not connect: ' . mysql_error());
}
$emp_name = $_GET["emp_name"];
$emp_name = stripslashes($emp_name);
$emp_name = mysqli_real_escape_string($conn,$emp_name);
$sql = "DELETE FROM emp WHERE name =  '$emp_name'";
//echo $sql;
$res= mysqli_query($conn,$sql)
?>
        <div >
        <font size ="5"><?php echo "Employee Record Deleted....";?></font><br>
        </div>

        </td>    
	   </tr>
	       </table>	  
	</body>
</html>
