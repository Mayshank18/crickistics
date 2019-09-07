<html>
<head>
<title>profile</title>
</head>
<body bgcolor="7FFFD4">
<?php
$a=$_POST['passtxt4'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('createaccount');
$query_select="select * from createaccount1 where user_name='$a'";
$result=mysql_query($query_select);
$row=mysql_fetch_array($result,MYSQL_ASSOC);
?>
<pre>
First Name      : <?php echo $row['first_name'];?><br>
Last Name       : <?php echo $row['last_name'];?><br>
User Name       : <?php echo $row['user_name'];?><br>
Email ID        : <?php echo $row['e_mail'];?><br>
Gender          : <?php echo $row['first_name'];?><br>
Date of Birth   : <?php echo $row['dob'];?><br>
Favorite Team   : <?php echo $row['team'];?><br>
Players         : <?php echo $row['players'];?><br>
</pre>
<form name="profhome" method="post" action="cricistics.php">
<input type="text" name="passtxt" value="<?php echo $a;?>"hidden>
<input type="submit" name="profhome1" value="Home">
</form>
<form name="signout4" action="login.html">
<input type="submit" name="signout5" value="Sign out">
</form>
</body>
</html>