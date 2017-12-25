<?php
session_start();
include "connect.php";
echo 'WELCOME '.$_SESSION['email'];
$email = $_SESSION['email'];
$result=mysqli_query($con,"Select * from channel where email='".$email."'");
//$row = mysql_fetch_assoc($ses_sql);
?>

<link rel="stylesheet" href="style.css">
<body background="http://wallpapers4ipad.com/ipad-3-wallpapers/abstract-wallpapers/blue-color/blue-color.png">
    <head>
        <title>Channel</title>
    </head>
	
<div style="background-color:darkblue;color:white;padding:20px;">
<div class="topnav" id="myTopnav" >
  <a style="color:white;" class="active" href="http://localhost/calculate/test4.php">Home</a>
  <a style="color:white;" href="#news">News</a>
  <a style="color:white;" href="#contact">Contact</a>
  <a style="color:white;" href="http://localhost/session/logout.php">Log Out</a>
  </div>
</div>
<h1>My Channels</h1>

<form action="http://localhost/createchannel/createchannel.php">
    <input type="submit" value="New Channel" />
</form></br>

<body>
<table width="800" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>Channel Name</th>
<th>Date Create</th>
<th>View</th>
</tr>
<?php

while($channel=mysqli_fetch_assoc($result)){
	echo "<tr>";	
	echo "<td >".$channel['ChannelName']."</td>";
	echo "<td>".$channel['DateCreated']."</td>";
	echo "<td>".'<input type="button"  value="View" onclick="window.location=\'http://localhost/session/detailview.php\'"/>'."</td>";
	echo "</tr>";
}

//mysql_close($connection); // Closing Connection

?>

</table>
</body>
</html>