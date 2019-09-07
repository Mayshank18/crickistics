<html>
<head>
<title>scoreboard</title>
</head>
<body bgcolor="00008B" text="FF1493">
<?php
$a=$_POST['passtxt10'];
?>
<b><p align="center"><font size="08" color="FF8C00">
SCOREBOARD
</font></p></b>
<br><br><br>
See all your favourite Player's DEBUT match scorecard
<br><br>
<form name="scoresearch" method="post" action="go3.php">
Enter a year :<input type="text" name="scoresearch1" value="">
&nbsp&nbsp&nbsp
<input type="text" name="passtxt200" value="<?php echo $a;?>" hidden>
<input type="submit" name="scoresearch2" value="Search">
</form>
<form name="back5" method="post" action="cricistics.php">
<input type="text" name="passtxt" value="<?php echo $a;?>" hidden>
<input type="submit" name="back10" value="Back">
</form>
</body>
</html>