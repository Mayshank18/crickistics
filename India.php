<html>
<head>
<title>India</title>
</head>
<body bgcolor="F9967A" text="8BOOOO">
<?php
$a=$_POST['passtxt13'];
?>
<font size="05" color="006400">
INDIA
</font>
<br><br><br>
<form name="namesearch" method="post" action="go1.php">
Enter a Player's Name                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :   <input type="text" name="namesearch1" value="">
<input type="text" name="passtxt20" value="<?php echo $a;?>"hidden>
&nbsp&nbsp&nbsp <input type="submit" name="namesearch2" value="Search">
</form>
<form name="hssearch" method="post" action="go2.php">
Enter a Player's Highest Score :   <input type="text" name="hssearch1" value="">
<input type="text" name="passtxt25" value="<?php echo $a;?>"hidden>
&nbsp&nbsp&nbsp <input type="submit" name="hssearch2" value="Search">
</form>
<form name="back2" method="post" action="playerstats.php">
<input type="text" name="passtxt9" value="<?php echo $a; ?>"hidden>
<input type="submit" name="b2" value="Back">
</form>
<form name="home1" method="post" action="cricistics.php">
<input type="text" name="passtxt" value="<?php echo $a; ?>"hidden>
<input type="submit" name="h2" value="Home">
</form>
</body>
</html>