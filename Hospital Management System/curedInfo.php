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
	
	
	$treatment=$_POST['treatment'];
	$condition=$_POST['condition'];
	$bill_per_day=$_POST['bill_per_day'];
	$duratiton=$_POST['duratiton'];
	
	
	
	
	$bill=$bill_per_day*$duratiton;
	$p_release_date=date("d/m/Y");
	
	echo "Name : $p_name</br>";
	echo "Age : $p_age</br>";
	echo "Gender : $p_gender</br>";
	echo "Dept : $p_dept</br>";
	echo "Complication : $p_complication</br>";
	echo "Admission Date : $p_admission_date</br>";
	echo "Release Date : $p_release_date</br>";
	echo "Date of Birth : $p_date_of_birth</br>";
	echo "Bed No. : $p_bed_no<br><br>";
	
	
	echo "Treatment : $treatment<br>";
	echo "Condition : $condition<br>";
	echo "Total Bill = $bill TK in $duratiton days<br>";
	echo "<br>";
	
	
	$sql= "INSERT INTO p_cured(p_id, p_release_date, p_treatment, p_condition, p_bill, days) VALUES ('$p_id','$p_release_date','$treatment','$condition',$bill,$duratiton)";
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
	
	$sql= "UPDATE p_admission SET status=0 WHERE p_id='$p_id'";
    $retval = mysql_query( $sql, $conn );
	
	
	
	
	?>
	
	
	<p align="center"><p>
</tr></td></table>
</body>
</html>