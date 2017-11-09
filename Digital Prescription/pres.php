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


$preperation=$_POST['preperation'];
$generic_name=$_POST['generic_name'];
//$company_name=$_POST['company_name'];
$strength=$_POST['strength'];
$dose=$_POST['dose'];
$duration=$_POST['duration'];
$class=$_POST['class'];
$rule=$_POST['rule'];


$new_preperation=$_POST['new_preperation'];
$new_generic_name=$_POST['new_generic_name'];
$new_company_name=$_POST['new_company_name'];
$new_trade_name=$_POST['new_trade_name'];
$new_strength=$_POST['new_strength'];
$new_dose=$_POST['new_dose'];
$new_duration=$_POST['new_duration'];
$new_rule=$_POST['new_rule'];
//$new_class=$_POST['new_class'];



$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];



$dbhost = 'localhost';
$dbuse = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuse, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('doctors');





for($i=0;$i<sizeof($class);$i=$i+1){

$ganu[$i]=0;

if($preperation[$i]!='' && $new_preperation[$i]==''){
$preperation_up[$i]=$preperation[$i];

//echo $preperation_up[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
}
//echo $preperation[$i].'&nbsp&nbsp&nbsp&nbsp';

if($generic_name[$i]!='' &&$new_generic_name[$i]==''){
$generic_name_up[$i]=$generic_name[$i];
$ganu[$i]=1;
//echo $generic_name_up[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
}
//echo $generic_name[$i].'&nbsp&nbsp&nbsp&nbsp';
if($strength[$i]!='' && $new_strength[$i]==''){
$strength_up[$i]=$strength[$i];
//echo $strength_up[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
}

//echo $strength[$i].'&nbsp&nbsp&nbsp&nbsp';
if($dose[$i]!='' && $new_dose[$i]==''){
$dose_up[$i]=$dose[$i];
//echo $dose_up[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
}
//echo $dose[$i].'&nbsp&nbsp&nbsp&nbsp';
if($duration[$i]!='' && $new_duration[$i]==''){
$duration_up[$i]=$duration[$i];
//echo $duration_up[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
}

//echo $duration[$i].'&nbsp&nbsp&nbsp&nbsp';
if($rule[$i]!=''&& $new_rule[$i]==''){
$rule_up[$i]=$rule[$i];
//echo $rule_up[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
  }

}
//echo $rule[$i].'&nbsp&nbsp&nbsp&nbsp';

//echo '<br><br><br><br>';


for($i=0;$i<sizeof($class);$i=$i+1){

$janu[$i]=0;
/*
if($class[$i]=='' && $new_class[$i]!=''){
$class_up[$i]=$new_class[$i];
}
*/
//echo $new_class[$i].'&nbsp&nbsp&nbsp&nbsp';




if($preperation[$i]=='' && $new_preperation[$i]!=''){
$preperation_up[$i]=$new_preperation[$i];


}

//echo $new_preperation[$i].'&nbsp&nbsp&nbsp&nbsp';

if($generic_name[$i]=='' && $new_generic_name[$i]!=''){
$generic_name_up[$i]=$new_generic_name[$i];

$janu[$i]=1;
}

//echo $new_generic_name[$i].'&nbsp&nbsp&nbsp&nbsp';

if($new_company_name[$i]!=''){
$company_name_up[$i]=$new_company_name[$i];

}

//echo $new_company_name[$i].'&nbsp&nbsp&nbsp&nbsp';

if($new_trade_name[$i]!=''){
$trade_name_up[$i]=$new_trade_name[$i];

echo $new_trade_name[$i].'&nbsp&nbsp&nbsp&nbsp';

}

//echo $new_trade_name[$i].'&nbsp&nbsp&nbsp&nbsp';

if($strength[$i]=='' && $new_strength[$i]!=''){
$strength_up[$i]=$new_strength[$i];

}

//echo $new_strength[$i].'&nbsp&nbsp&nbsp&nbsp';

if($dose[$i]=='' && $new_dose[$i]!=''){
$dose_up[$i]=$new_dose[$i];

}

//echo $new_dose[$i].'&nbsp&nbsp&nbsp&nbsp';

if($duration[$i]=='' && $new_duration[$i]!=''){
$duration_up[$i]=$new_duration[$i];

}


//echo $new_duration[$i].'&nbsp&nbsp&nbsp&nbsp';

if($rule[$i]=='' && $new_rule[$i]!=''){
$rule_up[$i]=$new_rule[$i];


}


//echo $new_rule[$i].'&nbsp&nbsp&nbsp&nbsp';


}

echo "<form action='trade.php' method='POST'>";












$new_strength=$_POST['new_strength'];
for($i=0;$i<sizeof($new_strength);$i=$i+1){
if($new_strength[$i]!=''){
$sql = "INSERT INTO strength(strength) VALUES ('$new_strength[$i]')";
$retval = mysql_query( $sql, $conn );

}

}








$new_dose=$_POST['new_dose'];
for($i=0;$i<sizeof($new_dose);$i=$i+1){
if($new_dose[$i]!=''){
$sql = "INSERT INTO dose(dose) VALUES ('$new_dose[$i]')";
$retval = mysql_query( $sql, $conn );

  }
  
}




