<!--
#
# This php include file dynamically builds the sitewide header, 
# ensuring (with the assistance of the page that includes it) that 
# the part of the site that the current page represents is indicated
# and that there is never a link to the current page.
#
-->
<!--
<div class="member">
    <ul><p>Email:
  <input name="logOnEmail" type="text" size="30" maxlength="20">
</p>
<p>Password:
  <input name="logOnPassword" type="password" size="30" maxlength="20">
  <form id="form1" name="form1" method="post" action="">
        <input type="submit" name="button" id="button" value="Log in" />
         <input type="submit" name="button1" id="button1" value="Log out" />
  </form></p>
</li>
    </ul>
</div class="member">
-->
<div class="member">
    <ul><li>Email: <input name="logOnEmail" type="text" size="30" maxlength="20"></li>

        <li>Password:<input name="logOnPassword" type="password" size="30" maxlength="20"></li>
        <form id="form1" name="form1" method="post" action="">
            <input type="submit" name="button" id="button" value="Log in" />
            <input type="submit" name="button1" id="button1" value="Log out" />
        </form>
        </li>
    </ul>
</div>
<ul>
    <li><a href="index.php"><img src="logo.png" width="141" height="100" alt="Home"/></a></li>
    <?php

        $headerSections = array (
            "index" => "Home",
            "events" => "Events",
            "bulletinBoard" => "Bulletin Board",
            "musicians" => "Musicians",
            "membership" => "Membership",
            "about" => "About Us",
            "sponsors" => "Sponsors"
         );

        // The including php page sets the value of $sectionName to one of the headerSection
        // values if it is the target of a header link or leaves it null if not.
        foreach ($headerSections as $headerPageName => $headerTitle) {
            // This prevents the header from linking to the page of which it is a part
            // while generating links to all other pages
            if ($headerPageName != $sectionName ) {
                if (headerPageName == "index") {
                    echo "<li><a href='/'>Home</a></li>";
                } else {
                    echo "<li><a href='$headerPageName.php'>$headerTitle</a></li>";
                }
            } else {
                echo "<li class='currentHeaderSection'>$headerTitle</li>";
            }
        }
    ?>
</ul>

<?php
//echo "<div class='center'>";
//    include("callToAction.php");
//echo "</div class='center'>";
?>


