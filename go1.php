<html>
<head>
<title>go1</title>
</head>
<body bgcolor="9370DB">
<?php
$a=$_POST['namesearch1'];
$b=$_POST['passtxt20'];
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
if($row['team']==="India")
{
?>
<form name="playersearch" method="post" action="<?php echo $row['players']?>.php">
<input type="text" name="passtxt21" value="<?php echo $b;?>"hidden>
<input type="text" name="passtxt22" value="<?php echo $row['players'];?>"hidden>
<input type="image" src="<?php echo $a;?>.JPG" width="450" height="400" onmouseover="thi.src='<?php echo $a;?>.JPG'">
</form>
<?php
}
else
{
echo "Only Indian Players";
}
}
else
{
echo "Search Invalid";
}
?>
<form name="back3" method="post" action="India.php">
<input type="text" name="passtxt13" value="<?php echo $b;?>"hidden>
<input type="submit" name="h3" value="Back">
</form>
<form name="home2" method="post" action="cricistics.php">
<input type="text" name="passtxt" value="<?php echo $b;?>"hidden>
<input type="submit" name="h2" value="Home">
</form>
</body>
</html>