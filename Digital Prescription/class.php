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

	
	
echo"<form action='class.php' method='POST'>";

echo '<table align="left" bgcolor="#b8d8f9" border="2" width="10%" height="50%">';
		echo" <tr><td><input type='text' name='new_class' placeholder='class'></td></tr>";

		
		echo "</table>";
		echo "<br><br>";
		
		
echo '<table align="left" bgcolor="#75c158" border="2" width="10%" height="50%">';
		echo"<tr><td><input type='text' name='new_generic_name' placeholder='Generic Name'></td></tr>";
		
		
$sql9 = "SELECT distinct generic_name FROM medicine";
//echo $it."<br>";
$retval9 = mysql_query( $sql9, $conn );
if(! $retval9 )
{
  die('Could not get data: ' . mysql_error());
}

$count9 = mysql_num_rows($retval9);

echo "/";
echo"<select name='generic_name'>";
echo"<option value='' selected='selected'>none";

    if($count9 == 0){
        
        }else{
        while($row9 = mysql_fetch_array($retval9)){
		 $generic_name1=$row9['generic_name'];
		 echo "<option value='$generic_name1'>$generic_name1";
		 
        }
		echo"</select>";
		
		
	}



		
		
		
		
		
		echo "</table>"; 
echo "<br><br>";

echo '<table align="left" bgcolor="#b8d8f9" border="2" width="10%" height="50%">';
		echo"<tr><td><input type='text' name='new_trade_name' placeholder='Trade Name'></td></tr>";
		echo "</table>"; 
echo "<br><br>";



echo '<table align="left" bgcolor="#b8d8f9" border="2" width="10%" height="50%">';
		echo"<tr><td><input type='text' name='new_company_name' placeholder='Company Name'></td></tr>";
		


$sql9 = "SELECT distinct company_name FROM medicine";
//echo $it."<br>";
$retval9 = mysql_query( $sql9, $conn );
if(! $retval9 )
{
  die('Could not get data: ' . mysql_error());
}

$count9 = mysql_num_rows($retval9);

echo "/";
echo"<select name='company_name'>";
echo"<option value='' selected='selected'>none";

    if($count9 == 0){
        
        }else{
        while($row9 = mysql_fetch_array($retval9)){
		 $company_name1=$row9['company_name'];
		 echo "<option value='$company_name1'>$company_name1";
		 
        }
		echo"</select>";
		
		
	}

	echo "</table>"; 
echo "<br><br>";








echo '<table align="left" bgcolor="#75c158" border="2" width="10%" height="50%">';
		echo"<tr><td><input type='text' name='new_preperation' placeholder='Preperation'></td></tr>";
		

$sql1 = "SELECT distinct preperation FROM preperation";
//echo $it."<br>";
$retval1 = mysql_query( $sql1, $conn );
if(! $retval1 )
{
  die('Could not get data: ' . mysql_error());
}

$count1 = mysql_num_rows($retval1);

echo "/";
echo"<select name='preperation'>";
echo"<option value='' selected='selected' >none";


    if($count1 == 0){
        
        }else{
        while($row1 = mysql_fetch_array($retval1)){
		 $preperation1=$row1['preperation'];
		 echo "<option value='$preperation1'>$preperation1";
        }
	}

		
		
echo "</table>";

echo "<br><br>";
		
		




echo"<hr>";

	echo '<table align="" bgcolor="#b8d8f9" border="2" width="10%" height="50%">';
		echo"<tr><td><input type='submit' name='add_new_class' value='Add new class'></td></tr>";
		echo "</table>"; 
		echo"</form>";
		
		
		echo "<br>";
		
     
        echo"<form action='prescription.php' method='POST'>";
	    echo '<table align="" bgcolor="#b8d8f9" border="2" width="10%" height="50%">';
		echo"<tr><td><input type='submit' name='return' value='Return Data Entry Page'></td></tr>";
		echo "</table>"; 
		echo"</form>";
		


		
		
		//**********************database section*****************************//


if(isset($_POST['new_preperation'])){
$new_preperation=$_POST['new_preperation'];
$sql = "INSERT INTO preperation(preperation) VALUES ('$new_preperation')";
$retval = mysql_query( $sql, $conn );

}


$sql = "DELETE FROM preperation WHERE preperation=''";
$retval = mysql_query( $sql, $conn );

$go=1;
$generic_name='';



if(isset($_POST['new_generic_name'])){
$generic=$_POST['new_generic_name'];
if($generic!=''){
$generic_name=$_POST['new_generic_name'];
$go=9;
echo 'new<br><br><br><br>';
}
}


if(isset($_POST['generic_name'])&& $go!=9){
$generic=$_POST['generic_name'];
if($generic!=''){
$generic_name=$_POST['generic_name'];
$go=7;
echo 'old<br><br><br><br>';
}
}







        $class='';
		
		if(isset($_POST['new_class'])){
		$class=$_POST['new_class'];
		}


		
		if($class!=''&& $generic_name!=''&&isset($_POST['new_trade_name'])){
		$class=$_POST['new_class'];
		//$generic_name=$_POST['new_generic_name'];
		$trade_name=$_POST['new_trade_name'];
		
		
		$company_name=$_POST['company_name'];
		$new_preperation=$_POST['new_preperation'];
		$new_company_name=$_POST['new_company_name'];
		
		
		
		
		 if($company_name!=''){
		
		$sql = "INSERT INTO prescription(generic_name,class) VALUES ('$generic_name','$class')";
		$retval = mysql_query( $sql, $conn );
		
		$sql = "INSERT INTO medicine(generic_name,trade_name,company_name) VALUES ('$generic_name','$trade_name','$company_name')";
		$retval = mysql_query( $sql, $conn );
		
		echo "data successfully added old P old C<br>";
		
		}
		
		

		
		
		else if($new_company_name!=''){

		$sql = "INSERT INTO prescription(generic_name,class) VALUES ('$generic_name','$class')";
		$retval = mysql_query( $sql, $conn );
		
		$sql = "INSERT INTO medicine(generic_name,trade_name,company_name) VALUES ('$generic_name','$trade_name','$new_company_name')";
		$retval = mysql_query( $sql, $conn );
		
		echo "data successfully added Old P new C<br>";
		
		}
		
				
	}
	
///*******************old class********************///

	
//--------------------------------------------------//


	
	
?>



</tr></td></table>
</body>
</html>