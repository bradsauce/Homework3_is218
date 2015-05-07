<html>

<body>
	<h3>HomeWork 2 Query Results</h3>

<!--
<?php 

$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$dbName = 'employees';

($db = mysql_connect($hostname,$username,$password))
        or die("Unable to connect");
mysql_select_db($dbName);

/*$firstQuery = "select distinct employees.first_name, employees.last_name, salaries.salary 
from employees 
left join salaries on employees.emp_no=salaries.emp_no 
order by salary DESC limit 1;
";

$result = mysql_query($firstQuery);

while($r = mysql_fetch_array($result)){
	$name = $r["first_name"];
	$lName = $r["last_name"];
	$salary = $r["salary"];
	echo $name . ' ' . $lName . ' ' . $salary . '<br>';
}*/

$query = "select * from employees limit 5;";

$result = mysql_query($query);

while($r = mysql_fetch_array($result)){
	$name = $r["first_name"];
	echo $name . '<br>';
}

?>
-->

<ol>
		<li>Tokuyasu, Pesch, 158220</li>
		<li>Hauke, Bouloucos, 96581, 1985-03-09, 1985-05-05</li>
		<li>Senior Engineer, Staff, Engineer, Senior Staff, Assistant Engineer, Technique Leader, Manager</li>
		<li>
			<ul>
				<li>110039, Vishwani, Minakawa, 9999-01-01</li>
				<li>110114, Isamu, Legleitner, 9999-01-01</li>
				<li>110228, Karsten, Sigstam, 9999-01-01</li>
				<li>110420, Oscar, Ghazalie, 9999-01-01</li>
				<li>110567, Leon, DasSarma, 9999-01-01</li>
				<li>110854, Dung, Pesch, 9999-01-01</li>
				<li>111133, Hauke, Zhang, 9999-01-01</li>
				<li>111534, Hilary, Kambil, 9999-01-01</li>
				<li>111939, Yuchang, Weedman, 9999-01-01</li>
			</ul>
		</li>
		<li></li>
		<li>Olivera, Baek, 38623</li>
		<li>
			<ul>
				d001, 20211 <br>
				d002, 17346 <br>
				d003, 17786 <br>
				d004, 73485 <br>
				d005, 85707 <br>
				d006, 20117 <br>
				d007, 52245 <br>
				d008, 21126 <br>
				d009, 23580 <br>
			</ul>
		</li>
		<li>
			<ul>
				d001, 13725425266  <br>
				d002, 11650834677  <br>
				d003, 9363811425  <br>
				d004, 41554438942  <br>
				d005, 48179456393  <br>
				d006, 10865203635  <br>
				d007, 40030089342  <br>
				d008, 11969730427  <br>
				d009, 13143639841  <br>
			</ul>
		</li>
		<li>
			181480757419 <br>
		</li>
	</ol>


</body>
<br>
<a href="insert.html">Insert</a>
<br>
<a href="update.php">Update</a>

</html>
