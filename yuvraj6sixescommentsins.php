<html>
<head>
<title> Yuvrajins </title>
</head>
<body>
<?php
$a=$_POST['yuvicomment'];
$b=$_POST['yuviinp3'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('comments');
$query_insert="insert into yuvraj6sixescomments(user_name2,comment) values('$b','$a')";
if($a==NULL)
{
echo "Check your comment";?>
<form name="yuviback" method="post" action="yuvraj6sixes.php">
<input type="text" name="yuviinp1" value="<?php echo $b;?>" hidden>
<input type="submit" name="yuvisub" value="Back">
</form>
<?php
}
else
{
if(mysql_query($query_insert,$conn))
{
echo "Comment added successfully";
?>
<form name="yuviback1" method="post" action="yuvraj6sixes.php">
<input type="text" name="yuviinp1" value="<?php echo $b;?>" hidden>
<input type="submit" name="yuvisub1" value="Back">
</form>
<?php
}
else
{
echo "Not successful......Only one comment allowed";?>
<form name="yuviback2" method="post" action="yuvraj6sixes.php">
<input type="text" name="yuviinp1" value="<?php echo $b;?>"hidden>
<input type="submit" name="yuvisub2" value="Back">
</form>
<?php
}
}
mysql_close($conn);
?>
</body>
</html>