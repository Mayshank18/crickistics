<html>
<head>
<title>Display</title>
</head>
<body>
<?php
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('createaccount');
$query_select="select * from createaccount1";
$result=mysql_query($query_select);
?>
<table border="05" width="10" height="10" cellspacing="10" cellpadding="10">
<tr>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>USER NAME</th>
<th>EMAIL ID</th>
<th>GENDER</th>
<th>DATE OF BIRTH</th>
<th>TEAM</th>
<th>PLAYERS</th>
</tr>
<?php
while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
?>
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
<?php
}
?>
</table><br><br>
<form name="adminback" action="adminhome.php">
<input type="submit" name="adminback1" value="Home">
</form>
</body>
</html>