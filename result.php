<html>
<head>
<title>result</title>
</head>
<body>
<?php
$a=$_POST['searchbox'];
$b=$_POST['passtxt8'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('createaccount');
$query_select="select * from adminrecords";
$result=mysql_query($query_select);
while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
$r=0;
if($a===$row['team'])
{
?>
<form name="teampic" method="post" action="<?php echo $a;?>.php">
<input type="text" name="passtx22" value="<?php echo $a;?>"hidden>
<input type="text" name="passtxt21" value="<?php echo $b;?>"hidden>
<input type="image" src="<?php echo $a;?>.jpg" width="300" height="200" onmouseover="thi.src='<?php echo $a;?>.jpg'"> 
<?php
break;
}
else if($a===$row['players'])
{
?>
<form name="search3" method="post" action="<?php echo $a;?>.php">
<input type="text" name="passtxt22" value="<?php echo $a;?>"hidden>
<input type="text" name="passtxt21" value="<?php echo $b;?>"hidden>
<input type="submit" name="search4" value="<?php echo $a;?>">
</form>
<?php
break;
}
else if($a===$row['year'])
{
?>
<form name="search5" method="post" action="<?php echo $a;?>.php">
<input type="text" name="yearsearch1" value="<?php echo $a;?>"hidden>
<input type="text" name="passtxt300" value="<?php echo $b;?>"hidden>
<input type="submit" name="search6" value="<?php echo $a;?>">
</form>
<?php
break;
}
else 
{
$r=1;
}
}
if($r===1)
{
echo "Search Invalid";
}
?>
</body>
</html>
