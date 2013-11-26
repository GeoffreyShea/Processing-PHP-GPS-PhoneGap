<?php
//$connection = mysql_connect('durham.accountsupportmysql.com', 'dag', 'dag1!');
	$connection = mysql_connect("localhost","root","root"); 
	if(!$connection){
		die("Database conenction failed: " . mysql_error());
	}
	$db_select = mysql_select_db("locations");
	if(!$db_select){
		die("Database selection failed: " . mysql_error());
	}
$result = mysql_query("SELECT * FROM user_locations ORDER BY time DESC");

$out = fopen('php://output', 'w');
fputcsv($out, array('user','long','lat','ID','time'));
while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
	$array = array($row['user'].','.$row['long'].','.$row['lat']); // .','.$row['time']
	//echo $array;
    fputcsv($out, $row);
}
fclose($out);
?>