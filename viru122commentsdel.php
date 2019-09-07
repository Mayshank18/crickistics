<html>
<head>
<title> Delete</title>
</head>
<body>
<?php
$a=$_POST['viruinp2'];
echo $a;
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('comments');
$query_delete="delete from viru122comments where user_name3='$a'";
if(mysql_query($query_delete,$conn))
{
echo "Comment deleted successfully";
?>
<form name="delcomback1" method="post" action="sehwag122.php">
<input type="text" name="viruinp1" value="<?php echo $a;?>"hidden>
<input type="submit" name="delinp1" value="Back">
</form>
<?php
}
else
{
echo "Not deleted";
?>
<form name="delcomback2" action="sehwag122.php">
<input type="text" name="viruinp1" value="<?php echo $a;?>"hidden>
<input type="submit" name="delinp2" value="Back">
</form>
<?php
}
?>
</body>
</html>