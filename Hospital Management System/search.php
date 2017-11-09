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
     <p><font face="arial" color="Green" size="+1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Search</font></p>
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
	
	echo '<table align="center" bgcolor="#75c158" border="2" width="80%" height="5%">';
	
	echo"<form action='search_result.php' method='POST'>";
    echo "<tr><td><p><font face='arial' color='Green' size='+1'>Search</font></p>Patient's Name : &nbsp&nbsp&nbsp<input type='text' name='p_name' placeholder='search'><input type='submit' value='Search' name='submit'></td></tr>";
	
	echo "</table>";
	
	echo "</from>";
	
	
	
	
	?>
	
	
	<p align="center"><p>
</tr></td></table>
</body>
</html>