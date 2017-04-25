<?php
mysql_connect("localhost","root","13108039")or die("cannot connect");
mysql_query("use project");
$result=mysql_query("select * from log");

$a = array();
while($row=mysql_fetch_array($result)){
	// echo $row[0]."<b;
	array_push($a, $row);
}

echo json_encode($a);

?>