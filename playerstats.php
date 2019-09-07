<html>
<head>
<title>Player Stats</title>
</head>
<body bgcolor="FF7F50" text="">
<?php
$a=$_POST['passtxt9'];
?>
<center>
<font size="06">
PLAYER STATISTICS
</center>
</font>
<hr>
<br><br>
<form name="back1" method="post" action="cricistics.php">
<input type="text" name="passtxt" value="<?php echo $a; ?>"hidden>
<input type="submit" name="b1" value="Back">
</form>
<br><br>
<table align="left">
<tr>
<td>
<form name="india" method="post" action="India.php">
<input type="text" name="passtxt13" value="<?php echo $a;?>"hidden>
<input type="image" src="India.jpg" width="500" height="500" onmouseover="thi.src='India.jpg'";>
</form>
</td>
</tr>
</table>
<table align="right">
<tr>
<td>
<form name="pakistan" method="post" action="Pakistan.php">
<input type="text" name="passtxt14" value="<?php echo $a;?>"hidden>
<input type="image" src="Pakistan.jpg" width="500" height="500" onmouseover="thi.src='Pakistan.jpg'";>
</form>
</td>
</tr>
</table>
</body>
</html>