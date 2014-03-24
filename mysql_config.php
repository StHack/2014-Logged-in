<?php
$mysql_host='127.0.0.1';
$mysql_user='root';
$mysql_password='sthack_password';

if(strripos($_GET['user_id'],"sleep") or strripos($_GET['user_id'],"benchmark")){
	echo "Wake up guy, you'll sleep tomorrow !";
	exit();
}
?>
