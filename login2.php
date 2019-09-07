<html>
<head>
<title> Login2</title>
</head>
<body>
<?php
$a=$_POST['user_name'];
$b=$_POST['pass'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('createaccount');
$query_select="select * from createaccount1 where user_name='$a'";
$result=mysql_query($query_select));
while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
if(
$result=mysql_query($query_select);
$row=mysql_fetch_array($result,MYSQL_ASSOC);
echo $row['user_name'];
echo $row['pass'];
echo ('created');
}
else
{
echo ('not created');
}
?>
</body>
</html>