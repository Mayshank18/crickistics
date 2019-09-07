<?php
$a=$_POST['passtxt40'];
header('Content-type: image/JPG');
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$connect=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('createaccount');
$query_select="select pic from createaccount1 where user_name='$a'";
$result=mysql_query($query_select);
$row=mysql_fetch_array($result,MYSQL_ASSOC);
echo $row['pic'];
?>
