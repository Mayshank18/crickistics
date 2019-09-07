<html>
<head>
<title> Yuvrajins </title>
</head>
<body>
<?php
$a=$_POST['yuvicomment'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('comments');
$query_insert="insert into yuvraj6sixescomments(comment) values('$a')";
if($a==NULL)
{
echo "Check your comment";?>
<form name="yuviback" action="yuvraj6sixes.php">
<input type="submit" name="yuvisub" value="Back">
</form>
<?php
}
else
{
if(mysql_query($query_insert,$conn))
{
echo "Comment added successfully";
echo $a;?>
<form name="yuvidelform" method="post" action="yuvraj6sixesdel.php">
<input type="text" name="yuvidel" value="<?php echo $a;?>"hidden>
<input type="submit" name="yuvidelsub" value="Delete">
</form>
<form name="yuvieditform" method="post" action="yuvraj6sixesedit.php">
<input type="text" name="yuviedit" value="<?php echo $a;?>"hidden>
<input type="submit" name="yuvieditsub" value="Edit">
</form>
<form name="yuviback1" action="yuvraj6sixes.php">
<input type="submit" name="yuvisub1" value="Back">
</form>
<?php
}
else
{
echo "Not successful";?>
<form name="yuviback2" action="yuvraj6sixes.php">
<input type="submit" name="yuvisub2" value="Back">
</form>
<?php
}
}
mysql_close($conn);
?>
</body>
</html>