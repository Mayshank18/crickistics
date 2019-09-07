<html>
<head>
<title>php</title>
</head>
<body>
<?php
$a=$_POST['first_name'];
$b=$_POST['last_name'];
$c=$_POST['user_name'];
$d=$_POST['e_mail'];
$e=$_POST['pass'];
$f=$_POST['confirmpass'];
$g=$_POST['gender'];
$h=$_POST['dob'];
$i=$_POST['team'];
$j=$_POST['players'];
$imagename=$_FILES["propic"]["name"];
$imagetmp=addslashes(file_get_contents($_FILES['propic']['tmp_name']));
$pla="";
foreach($j as $pla1)
{
$pla.=$pla1.",";
}
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('createaccount');
$query_insert="insert into createaccount1(first_name,last_name,user_name,e_mail,pass,confirmpass,gender,dob,team,players,name,pic) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$pla','$imagename','$imagetmp')";
if(($a==NULL)||($b==NULL)||($c==NULL)||($d==NULL)||($e==NULL)||($f==NULL)||($g==NULL)||($h==NULL)||($i==NULL)||($j==NULL))
{
echo ('Check your inputs');
}
else
{
if($e==$f)
{
 if(mysql_query($query_insert,$conn))
 {
 echo ("Account created succesfully");?> <br><br>
<form name="passtxt1" method="post" action="cricistics.php">
<input type="text" name="passtxt" value="<?php echo $c; ?>" hidden>
Go to&nbsp&nbsp<input type="submit" name="passsub1" value="Cricistics">
</form>
 <?php
 }
else
 {
 echo ("Sorry .....INVALID email-ID"); ?> <br><br>Go back 
 <form name="button" action="createaccount.html">
 <input type="submit" name="sub" value="Back">
 </form>
 <?php
 }
}
if($e!=$f)
{
echo ('Password not confirmed');
}
}
?> 
<?php	
mysql_close($conn);
?>
</body>
</html>