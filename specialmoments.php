<html>
<head>
<title>Special Moments</title>
</head>
<body>
<?php
$a=$_POST['passtxt6'];
?>
<form name="spemomback" method="post" action="cricistics.php">
<input type="text" name="passtxt" value="<?php echo $a;?>"hidden>
<input type="submit" name="sub1" value="Home">
</form>
<form method="post" action="yuvraj6sixes.php">
<input type="text" name="yuviinp1" value="<?php echo $a;?>"hidden>
<input type="image" src="6sixes.jpg" width="350" height="250" onmouseover="thi.src='6sixes.jpg'">
</form>
<br><font size="04">
Who can forget the blistering innings from Yuvraj Singh in 2007 T20 World Cup against England??....Click above to watch the 6 sixes hit by Yuvi !!!....
</font>
<br><br>
<form method="post" action="sehwag122.php">
<input type="text" name="viruinp1" value="<?php echo $a;?>"hidden>
<input type="image" src="sehwag122.jpg" width="350" height="250" onmouseover="thi.src='sehwag122.jpg'">
</form>
</body>
</html>