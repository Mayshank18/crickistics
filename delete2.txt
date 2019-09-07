<html>
<head>
<title>delete2</title>
</head>
<body>
<?php
$a=$_POST['un'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('createaccount');
$query_delete="delete from createaccount1 where user_name='$a'";
if(mysql_query($query_delete,$conn))
{
echo "Deleted Successfully";
?>
<form name="deldisp" action="display.php">
<input type="submit" name="deldisp1" value="Display">
</form>
<form name="deldisp2" action="adminhome.php">
<input type="submit" name="deldisp3" value="Home">
</form>
<?php
}
else
{
echo "Not deleted";
?>
<form name="deldisp4" action="delete2.php">
<input type="submit" name="deldisp5" value="Back">
</form>
<?php
}
mysql_close($conn);
?>
</body>
</html>
