<html>
<head>
<title>delete1</title>
</head>
<body>
<?php
$a=$_POST['disp'];
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
<table border="05" width="10" height="10" cellspacing="10" cellpadding="10">
<tr>
<td><?php echo $row['first_name'];?></td>
<td><?php echo $row['last_name'];?></td>
<td><?php echo $row['user_name'];?></td>
<td><?php echo $row['e_mail'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['dob'];?></td>
<td><?php echo $row['team'];?></td>
<td><?php echo $row['players'];?></td>
</tr>
</table>
<br><br>
<form name="confirm" method="post" action="delete2.php">
<input type="text" name="un" value="<?php echo $a;?>"hidden>
<input type="submit" name="confirmdel" value="Confirm">
</form>
<form name="back" action="delete.php">
<input type="submit" name="back1" value="Cancel">
</form>
</body>
</html>