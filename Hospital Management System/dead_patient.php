<html>
<body>
<table align="center" bgcolor="majenda" border="1" width="60%" height="50%">
	<tr>
	<td>
	<body bgcolor="#f0c869">
	<p><font face="arial" color="Green" size="+1"></font></p>
	  <p><font face="arial" color="Green" size="+1"></font></p>
	  
	<p><font color="#ff6600" size="+2"  size="+3"> &nbsp&nbsp Hospital Management System</font></p>
	<hr>
     <p><font face="arial" color="Green" size="+1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Patient Died in This Hospital</font></p>
	
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
	
	
	$sql = "SELECT * FROM dept";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

$in=0;

$deptName[0]="now";
$count = mysql_num_rows($retval);
    if($count == 0){
        
        }else{
        while($row = mysql_fetch_array($retval)){
		$d=$row['DeptName'];
		$deptName[$in]=$d;
		$in=$in+1;
		
		}
	}
	
	for($i=0;$i<$in;$i=$i+1){

	echo "<p align='center'><font face='arial' color='Green' size='+1'>$deptName[$i]</font></p>";
	
	
$sql_1 = "SELECT * FROM p_admission AS p, p_dead AS c WHERE p.p_id=c.p_id AND p.status = 2 AND p.p_dept= '$deptName[$i]'";
$retval_1 = mysql_query( $sql_1, $conn );
if(! $retval_1 )
{
  die('Could not get data: ' . mysql_error());
}

$count = mysql_num_rows($retval_1);

echo '<table align="center" bgcolor="#75c158" border="2" width="90%" height="5%">';
echo "<tr><th>name</th><th>age</th><th>gender</th><th>Dept</th><th>Bed No.</th><th>Admission date</th><th>Died</th><th>Death Cause</th><th>Bill</th></tr>";
    if($count == 0){
        
        }else{
        while($row = mysql_fetch_array($retval_1)){
        
		
		$p_id=$row['p_id'];
		$name=$row['p_name'];
		$age=$row['p_age'];
		$gender=$row['p_gender'];
		$admission_date=$row['p_admission_date'];
		$p_date_of_death=$row['p_date_of_death'];
		$dept=$row['p_dept'];
		$bed_no=$row['p_bed_no'];
		$p_bill=$row['p_bill'];
		$p_death_reason=$row['p_death_reason'];
		
		echo "<tr><td>$name</td><td>$age<td>$gender</td><td>$dept</td><td>$bed_no</td><td>$admission_date</td><td>$p_date_of_death</td><td>$p_death_reason</td><td>$p_bill</td></tr>";
		
		}
	}
	
    echo "</table>";
	echo "<hr>";
	echo "</br></br>";
	
	

	
	}
	

	echo "<p align='center'><font face='arial' color='Green' size='+1'><a href='released_patient.php'>Show Released Patient</a></font></p>";
	echo "<p align='center'><font face='arial' color='Green' size='+1'><a href='dead_patient.php'>Show Dead Patient</a></font></p>";

	
	
	
	
	
	
	
	?>
	
	
	
	
	
<p align="center"><p>
</tr></td></table>
</body>
</html>