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
	
	$dbhost = 'localhost';   
    $dbuse = 'root';
    $dbpass = '';
    $conn = mysql_connect($dbhost, $dbuse, $dbpass); 
    if(! $conn )
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db('Hospital');
	
	$p_name=$_POST['p_name'];  
    
	
$sql = "SELECT * FROM p_admission WHERE p_name like '%$p_name%' and status=1";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

$count = mysql_num_rows($retval);



echo "<form action='p_edit.php' method='POST'>";
echo '<table align="center" bgcolor="#75c158" border="2" width="80%" height="5%">';
echo "<tr><th></th><th>name</th><th>age</th><th>gender</th><th>Dept</th><th>Bed No.</th><th>Admission date</th></tr>";
    if($count == 0){
        
        }else{
        while($row = mysql_fetch_array($retval)){
        
		
		$p_id=$row['p_id'];
		$name=$row['p_name'];
		$age=$row['p_age'];
		$gender=$row['p_gender'];
		$admission_date=$row['p_admission_date'];
		$dept=$row['p_dept'];
		$bed_no=$row['p_bed_no'];
		
		echo "<tr><td><input type='radio' name='p_id' value='$p_id'></td><td>$name</td><td>$age<td>$gender</td><td>$dept</td><td>$bed_no</td><td>$admission_date</td></tr>";
		
		}
	}
	
    echo "</table>";
	echo "<p align='center'><input type='submit' value='Search' name='submit'></p>";
	echo "</form>";
	
	?>
	
	
	<p align="center"><p>
</tr></td></table>
</body>
</html>