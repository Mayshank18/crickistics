<html>
<head>
<title> Cricistics </title>
<style>
.button {
    background-color: #DC143C;
    border: 2px solid #E9967A;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 8px;
     -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
}
.button1 {
position: relative;
    background-color: #000000;
    border: none;
    font-size: 16px;
    color: #7FFFD4;
    padding: 05px 20px;
    width: 100px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}

.button1:after {
    content: "";
    background: #90EE90;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px!important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.button1:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}
.button:hover {
    background-color: blue; 
    color: yellow;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.dropbtn {
    background-color: #8B008B;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
</head>
<body bgcolor="DAA520" text="black">
<p align="center" style="font-family:algerian;">
<b>
<font size="06" color="red">
CRICISTICS
</font>
</b>
</p>
<br>
<div class="dropdown">
  <button class="dropbtn">ICC EVENTS</button>
  <div class="dropdown-content">
    <a target="_blank" href="odiworldcup.html">ICC WORLD CUP</a>
    <a target="_blank" href="t20worldcup.html">ICC T2O WORLD CUP</a>
    <a target="_blank" href="championstrophy.html">CHAMPIONS TROPHY</a>
  </div>
</div>
<?php
$c=$_POST['passtxt'];
?>
<table align="right" cellsapcing="0" cell padding="0">
<tr>
<td>
<form name="passtxt3" method="post" action="editprofile1.php">
<input type="text" name="passtxt2" value="<?php echo $c;?>"hidden>
<input class="button" type="submit" name="editpro" value="Edit Profile">
</form>
</td>
<td>
<form name="passtxt5" method="post" action="profile.php">
<input type="text" name="passtxt4" value="<?php echo $c;?>"hidden>
<input class="button" type="submit" name="pro" value="Profile">
</form>
</td>
<td>
<form name="signout2" action="login.html">
<input class="button" type="submit" name="signout3" value="Sign out">
</form>
</td>
<td>
<form name="viewpic" method="post" action="viewpic.php">
<input type="text" name="passtxt40" value="<?php echo $c;?>"hidden>
<input class="button" type="submit" name="viewsub" value="View profile picture">
</form>
</td>
</tr>
</table>
<br><br><br>
<table align="right" cellspacing="0" cellpadding="0">
<tr>
<td>
<form name="search" method="post" action="result.php">
<input type="text" name="searchbox" value="">
<input type="text" name="passtxt8" value="<?php echo $c;?>"hidden>
<input class="button1" type="submit" name="serachbutton" value="Search">
</form>
</td>
</tr>
</table>
<font size="04">
Welcome <?php echo $c;?><br>
A site for the CRICKET fans!!!<br><br>
</font>
<table cellspacing="10" cellpadding="10">
<tr>
<td>
<form name="playerstats" method="post" action="playerstats.php">
<input type="text" name="passtxt9" value="<?php echo $c;?>"hidden>
<input type="image" src="playerstats.png" width="200" height="100" onmouseover="thi.src='playerstats.png'">
</form>
</td>
<td>  </td>
<td>
<form name="scoreboards" method="post" action="scoreboards.php">
<input type="image" src="Scoreboards.jpg" width="200" height="100" onmouseover="thi.src='scoreboards.jpg'">
<input type="text" name="passtxt10" value="<?php echo $c;?>"hidden>
</form>
</td>
</tr>
<tr>
<td>  </td>
<td>
<form name="passtxt7" method="post" action="specialmoments.php">
<input type="text" name="passtxt6" value="<?php echo $c;?>"hidden>
<input type="image" src="Special Moments.png" width="200" height="100" onmouseover="thi.src='Special Moments.png'">
</form>
</td>
<td>  </td>
</tr>
<tr>
<td>
<form name="playerrankings" method="post" action="iccplayerrankings.php">
<input type="image" src="Player Rankings.png" width="200" height="100" onmouseover="thi.src='Player Rankings.png'">
<input type="text" name="passtxt11" value="<?php echo $c;?>"hidden>
</form>
</td>
<td>  </td>
<td>
<form name="teamrankings" method="post" action="iccteamrankings.php">
<input type="image" src="Team Rankings.png" width="200" height="100" onmouseover="thi.src='Team Rankings.png'">
<input type="text" name="passtxt12" value="<?php echo $c;?>"hidden>
</form>
</td>
</tr>
</table>
</body>
</html>