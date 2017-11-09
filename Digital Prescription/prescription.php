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





	echo"<form action='search.php' method='POST'>";
	echo"Search with Trade/Generic/Company: <input type='text' name='search'>";
	echo"&nbsp&nbsp&nbsp&nbsp<input type='submit' name='submit' value='Submit'>";
	echo"</form>";
	
	echo"<form action='class.php' method='POST'>";
	echo '<table align="center" bgcolor="#b8d8f9" border="2" width="10%" height="50%">';
		echo"<tr><td><input type='submit' name='new_class' value='Add new class'></td></tr>";
		echo "</table>"; 
		echo"</form>";
		
		echo "<br>";

	
    
echo"<form action='pres.php' method='POST'>";


if(isset($_POST['name'])&&isset($_POST['gender'])&&isset($_POST['age'])){
$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
echo "<input type='hidden' name='name' value='$name'>";
echo "<input type='hidden' name='gender' value='$gender'>";
echo "<input type='hidden' name='age' value='$age'>";

}

else{
echo '<table align="center" bgcolor="#75c158" border="2" width="90%" height="50%">';
echo "<tr><td><input type='text' name='name' placeholder='Name'></td>";
echo "<td><input type='text' name='gender' placeholder='Gender'></td>";
echo "<td><input type='text' name='age' placeholder='Age'></td></tr>";
echo "</table>";
echo'<br><br>';
}



if (isset($_POST['select'])){
$cow=$_POST['select'];
echo "<p><font face='arial' color='#6752D0' size='+3'>$cow</font></p>";
echo '<br><br>';
}


if (isset($_POST['add_more'])){
$cow=$_POST['add_more'];
echo "<p><font face='arial' color='#6752D0' size='+3'>$cow</font></p>";
echo '<br><br>';
}



$sql = "SELECT distinct class FROM prescription";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

$count = mysql_num_rows($retval);

