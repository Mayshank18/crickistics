<html>
<head>
<title> Delete</title>
</head>
<body>
<?php
$a=$_POST['yuviinp2'];
echo $a;
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('comments');
$query_delete="delete from yuvraj6sixescomments where user_name2='$a'";
if(mysql_query($query_delete,$conn))
{
echo "Comment deleted successfully";
?>
<form name="delcomback" method="post" action="yuvraj6sixes.php">
<input type="text" name="yuviinp1" value="<?php echo $a;?>"hidden>
<input type="submit" name="delinp" value="Back">
</form>
<?php
}
else
{
echo "Not deleted";
?>
<form name="delcomback1" action="yuvraj6sixes.php">
<input type="text" name="yuviinp1" value="<?php echo $a;?>"hidden>
<input type="submit" name="delinp1" value="Back">
</form>
<?php
}
?>
</body>
</html>