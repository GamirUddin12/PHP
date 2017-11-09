
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
     <p><font face="arial" color="Green" size="+1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Add New Department</font></p>
	
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
	
	$id = uniqid();
	
	$deptname=$_POST['deptname'];  
    $seat=$_POST['seat'];
	
	
	
	$dbhost = 'localhost';   
    $dbuse = 'root';
    $dbpass = '';
    $conn = mysql_connect($dbhost, $dbuse, $dbpass); 
    if(! $conn )
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db('Hospital');
    
	
	if(isset($deptname) && isset($seat))
	{
	$sql = "INSERT INTO dept(DeptId,DeptName,Seat,SeatRemained) VALUES ('$id','$deptname','$seat','$seat')";
	}
    $retval = mysql_query( $sql, $conn );

    if($retval){
    echo "Data Successfully Inserted";
    }
	
	else
	{
	  echo "Problem in insertion !!!";
	}
	
	
	?>
	
<p align="center"><p>
</tr></td></table>
</body>
</html>