$new_duration=$_POST['new_duration'];
for($i=0;$i<sizeof($new_duration);$i=$i+1){
if($new_duration[$i]!=''){
$sql = "INSERT INTO duration(duration) VALUES ('$new_duration[$i]')";
$retval = mysql_query( $sql, $conn );


}



}

$new_rule=$_POST['new_rule'];
for($i=0;$i<sizeof($new_rule);$i=$i+1){
if($new_rule[$i]!=''){
$sql = "INSERT INTO rule(rule) VALUES ('$new_rule[$i]')";
$retval = mysql_query( $sql, $conn );

}



}


$new_preperation=$_POST['new_preperation'];
for($i=0;$i<sizeof($new_preperation);$i=$i+1){
if($new_preperation[$i]!=''){
$sql = "INSERT INTO preperation(preperation) VALUES ('$new_preperation[$i]')";
$retval = mysql_query( $sql, $conn );

}



}



        $class=$_POST['class'];
        $trade_name=$_POST['new_trade_name'];
		
		$company_name=$_POST['company_name'];
		$new_preperation=$_POST['new_preperation'];
		$new_company_name=$_POST['new_company_name'];


		

///***************Class Code from Class.php*******************///

for($i=0;$i<sizeof($class);$i=$i+1){

$go=1;
$generic_name[$i]='';



if(isset($_POST['new_generic_name'])){
$generic=$_POST['new_generic_name'];
if($generic[$i]!=''){
$generic_name=$_POST['new_generic_name'];
$go=9;
echo 'new<br><br><br><br>';
}
}



if(isset($_POST['generic_name'])&& $go!=9){
$generic=$_POST['generic_name'];
if($generic[$i]!=''){
$generic_name=$_POST['generic_name'];
$go=7;
echo '<br><br><br><br>';
}
}







		

		
		if($class[$i]!=''&& $generic_name[$i]!=''&&isset($_POST['new_trade_name'])){
		//$class=$_POST['new_class'];
		//$generic_name=$_POST['new_generic_name'];

		
		
		
		 if($company_name[$i]!=''){
		if($go==9){
		$sql = "INSERT INTO prescription(generic_name,class) VALUES ('$generic_name[$i]','$class[$i]')";
		$retval = mysql_query( $sql, $conn );
		}
		
		$sql = "INSERT INTO medicine(generic_name,trade_name,company_name) VALUES ('$generic_name[$i]','$trade_name[$i]','$company_name[$i]')";
		$retval = mysql_query( $sql, $conn );
		
		//echo "data successfully added old P old C<br>";
		
		}
		
		

		
		
		else if($new_company_name[$i]!=''){

		if($go==9){
		$sql = "INSERT INTO prescription(generic_name,class) VALUES ('$generic_name[$i]','$class[$i]')";
		$retval = mysql_query( $sql, $conn );
		}
		
		$sql = "INSERT INTO medicine(generic_name,trade_name,company_name) VALUES ('$generic_name[$i]','$trade_name[$i]','$new_company_name[$i]')";
		$retval = mysql_query( $sql, $conn );
		
		//echo "data successfully added Old P new C<br>";
		
		}
		
				
	}
	
	
	
}
	

	
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	
	
for($i=0;$i<sizeof($class);$i=$i+1){

if($ganu[$i]==1 || $janu[$i]==1){

if($new_trade_name[$i]!=''){

$trade_name[$i]=$new_trade_name[$i];
}

echo $preperation_up[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
echo $generic_name_up[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';




//echo 'Allah is Great<br>';
 		
$sql9 = "SELECT distinct company_name FROM medicine where generic_name='$generic_name[$i]'";
//echo $it."<br>";
$retval9 = mysql_query( $sql9, $conn );
if(! $retval9 )
{
  die('Could not get data: ' . mysql_error());
}

$count9 = mysql_num_rows($retval9);

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
		
		
	}


	

echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';

echo $strength_up[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
echo $dose_up[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
echo $rule_up[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
echo $duration_up[$i].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';





echo "<input type='hidden' name='preperation[]' value='$preperation_up[$i]'>";
echo "<input type='hidden' name='generic_name[]' value='$generic_name_up[$i]'>";
echo "<input type='hidden' name='strength[]' value='$strength_up[$i]'>";
echo "<input type='hidden' name='dose[]' value='$dose_up[$i]'>";
echo "<input type='hidden' name='rule[]' value='$rule_up[$i]'>";
echo "<input type='hidden' name='duration[]' value='$duration_up[$i]'>";
echo "<input type='hidden' name='trade_name[]' value='$trade_name[$i]'>";



echo '<br><br><br><br>';
}
}


	

	


///-------------------------------------------------------------///






echo "<input type='hidden' name='name' value='$name'>";
echo "<input type='hidden' name='gender' value='$gender'>";
echo "<input type='hidden' name='age' value='$age'>";










//--------------------company name menubar-------------------///



echo "<input type='submit' name='submit' value='SUBMIT'>";
echo '</form>';


?>




</tr></td></table>
</body>
</html>