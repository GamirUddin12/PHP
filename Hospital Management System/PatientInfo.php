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
	
	$id = uniqid();
	
	$p_name=$_POST['p_name'];  
    $p_gender=$_POST['p_gender'];
	$p_age=$_POST['p_age'];  
    $complication=$_POST['complication'];
	$deptName=$_POST['deptName'];
	$date_of_admission=date("d/m/Y");
	$date_of_birth=$_POST['date_of_birth'];
	
	
	$dbhost = 'localhost';   
    $dbuse = 'root';
    $dbpass = '';
    $conn = mysql_connect($dbhost, $dbuse, $dbpass); 
    if(! $conn )
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db('Hospital');
	
	
	
$sql = "SELECT * FROM dept WHERE DeptName like '$deptName'";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

$count = mysql_num_rows($retval);

    if($count == 0){
        
        }else{
        while($row = mysql_fetch_array($retval)){
		$Seat=$row['Seat'];
		$SeatRemained=$row['SeatRemained'];
		
		}
	}
	
	
	
	
	
	
	
	
$sql = "SELECT * FROM bed_assign WHERE dept_name like '$deptName'";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

$count = mysql_num_rows($retval);

    if($count == 0){
        
        }else{
        while($row = mysql_fetch_array($retval)){
		$bed_no=$row['bed_no'];
		
		if($Seat==$bed_no){
		$Seat=$Seat-1;
		}
		
		else{
		break;
		}
		
		}
	}
	
	
	if($Seat>=1){
	
	}
	else{
	die('No Vacancy In This Department');
	}
	
	//$bed_no=$Seat;
	
	$sql= "INSERT INTO bed_assign(p_id, bed_no, dept_name) VALUES ('$id',$Seat,'$deptName')";
    $retval = mysql_query( $sql, $conn );
	
	
	$SeatRemained=$SeatRemained-1;
	$sql= "UPDATE dept SET SeatRemained='$SeatRemained' WHERE DeptName like '$deptName'";
    $retval = mysql_query( $sql, $conn );
	
	
	echo "Today   : $date_of_admission<br>";
	echo "Patient ID :  $id <br>";
	echo "Name    : $p_name<br>";
	echo "Gender  :$p_gender<br>";
	echo "Age     :$p_age<br>";
	echo "Complication:$complication<br>";
	echo "Dept Admitted:$deptName<br>";
	echo "Bed no : $Seat <br>";
	echo "Date of Birth :$date_of_birth<br>";
	
	
	
	$sql= "INSERT INTO p_admission(p_id,p_name,p_age,p_gender, p_dept, p_complication, p_admission_date, p_date_of_birth,p_bed_no,status) VALUES ('$id','$p_name','$p_age','$p_gender','$deptName','$complication','$date_of_admission','$date_of_birth',$Seat,1)";
	
    $retval = mysql_query( $sql, $conn );

    if($retval){
    echo "<br><br>Data Successfully Inserted";
    }
	
	else
	{
	  echo "<br><br>Problem in insertion !!!";
	}
	
	
		
		
	
	
    
	?>
	
<p align="center"><p>
</tr></td></table>
</body>
</html>