<html>
<body>
<table align="center" bgcolor="majenda" border="1" width="60%" height="100%">
	<tr>
	<td>
	<body bgcolor="#f0c869">
	<p><font face="arial" color="Green" size="+1">Dr. Md. Jamir Uddin</font></p>
	  <p><font face="arial" color="Green" size="+1">MBBS,BCS,FCPS(Student of Medicine)</font></p>
	  <p><font face="arial" color="Green" size="+1">Medical Officer at Deviganj Upazilla Health Complex,Panchagor</font></p>
	<p><font color="#ff6600" size="+4"  size="+2"> &nbsp&nbsp <img src="jamir.jpg" width="150" height="130"/>Degital Prescription</font></p>

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
mysql_select_db('doctors');

$search=$_POST['search'];

$ary[0]='trade_name';
$ary[1]='generic_name';
$ary[2]='company_name';

echo '<table align="center" bgcolor="#b8d8f9" border="2" width="90%" height="30%">
       <tr><th>Select</th><th>Generic Name</th><th>Trade Name</th><th>Company Name</th></tr>';

echo "  <form action='prescription.php' method='post'>";

for($i=0;$i<3;$i=$i+1){

$sql = "SELECT * FROM medicine where $ary[$i] like '%$search%'";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo "hello";
  die('Could not get data: ' . mysql_error());
}



while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
   		 $nt1=$row['generic_name'];
		 
		 echo "<tr><td><input type='radio' value='$nt1' name='select' ></td>";
	     echo '<td>'.$row['generic_name'].'</td>';
		 echo '<td>'.$row['trade_name'].'</td>';
         echo '<td>'.$row['company_name'].'</td></tr>';		 

		 
}

}

echo '</table>';
echo"<br><br>";

?>

<input type='submit' name='submit' value='memory'>
</form>
<p align="center">@copyright reserved...Gomir Uddin Shovon<p>
</tr></td></table>
</body>
</html>