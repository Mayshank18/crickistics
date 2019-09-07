<html>
<head>
<title>iccplayerrankings</title>
</head>
<body bgcolor="8B0000">
<?php
$passtxt1000=$_POST['passtxt11'];
?>
<font size="06" color="B8860B"><b><b>
<center> ICC PLAYER RANKINGS </center></b></b>
</font>
<br><br>
<table align="center" cellspacing="05" cellpadding="05">
<tr>
<td>
<form name="somename5" method="post" action="playerodirankings.php">
<input type="text" name="passtxt1001" value="<?php echo $passtxt1000;?>"hidden>
<input type="image" src="playerodirankings.jpg" width="300" height="300" onmouseover="thi.src='playerodirankings.jpg'">
</form>
</td>
<td>
<form name="somename6" method="post" action="playertestrankings.php">
<input type="text" name="passtxt1003" value="<?php echo $passtxt1000;?>"hidden>
<input type="image" src="playertestrankings.jpg" width="300" height="300" onmouseover="thi.src='playertestrankings.jpg'">
</form>
</td>
<td>
<form name="somename7" method="post" action="playert20irankings.php">
<input type="text" name="passtxt1005" value="<?php echo $passtxt1000;?>"hidden>
<input type="image" src="playert20irankings.jpg" width="300" height="300" onmouseover="thi.src='playert20irankings.jpg'">
</form>
</td>
</tr>
</table>
</body>
<form name="f1000" method="post" action="cricistics.php">
<input type="text" name="passtxt" value="<?php echo $passtxt1000;?>"hidden>
<input type="submit" name="s1000" value="Back">
</form>
</html>