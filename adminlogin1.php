<html>
<head>
<title>Admin Login1 </title>
</head>
<body>
<?php
$a=$_POST['user_id'];
$b=$_POST['password'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('createaccount');
$query_select="select * from adminlogin1";
$result=mysql_query($query_select);
while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
if(($a===$row['user_id'])&&($b===$row['password']))
{
echo "Admin logged in successfully";
?>
<br><br>
<form name="pro" action="adminhome.php">
<input type="submit" name="proceed" value="Proceed">
</form>
<?php
}
else
{
echo "Invalid username and password";
?>
<form name="bac" action="adminlogin.html">
<input type="submit" name="back" value="Back">
</form>
<?php
}
}
?>
</body>
</html>