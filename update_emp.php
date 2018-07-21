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
$tbl_name="emp"; 
$conn=mysqli_connect("$dbhost", "$dbuser", "$dbpass","$db_name")or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");
//print_r($_POST);
	$emp_id = $_POST['emp_id'];
//echo "emp is:",$emp_id;
	$v1=$_POST['name'];
	$v2=$_POST['age'];
	$v3=$_POST['location'];
    $v4=$_POST['salary'];
	$sql = "UPDATE emp SET name = " ."'".$v1."'".", age = $v2, location= " ."'".$v3."'".", salary=$v4 WHERE id = $emp_id";
//echo $sql;
$res = mysqli_query($conn,$sql);
if($res) {
		echo "A record has been updated.";
	} else {
		printf ("Could not update record: %s\n", mysqli_error($conn));
	}
?>
 </td>    
	   </tr>
	       </table>	  
	</body>
</html>
