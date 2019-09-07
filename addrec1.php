<html>
<head>
<title>Add rec1</title>
</head>
<body>
<?php
$a=$_POST['team'];
$b=$_POST['players'];
$c=$_POST['year'];
$d=$_POST['format'];
$e=$_POST['hs'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('createaccount');
$query_insert="insert into adminrecords(team,players,year,format,hs) values('$a','$b','$c','$d','$e')";
if(mysql_query($query_insert,$conn))
{
echo "Inserted successfully";
}
else
{
echo "Insertion failed";
}
mysql_close($conn);
?>
<form name="back5" action="addrec.html">
<input type="submit" name="sub5" value="Back">
</form>
</body>
</html>