<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="tmcStyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<p>Email:	
  <input name="logOnEmail" type="text" size="30" maxlength="20">
</p>
<p>Password:
  <input name="logOnPassword" type="password" size="30" maxlength="20">
</p>
      <?php
	  //Wrong password message
      if (isset($_SESSION['msg'])) {
	echo "<p style='color:red'>".$_SESSION['msg']."</p>"; 
	//remove the message since it has been displayed.
	unset($_SESSION['msg']);
	}
	?>
    
   	<?php
	//logout button
    if (isset($_SESSION['msgG'])) {
		echo"<form>";
		echo "<p style='color:green'>".$_SESSION['msgG']."</p>"; 
		echo '<input type="button" name="logout" id="logout" value="Logout" onClick="location.href=\'../Scripts/Logout.php\'"/>'; 
		echo"</form>";
	}
	
?> 
  
<div id="colourHeader"> </div>
<div id="siteCenter">
  <div class="header">
    <div class="member">
      <ul>
        <li><img src="buttonUp.gif" width="80" height="17" alt=""/></li>
        <li><img src="buttonUp.gif" width="80" height="17" alt=""/></li>
      </ul>
    </div>
    <ul>
      <a href="home.html"><img src="logo.png" width="141" height="100" alt="Home"/></a>
      <li><a href="home.php">Home</a></li>
      <li class="currentHeaderSection">Events</li>
      <li><a href="bulletinBoardPage.php">Bulletin Board</a></li>
      <li><a href="artistPage.php">Musicians</a></li>
      <li><a href="membershipPage.php">Membership</a></li>
      <li><a href="aboutUs.html">About</a></li>
      <li><a href="artistPage.php">Feeder</a></li>
    </ul>
    <div class="center">
      <p> <a href="artistPage.html">Free listing for Music Centre members!<br>
        Publicise yourself, your band or organisation here!</a> </p>
    </div>
  </div>
  <div id="content">
    <h2>Events</h2>
    <p class="eventBorder">
    <div class="event"> This maybe one information, but this is not information. It may look good or help you, but it is not information. This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information. </div>
    </p>
    <p class="eventBorder">
    <div class="event"> This maybe one information, but this is not information. It may look good or help you, but it is not information. This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information. </div>
    </p>
    <p class="eventBorder">
    <div class="event"> This maybe one information, but this is not information. It may look good or help you, but it is not information. This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information. </div>
    </p>
    <p class="eventBorder">
    <div class="event"> This maybe one information, but this is not information. It may look good or help you, but it is not information. This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information.This maybe one information, but this is not information. It may look good or help you, but it is not information. </div>
    </p>
  </div>
</div>
<div id="footer">
  <div class="footerContent">
    <div class="sponsorImg"> <img src="TCCgcbfQN100px.png" width="500" height="100" alt="sponsors"/> </div>
  </div>
</div>
</body>
</html>
