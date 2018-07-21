<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="admin_db"; 
$tbl_name="login"; 
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");
// username and password sent from form 
$un= $_POST["username"];
$pwd=$_POST["password"]; 
// To protect MySQL injection (more detail about MySQL injection)
$un = stripslashes($un);
$pwd = stripslashes($pwd);
$un = mysqli_real_escape_string($conn,$un);
$pwd = mysqli_real_escape_string($conn,$pwd);
$sql="SELECT * FROM $tbl_name WHERE username='$un' and password='$pwd' ";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count==1){
header("location:success.php");
}
else {
echo "<h1>Invalid username or password</h1>";
//header("location:homepage.php");
}
?>
