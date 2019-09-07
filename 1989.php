<html>
<head>
<title>1989</title>
</head>
<body>
<?php
$a=$_POST['yearsearch1'];
$b=$_POST['passtxt300'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('createaccount');
$query_select="select * from adminrecords where year='$a'";
$result=mysql_query($query_select);
while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
?>
<table>
<tr>
<td>
<form name="planame" method="post" action="<?php echo $row['players'];?>.php">
<input type="text" name="passtxt21" value="<?php echo $b;?>" hidden>
<input type="text" name="passtxt22" value="<?php echo $row['players'];?>" hidden>
<input type="submit" name="planame1" value="<?php echo $row['players'];?>">
</form>
</td>
<td>
<form name="format" method="post" action="<?php echo $row['players'].$row['format'];?>.php">
<input type="submit" name="format1" value="<?php echo $row['format'];?>">
</form>
</td>
</tr>
</table>
<?php
}
?>
<table cellspacing="02" cellpadding="02">
<tr>
<td>
<form name="somename1" method="post" action="go3.php">
<input type="text" name="passtxt200" value="<?php echo $b;?>" hidden>
<input type="text" name="scoresearch1" value="<?php echo $a;?>" hidden>
<input type="submit" name="sooo1" value="Back">
</form>
</td>
<td>
<form name="somename11" method="post" action="cricistics.php">
<input type="text" name="passtxt" value="<?php echo $b;?>"hidden>
<input type="submit" name="s2001" value="Home">
</form>
</td>
</tr>
</table>
</body>
</html>
