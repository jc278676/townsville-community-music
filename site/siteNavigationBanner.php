<!--
#
# This php include file dynamically builds the sitewide header, 
# ensuring (with the assistance of the page that includes it) that 
# the part of the site that the current page represents is indicated
# and that there is never a link to the current page.
#
-->
<div class="member">
    <ul>
        <li><img src="buttonUp.gif" width="80" height="17" alt=""/></li>
        <li><img src="buttonUp.gif" width="80" height="17" alt=""/></li>
    </ul>
</div class="member">
<ul>
    <li><a href="artistPage.html"><img src="logo.png" width="141" height="100" alt="Home"/></a></li>
    <?php

        $headerSections = array (
            "index" => "Home",
            "events" => "Events",
            "bulletinBoard" => "Bulletin Board",
            "musicians" => "Musicians",
            "membership" => "Membership",
            "about" => "About Us"
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
echo "<div class='center'>";
    include("callToAction.php");
echo "</div class='center'>";
?>


