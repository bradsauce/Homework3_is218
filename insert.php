<?php

$employeeNum = $_REQUEST["employeeNumber"];
$birthDate = $_REQUEST["birthDate"];
$employee = $_REQUEST["employeeName"];
$employeeLastName = $_REQUEST["employeeLastName"];
$gender = $_REQUEST["gender"];
$hireDate = $_REQUEST["hireDate"];

echo $employee;

$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$dbName = 'employees';

($db = mysql_connect($hostname,$username,$password))
        or die("Unable to connect");
mysql_select_db($dbName);

$sql = "insert into employees (emp_no,birth_date,first_name,last_name,gender,hire_date) values ('$employeeNum','$birthDate','$employee','$employeeLastName','$gender','$hireDate')";

mysql_query($sql);

if(mysql_error()){
	echo mysql_error();
}

?>