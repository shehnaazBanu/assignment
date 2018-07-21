<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<body >
	<table width="100%" height="100%" >
	  <tr width="200" height="100" >
	     <td colspan="2">
	    <?php include 'header.php'; ?>
	    <br>
	    </td>
	  </tr>
	  <tr height="300">
	     <td width = "100" nowrap valign="top">
	     <?php include 'nav.php'; ?>
	     </td>
	     <td >
<?php
$emp_name = $_POST['name'];

$con=mysqli_connect("localhost","root","","admin_db");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
$sql ="SELECT * FROM emp WHERE name like '$emp_name"."%'";
//echo $sql;
$result = mysqli_query($con,$sql);
echo "<table border='1'>
	<tr>
	<th>emp_id</th>
	<th>Name</th> 
	<th>Age</th>
	<th>Location</th>
	<th>Salary</th>
	</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['location'] . "</td>";
  echo "<td>" . $row['salary'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>
	    </td>    
	    </tr>	   
    </table>		  
	</body>
</html>
