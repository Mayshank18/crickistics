<html>
<head>
<title> video </title>
</head>
<body>
<?php
$a=$_POST['viruinp1'];
?>
<video align="right" width="1000" height="500" controls>
  <source src="virender sehwag 122.mp4" type="video/mp4">
</video>
<br><br>
<?php
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('comments');
$query_select="select * from viru122comments";
$result=mysql_query($query_select,$conn);
?>
COMMENTS :<br><br>
<?php
while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
?>
<b>
<?php
echo $row['user_name3'];
?>
</b>
<br>
<form name="dis1" method="post" action="viru122commentsdel.php">
<input type="text" name="dissub1" value="<?php echo $row['comment1'];?>"disabled>
</form>
<?php
}
mysql_close($conn);
$mysqlport1=getenv('S2G_MYSQL_PORT');
$dbhost1="localhost:".$mysqlport1;
$dbuser1='root';
$dbpass1='';
$conn1=mysql_connect($dbhost1,$dbuser1,$dbpass1);
mysql_select_db('comments');
$query_select1="select * from viru122comments where user_name3='$a'";
$result1=mysql_query($query_select1,$conn1);
$row1=mysql_fetch_array($result1,MYSQL_ASSOC);
if($a===$row1['user_name3'])
{
?>
<form name="button1" method="post" action="viru122commentsdel.php">
<input type="text" name="viruinp2" value="<?php echo $a;?>"hidden>
<input type="submit" name="dissub2" value="Delete">
</form>
<?php
}
mysql_close($conn1);
?>
<form name="comements1" method="post" action="viru122commentsins.php">
<input type="text" name="viruinp3" value="<?php echo $a;?>"hidden>
Add Comment :
<br><br>
<textarea name="virucomment" rows="05" columns="05" value="">
</textarea>
<br><br><input type="submit" name="viruins" value="Add">
</form>
<form name="goback2" method="post" action="specialmoments.php">
<input type="text" name="passtxt6" value="<?php echo $a;?>"hidden>
<input type="submit" name="goback3" value="Go Back">
</form>
</body>
</html>