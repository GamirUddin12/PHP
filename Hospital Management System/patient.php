
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
     <p><font face="arial" color="Green" size="+1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Patient's Service</font></p>
	
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
	
	echo"<form action='PatientInfo.php' method='POST'>";
    echo "<tr><td><input type='text' name='p_name' placeholder='Name'></td>";
    echo "<td><input type='text' name='p_gender' placeholder='Gender'></td>";
    echo "<td><input type='text' name='p_age' placeholder='Age'></td></tr>";
    echo "</table>";
	
	echo '<p align="center"><font color="green" size="+1"  size="+2">Date of Birth</font></p>';
	echo '<table align="center" bgcolor="#75c158" border="2" width="27%" height="5%">';
	echo "<tr><td><input type='text' name='date_of_birth' placeholder='dd/mm/yyyy'></td>";
	echo "</table>";
	echo'<br>';
	
	echo '<p align="center"><font color="red" size="+2"  size="+2">Complications</font></p>';
	echo '<table align="center" bgcolor="#75c158" border="2" width="50%" height="10%">';
	
	echo "<tr><td><textarea rows=”100” cols=”300” name='complication'></textarea></td></tr>";
	echo "</table>";
	echo "<br><br>";
    
    $dbhost = 'localhost';   
    $dbuse = 'root';
    $dbpass = '';
    $conn = mysql_connect($dbhost, $dbuse, $dbpass); 
    if(! $conn )
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db('Hospital');


$sql = "SELECT * FROM dept";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

$count = mysql_num_rows($retval);

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <select name='deptName'>";
echo"<option value='' selected='selected'/>Dept-----Seat Remained";

    if($count == 0){
        
        }else{
        while($row = mysql_fetch_array($retval)){
		
		
		$deptName=$row['DeptName'];
		$deptId=$row['DeptId'];
		$SeatRemained=$row['SeatRemained'];
		
		
		
		echo "<option value='$deptName'>$deptName --- $SeatRemained";
		
		
		}
		
	}
	
	echo"</select>";
	
	echo "<p align='center'><input type='submit' value='submit' name='submit'></p>";
	
	echo "</form>";
	
	
    
	?>
	
<p align="center"><p>
</tr></td></table>
</body>
</html>