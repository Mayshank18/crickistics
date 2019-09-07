<html>
<head>
<title>Changefirst</title>
</head>
<body>
<?php
$a=$_POST['first_name1'];
$b=$_POST['user_name_a'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('createaccount');
$query_update="update createaccount1 set first_name='$a' where user_name='$b'";
if(mysql_query($query_update,$conn))
{
?>
Successfully changed
First Name : <?php echo $a; ?>
<form name="viewpro" method="post" action="profile.php">
<input type="text" name="passtxt4" value="<?php echo $b;?>"hidden>
<input type="submit" name="viewsub" value="View Profile">
</form>
<?php
}
else
{
?>
Update unsuccessful
<form name="proback" action="editprofile1.php">
<input type="submit" name="prosub" value-"Back">
</form>
<?php
}
mysql_close($conn);
?>
</body>
</html>