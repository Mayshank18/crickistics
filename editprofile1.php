<html>
<head>
<title> Edit Profile 1 </title>
</head>
<body>
<?php
$a=$_POST['passtxt2'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('createaccount');
$query_select="select * from createaccount1 where user_name='$a'";
$result=mysql_query($query_select);
$row=mysql_fetch_array($result,MYSQL_ASSOC)
?>
<form name="formfirst" method="post" action="changefirst.php">First Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <input type="text" name="first_name1" value="<?php echo $row['first_name'];?>">
<input type="text" name="user_name_a" value="<?php echo $a;?>"hidden><input type="submit" name="subfirst" value="Change"></form><br>
<form name="formlast" method="post" action="changelast.php">Last Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:  <input type="text" name="last_name1" value="<?php echo $row['last_name'];?>">
<input type="text" name="user_name_a" value="<?php echo $a;?>"hidden><input type="submit" name="subsecond" value="Change"></form><br>
<form name="formuser" method="post">User Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <input type="text" name="user_name1" value="<?php echo $row['user_name'];?>"disabled></form><br>
<form name="formemail" method="post" action="changeemail.php">Email ID &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <input type="email" name="e_mail1" value="<?php echo $row['e_mail'];?>">
<input type="text" name="user_name_a" value="<?php echo $a;?>"hidden><input type="submit" name="subemail" value="Change"></form><br>
<form name="formpass" method="post" action="changepass.php">Password &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <input type="password" name="pass1" value="<?php echo $row['pass'];?>">
<input type="text" name="user_name_a" value="<?php echo $a;?>"hidden><input type="submit" name="subpass" value="Change"></form><br>
<form name="formdob" method="post" action="changedob.php">Date of Birth &nbsp&nbsp&nbsp&nbsp&nbsp : <input type="date" name="dob1" value="<?php echo $row['dob'];?>">
<input type="text" name="user_name_a" value="<?php echo $a;?>"hidden><input type="submit" name="subdob" value="Change"></form><br>
<br><br><form name="editsub" method="post" action="cricistics.php">
<input type="text" name="passtxt" value="<?php echo $a;?>"hidden>
<input type="submit" name="subedit" value="Home">
</form>
</body>
</html>