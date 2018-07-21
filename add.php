<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<body style="margin:0">
	<table width="100%" height="100%" cellpadding="0" cellspacing="1">
	  <tr width="200" height="100" >
	     <td colspan="2">
	    <?php include 'header.php'; ?>
	    <br>
	    </td>
	  </tr>
	  <tr height="300">
	     <td width = "200" nowrap valign="top">
	     <?php include 'nav.php'; ?>
	     </td>
	     <td >
	     <head><h1> Enter Employee Details</h1></head>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="emp.php">
  <td>
  <table width="100%" >
  <tr>
  <td width="78">Name</td>
  <td width="6">:</td>
  <td width="294"><input name="name" type="text" id="name"></td>
  </tr>
   <tr>
  <tr>
  <td width="78">Age</td>
  <td width="6">:</td>
  <td width="294"><input name="age" type="text" id="age"></td>
  </tr>
  <tr>
  <td width="78">Location</td>
  <td width="6">:</td>
  <td width="294"><input name="location" type="text" id="location"></td>
  </tr>
  <tr>
  <td width="78">Salary</td>
  <td width="6">:</td>
  <td width="294"><input name="salary" type="text" id="salary"></td>
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
