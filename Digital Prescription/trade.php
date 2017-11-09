<html>
<body>
<table background="prescription_final.jpg" align="center" bgcolor="majenda" border="1" width="50%" height="100%">
	<tr>
	<td>
	<body bgcolor="#f0c869">
	




<?php

$dbhost = 'localhost';
$dbuse = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuse, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('doctors');




$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];

$preperation=$_POST['preperation'];
$generic_name=$_POST['generic_name'];
$strength=$_POST['strength'];
$dose=$_POST['dose'];
$rule=$_POST['rule'];
$duration=$_POST['duration'];
$company_name=$_POST['company_name'];
$trade_name_new=$_POST['trade_name'];



echo $name.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
echo $gender.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
echo $age.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';


echo '<br><br>';


for($i=0;$i<sizeof($preperation);$i=$i+1){

echo  $preperation[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
echo  $generic_name[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
//echo  $company_name[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';

if($trade_name_new[$i]!='' &&$company_name[$i]=='' )
{
  echo  $trade_name_new[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
}
else{
$sql9 = "SELECT distinct trade_name FROM medicine where company_name='$company_name[$i]' and generic_name='$generic_name[$i]'";
$retval9 = mysql_query( $sql9, $conn );

$count9 = mysql_num_rows($retval9);
    if($count9 == 0){
        }else{
        while($row9 = mysql_fetch_array($retval9)){
		 $trade_name[$i]=$row9['trade_name'];
		 echo  $trade_name[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
        }		
	}

}


echo  $strength[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';

echo  $dose[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
echo  $rule[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
echo  $duration[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';

echo "<br><br><br>";
}



echo"<form action='prescription.php' method='POST'>";
echo"<input type='submit' name='submit' value='ADD MORE'>";
echo "</form>";



?>



<p align="center">@copyright reserved...Gomir Uddin Shovon<p>
</tr></td></table>
</body>
</html>