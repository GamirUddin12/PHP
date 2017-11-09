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
     <p><font face="arial" color="Green" size="+1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Released</font></p>
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
	
	
	
	$dbhost = 'localhost';   
    $dbuse = 'root';
    $dbpass = '';
    $conn = mysql_connect($dbhost, $dbuse, $dbpass); 
    if(! $conn )
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db('Hospital');
	 
    
	$p_id=$_POST['p_id'];
	echo "$p_id<br>";
	
	
$sql = "SELECT * FROM p_admission WHERE p_id = '$p_id'";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

$count = mysql_num_rows($retval);

    if($count == 0){
        
        }else{
        while($row = mysql_fetch_array($retval)){
		$admission_date=$row['p_admission_date'];
		}
	}
	
	
	
	echo "Admission Date : $admission_date <br>";
	$release_date=date("d/m/Y");
	echo "Release Date : $release_date<br>";
	
	echo '<table align="center" bgcolor="#75c158" border="2" width="80%" height="5%">';
	
	echo"<form action='curedInfo.php' method='POST'>";
	
	echo "<input type='hidden' name='p_id' value='$p_id'>";
	
	echo "<tr><td>Treatment</td><td><textarea rows=”100” cols=”300” name='treatment'></textarea></td></tr>";
    echo "<tr><td>Condition</td><td><textarea rows=”100” cols=”300” name='condition'></textarea></td></tr>";
	
    echo "<tr><td>Bill Per Day</td><td><input type='text' name='bill_per_day' placeholder='bill'></td></tr>";
	echo "<tr><td>Duration(Days)</td><td><input type='text' name='duratiton' placeholder='days'></td></tr>";
    echo "</table>";
	
	echo "<p align='center'><input type='submit' value='Release' name='submit'></p>";
	
	echo "</form>";
	
	
	
	
	?>
	
	
	<p align="center"><p>
</tr></td></table>
</body>
</html>