<html>
<head>
<title> video </title>
</head>
<body>
<?php
$a=$_POST['yuviinp1'];
?>
<video align="right" width="1000" height="500" controls>
  <source src="Yuvraj Singh 6 Sixes In 6 Balls HD 1080p.mp4" type="video/mp4">
</video>
<br><br>
<?php
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('comments');
$query_select="select * from yuvraj6sixescomments";
$result=mysql_query($query_select,$conn);
?>
COMMENTS :<br><br>
<?php
while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
?>
<b>
<?php
echo $row['user_name2'];
?>
</b>
<br>
<form name="dis" method="post" action="yuvraj6sixescommentsdel.php">
<input type="text" name="dissub" value="<?php echo $row['comment'];?>"disabled>
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
$query_select1="select * from yuvraj6sixescomments where user_name2='$a'";
$result1=mysql_query($query_select1,$conn1);
$row1=mysql_fetch_array($result1,MYSQL_ASSOC);
if($a===$row1['user_name2'])
{
?>
<form name="button" method="post" action="yuvraj6sixescommentsdel.php">
<input type="text" name="yuviinp2" value="<?php echo $a;?>"hidden>
<input type="submit" name="dissub1" value="Delete">
</form>
<?php
}
mysql_close($conn1);
?>
<form name="comements" method="post" action="yuvraj6sixescommentsins.php">
<input type="text" name="yuviinp3" value="<?php echo $a;?>"hidden>
Add Comment :
<br><br>
<textarea name="yuvicomment" rows="05" columns="05" value="">
</textarea>
<br><br><input type="submit" name="yuviins" value="Add">
</form>
<form name="goback" method="post" action="specialmoments.php">
<input type="text" name="passtxt6" value="<?php echo $a;?>"hidden>
<input type="submit" name="goback1" value="Go Back">
</form>
</body>
</html>