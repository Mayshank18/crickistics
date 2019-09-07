<html>
<head>
<title>go4</title>
</head>
<body bgcolor="9370DB">
<?php
$a=$_POST['namesearch6'];
$b=$_POST['passtxt200'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('createaccount');
$query_select="select * from adminrecords where players='$a'";
$result=mysql_query($query_select);
if($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
if($row['team']==="Pakistan")
{
?>
<form name="playersearch1" method="post" action="<?php echo $row['players']?>.php">
<input type="text" name="passtxt21" value="<?php echo $b;?>"hidden>
<input type="text" name="passtxt22" value="<?php echo $row['players'];?>"hidden>
<input type="image" src="<?php echo $a;?>.JPG" width="450" height="400" onmouseover="thi.src='<?php echo $a;?>.JPG'">
</form>
<?php
}
else
{
echo "Only Pakistan Players";
}
}
else
{
echo "Search Invalid";
}
?>
<form name="back11" method="post" action="Pakistan.php">
<input type="text" name="passtxt14" value="<?php echo $b;?>"hidden>
<input type="submit" name="h10" value="Back">
</form>
<form name="home15" method="post" action="cricistics.php">
<input type="text" name="passtxt" value="<?php echo $b;?>"hidden>
<input type="submit" name="h11" value="Home">
</form>
</body>
</html>