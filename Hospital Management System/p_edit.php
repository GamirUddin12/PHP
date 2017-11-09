<html>
<body>
<table align="center" bgcolor="majenda" border="1" width="60%" height="50%">
	<tr>
	<td>
	<body bgcolor="#f0c869">
	<p><font face="arial" color="Green" size="+1"></font></p>
	  <p><font face="arial" color="Green" size="+1"></font></p>
	  
	<p><font color="#ff6600" size="+2"  size="+2"> &nbsp&nbsp Hospital Management System</font></p>
	<hr>
     <p><font face="arial" color="Green" size="+1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Release</font></p>
	<hr>
	
    
	<table align="center" bgcolor="#BD8B3D" border="1" width="90%" height="5%">
	<tr><th><a href="home.php"><font face="arial" color="Green" size="+1">Home</font></a></th>
	<th><a href="patient.php"><font face="arial" color="Green" size="+1">Patient</font></a></th>
	<th><a href="dept.php"><font face="arial" color="Green" size="+1">Add New Department</font></a></th>
	<th><a href="search.php"><font face="arial" color="Green" size="+1">Search</font></a></th>
	<th><a href="showData.php"><font face="arial" color="Green" size="+1">Show Data</font></a></th></tr>
	</table>
	<hr>
	
	<?php
	
	$p_id=$_POST['p_id'];
	
	echo "$p_id";
	
	echo "<form action='cured.php' method='POST'>";
	echo "<input type='hidden' name='p_id' value='$p_id'>";
	echo "<p align='center'><input type='submit' value='Patient Cured & Release' name='submit'></p>";
	echo "</form>";
	
	echo "<form action='dead.php' method='POST'>";
	echo "<input type='hidden' name='p_id' value='$p_id'>";
	echo "<p align='center'><input type='submit' value='Dead' name='submit1'></p>";
	echo "</form>";
	
	
	?>
	
	
	<p align="center"><p>
</tr></td></table>
</body>
</html>