<?php
$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$dbName = 'employees';

($db = mysql_connect($hostname,$username,$password))
        or die("Unable to connect");
mysql_select_db($dbName);

$firstQuery = "select * from employees limit 5;";

$result = mysql_query($firstQuery);

while($r = mysql_fetch_array($result)){
	$num = $r["first_name"];
	$empNo = $r["emp_no"];
	$lastName = $r["last_name"];
	$birthDate = $r["birth_date"];
	$gender  = $r["gender"];
	$hireDate = $r["hire_date"];
	echo '<a href="update.html?fname='.$num.'&empNo='.$empNo.'&lname='.$lastName.'&birthDate='.$birthDate.'
								&gender='.$gender.'&hireDate='.$hireDate.'" id='.$num .'>Edit</button>'.$num.'<br>';
}

?>

