<html>
<head>
<title>India</title>
</head>
<body bgcolor="F9967A" text="8BOOOO">
<?php
$a=$_POST['passtxt14'];
?>
<font size="05" color="006400">
PAKISTAN
</font>
<br><br><br>
<form name="namesearch5" method="post" action="go4.php">
Enter a Player's Name                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :   <input type="text" name="namesearch6" value="">
<input type="text" name="passtxt200" value="<?php echo $a;?>"hidden>
&nbsp&nbsp&nbsp <input type="submit" name="namesearch7" value="Search">
</form>
<form name="hssearch" method="post" action="go5.php">
Enter a Player's Highest Score :   <input type="text" name="hssearch6" value="">
<input type="text" name="passtxt201" value="<?php echo $a;?>"hidden>
&nbsp&nbsp&nbsp <input type="submit" name="hssearch7" value="Search">
</form>
<form name="back10" method="post" action="playerstats.php">
<input type="text" name="passtxt9" value="<?php echo $a; ?>"hidden>
<input type="submit" name="b10" value="Back">
</form>
<form name="home1" method="post" action="cricistics.php">
<input type="text" name="passtxt" value="<?php echo $a; ?>"hidden>
<input type="submit" name="h2" value="Home">
</form>
</body>
</html>