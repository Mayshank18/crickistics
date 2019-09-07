<html>
<head>
<title> Login1</title>
</head>
<body bgcolor="F08080" text="black">
<?php
$a=$_POST['user_name'];
$b=$_POST['pass'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('createaccount');
$query_select="select * from createaccount1";
$result=mysql_query($query_select);
while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
$r=1;
if(($a===$row['user_name'])&&($b===$row['pass']))
{
?>
Logged in successfully
<br><br>
<form name="passtxt1" method="post" action="cricistics.php">
<input type="text" name="passtxt" value="<?php echo $a; ?>" hidden>
Go to&nbsp&nbsp<input type="submit" name="passsub" value="Cricistics">
</form>
<form name="signout" action="login.html">
<input type="submit" name="signout1" value="Sign out">
</form>
<?php
$r=0;
break;
}
}
if($r===1)
{
echo "Invalid username and password";
?>
<br><br>
<form name="back" method="post" action="login.html">
<input type="submit" name="backsub" value="Back">
</form>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <form name="creteacc" action="createaccount.html">
<input type="submit" name="ca" value="Create Account">
</form>
<?php
}
?>
</body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          