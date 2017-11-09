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
     <p><font face="arial" color="Green" size="+1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Death Certificate</font></p>
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
		
		
		$p_name=$row['p_name'];
		$p_age=$row['p_age'];
		$p_gender=$row['p_gender'];
		$p_dept=$row['p_dept'];
		$p_complication=$row['p_complication'];
		
		$p_admission_date=$row['p_admission_date'];
		$p_date_of_birth=$row['p_date_of_birth'];
		$p_bed_no=$row['p_bed_no'];
		
		
		}
	}
	
	
	
	$death_reason=$_POST['death_reason'];
	$treatment=$_POST['treatment'];
	$death_date=$_POST['death_date'];
	$death_time=$_POST['death_time'];
	
	$bill=$_POST['bill'];
	$duratiton=$_POST['duratiton'];
	
	
	
	echo "Patient ID :  $p_id<br>";
	echo "Name : $p_name</br>";
	echo "Age : $p_age</br>";
	echo "Gender : $p_gender</br>";
	
	echo "Date of Birth : $p_date_of_birth</br>";
	echo "Date of Death : $death_date<br>";
	
	echo "Dept : $p_dept</br>";
	echo "Complication : $p_complication</br>";
	echo "Admission Date : $p_admission_date</br>";
	echo "Bed No. : $p_bed_no<br><br>";
	
	
	echo "Death Reason : $death_reason<br>";
	echo "Treatment : $treatment<br>";
	
	echo "Time of Death : $death_time<br>";
	echo "Total Bill = $bill TK in $duratiton days<br>";
	echo "<br>";
	
	
	
	
	$sql= "INSERT INTO p_dead(p_id, p_date_of_death, p_treatment, p_death_reason, p_bill, days, time) VALUES ('$p_id','$death_date','$treatment','$death_reason',$bill,$duratiton ,'$death_time')";
    $retval = mysql_query( $sql, $conn );

    if($retval){
    echo "<br><br>Data Successfully Inserted";
    }
	
	else
	{
	  echo "<br><br>Problem in insertion !!!";
	}
	
	
	$sql= "DELETE FROM bed_assign WHERE p_id='$p_id'";
    $retval = mysql_query( $sql, $conn );
	
	
	
	
$sql = "SELECT * FROM dept WHERE DeptName = '$p_dept'";
$retval = mysql_query( $sql, $conn );
if(! $retval ){die('Could not get data: ' . mysql_error());}

$count = mysql_num_rows($retval);
    if($count == 0){
        
        }else{
        while($row = mysql_fetch_array($retval)){
		$SeatRemained=$row['SeatRemained'];
        		
		}
	}
	
	$SeatRemained=$SeatRemained+1;
	
	
	$sql= "UPDATE dept SET SeatRemained=$SeatRemained WHERE DeptName = '$p_dept'";
    $retval = mysql_query( $sql, $conn );
	
	$sql= "UPDATE p_admission SET status=2 WHERE p_id='$p_id'";
    $retval = mysql_query( $sql, $conn );
	
	
	
	
	?>
	
	
	<p align="center"><p>
</tr></td></table>
</body>
</html>