$it=0;
$class[$it]='';


    if($count == 0){
        
        }else{
        while($row = mysql_fetch_array($retval)){
		$class[$it]=$row['class'];
		
		echo "<hr>";
		echo "<p><font face='arial' color='red' size='+3'><u>$class[$it]:</u>";
		
		echo "<input type='hidden' name='class[]' value='$class[$it]'>";
		
		
		
		echo "</font></p>";
		echo "<br>";
		
		//echo"<p><font face='arial' size='+1'>";
		
		//**************************Preperation_Name***************
		
	
$sql1 = "SELECT distinct preperation FROM preperation";
//echo $it."<br>";
$retval1 = mysql_query( $sql1, $conn );
if(! $retval1 )
{
  die('Could not get data: ' . mysql_error());
}

$count1 = mysql_num_rows($retval1);

echo "Preperation:";
echo"<select name='preperation[]'>";
echo"<option value='' selected='selected' >none";


    if($count1 == 0){
        
        }else{
        while($row1 = mysql_fetch_array($retval1)){
		 $preperation=$row1['preperation'];
		 echo "<option value='$preperation'>$preperation:";
		 
        }
		echo"</select>";
		echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		echo '<table align="right" bgcolor="#b8d8f9" border="2" width="50%" height="50%">';
		echo"<tr><td><input type='text' name='new_preperation[]' placeholder='New Preperation'></td></tr>";
		echo "</table>";
		echo '<br><br>';
		

//--------------------------------------------------------------		
//*************************** Generic_Name************************//
	
	
	//echo $two[$it];
	
	
$sql2 = "SELECT distinct generic_name FROM prescription where class='$class[$it]'";
//echo $it."<br>";
$retval2 = mysql_query( $sql2, $conn );
if(! $retval2 )
{
  die('Could not get data: ' . mysql_error());
}

$count2 = mysql_num_rows($retval2);

echo "Generic Name:";
echo"<select name='generic_name[]'>";
echo"<option value='' selected='selected'>none";

    if($count2 == 0){
        
        }else{
        while($row2 = mysql_fetch_array($retval2)){
		 $generic_name=$row2['generic_name'];
		 echo "<option value='$generic_name'>$generic_name:";
		 
        }
		
		echo"</select>";
		
		//********trade form**********//
		
		/////////////////////////////////
		
		
		
		echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		echo '<table align="right" bgcolor="#b8d8f9" border="2" width="50%" height="50%">';
		echo"<tr><td><input type='text' name='new_generic_name[]' placeholder='New Generic Name'></td><tr>";
		echo"<tr><td><input type='text' name='new_trade_name[]' placeholder='New Trade Name'></td><tr>";
		echo"<tr><td><input type='text' name='new_company_name[]' placeholder='New Company Name'></td><tr>";
		echo"</table>";
		
		
		echo '<br><br>';
	}	
//---------------------------------------------------------------------------		
	
	//*************************** Company_Name************************//
	
	
		
		
$sql9 = "SELECT distinct company_name FROM medicine";
//echo $it."<br>";
$retval9 = mysql_query( $sql9, $conn );
if(! $retval9 )
{
  die('Could not get data: ' . mysql_error());
}

$count9 = mysql_num_rows($retval9);

echo"<br><br><br><br>";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
echo "Company Name:";

echo"<select name='company_name[]'>";
echo"<option value='' selected='selected'>none";

    if($count9 == 0){
        
        }else{
        while($row9 = mysql_fetch_array($retval9)){
		 $company_name=$row9['company_name'];
		 echo "<option value='$company_name'>$company_name:";
		 
        }
		echo"</select>";
		
		
		echo '<br><br><br><br><br><br>';
	}



//-------------------------------//
echo '<br><br><br><br><br><br>';
	
}


	//****************************Strength*************************
		
	
$sql3 = "SELECT * FROM strength";
//echo $it."<br>";
$retval3 = mysql_query( $sql3, $conn );
if(! $retval3 )
{
  die('Could not get data: ' . mysql_error());
}

$count3 = mysql_num_rows($retval3);
echo "Strength:";
echo"<select name='strength[]'>";
echo"<option value='' selected='selected'>none";

    if($count3 == 0){
        
        }else{
        while($row3 = mysql_fetch_array($retval3)){
		 $strength=$row3['strength'];
		 echo "<option value='$strength'>$strength";
		 
        }
		echo"</select>";
		echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		echo '<table align="right" bgcolor="#b8d8f9" border="2" width="50%" height="50%">';
		echo"<tr><td><input type='text' name='new_strength[]' placeholder='New Strength'></td></tr>";
		echo"</table>";
		echo '<br><br>';
	}
	
	//-------------------------------------
	//***************dose******************	
	
	$sql4 = "SELECT * FROM dose";
//echo $it."<br>";
$retval4 = mysql_query( $sql4, $conn );
if(! $retval4 )
{
  die('Could not get data: ' . mysql_error());
}

$count4 = mysql_num_rows($retval4);
echo "Dose:";
echo"<select name='dose[]'>";
echo"<option value='' selected='selected'>none";

    if($count4 == 0){
        
        }else{
        while($row4 = mysql_fetch_array($retval4)){
		 $dose=$row4['dose'];
		 echo "<option value='$dose'>$dose";
		 
        }
		echo"</select>";
		echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		echo '<table align="right" bgcolor="#b8d8f9" border="2" width="50%" height="50%">';
		echo"<tr><td><input type='text' name='new_dose[]' placeholder='New Dose'></td></tr>";
		echo"</table>";
		echo '<br><br>';
	
	//-------------------------------------
	//******************duration**************	

	$sql5 = "SELECT * FROM duration";
//echo $it."<br>";
$retval5 = mysql_query( $sql5, $conn );
if(! $retval5 )
{
  die('Could not get data: ' . mysql_error());
}

$count5 = mysql_num_rows($retval5);
echo "Duration:";

echo"<select name='duration[]'>";
echo"<option value='' selected='selected'>none";

    if($count5 == 0){
        
        }else{
        while($row5 = mysql_fetch_array($retval5)){
		 $duration=$row5['duration'];
		 echo "<option value='$duration'>$duration";
		 
        }
		echo"</select>";
		echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		echo '<table align="right" bgcolor="#b8d8f9" border="2" width="50%" height="50%">';
		echo"<tr><td><input type='text' name='new_duration[]' placeholder='New Duration'></td></tr>";
		echo"</table>";
		echo '<br><br>';
	
	}

	
	
	//-------------------------------------
	//******************rule**************	

	$sql6 = "SELECT * FROM rule";
//echo $it."<br>";
$retval6 = mysql_query( $sql6, $conn );
if(! $retval6 )
{
  die('Could not get data: ' . mysql_error());
}

$count6 = mysql_num_rows($retval6);
echo "Rule:";

echo"<select name='rule[]'>";
echo"<option value='' selected='selected'>none";

    if($count6 == 0){
        
        }else{
        while($row6 = mysql_fetch_array($retval6)){
		 $duration=$row6['rule'];
		 echo "<option value='$duration'>$duration";
		 
        }
		echo"</select>";
		echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		echo '<table align="right" bgcolor="#b8d8f9" border="2" width="50%" height="10%">';
		echo"<tr><td><input type='text' name='new_rule[]' placeholder='New Rule'></td></tr>";
		echo "</table>";
		echo '<br><br>';
	
	}

	echo "<br><br><br><br>";
	//-------------------------------------
	
	echo"<hr><hr>";
		
	}

	$it=$it+1;
		 
        }
		
    }
	
	echo "<input type='submit' value='submit' name='submit'>";
	echo"</form>";
	echo "<br><br><br>";
	
		
echo "</td></table>";
?>

<p align="center">@copyright reserved...Gomir Uddin Shovon<p>
</tr></td></table>
</body>
</html>