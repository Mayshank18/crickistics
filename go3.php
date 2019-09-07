<html>
<head>
<title>go3</title>
</head>
<body>
<?php
$a=$_POST['scoresearch1'];
$b=$_POST['passtxt200'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('createaccount');
$query_select="select year from adminrecords where year='$a'";
$result=mysql_query($query_select);
if($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
?>
<form name="yearsearch" method="post" action="<?php echo $a;?>.php">
<input type="text" name="passtxt300" value="<?php echo $b;?>"hidden>
<input type="submit" name="yearsearch1" value="<?php echo $a;?>">
</form>
<?php
}
else
{
echo "Search Invalid";
}
?>
<form name="somename" method="post" action="scoreboards.php">
<input type="text" name="passtxt10" value="<?php echo $b;?>" hidden>
<input type="submit" name="sooo" value="Back">
</form>
<form name="somename10" method="post" action="cricistics.php">
<input type="text" name="passtxt" value="<?php echo $b;?>"hidden>
<input type="submit" name="s2000"value="Home">
</form>
</body>
</html>