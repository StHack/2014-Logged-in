<?php
include('mysql_config.php');

if(isset($_GET['user_id'])){
	extract($_GET);
	$mysql = mysql_connect($mysql_host, $mysql_user, $mysql_password);
	$query = 'UPDATE users set online=1, comment="'.mysql_real_escape_string($comm).'" where id='.mysql_real_escape_string($user_id);
	mysql_db_query('my_website', $query);
	echo mysql_affected_rows();
	mysql_close($mysql);
}

?>
