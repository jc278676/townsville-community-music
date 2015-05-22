<!--
Every web page has the following structure:

    Head
        headSectionContent (mostly metadata)
    Body
        siteHeader
            siteBanner (horizontal navigation bar)
            callToAction (may change with each page it is on)

        mainContent
            primaryContent  (~60% width)
            secondaryContent (~30% width)

        footer content (legals, disclaimer, etc.)
-->
<!doctype html>
<html>
<head>
    <?php
    // the dbConnection include is a special case - it creates no output
    // but sets up
    include_once("dbConnect.php");
    //
    //
    // Some of our output-creating includes require certain variables to be set prior to calling
    // (This is a stylistic requirement, not a technical one - defaults are used if )
    // headSectionContent.php will set a default value of "Untitled Page"
    $pageTitle="Townsville Community Music Centre: Home";
    include("headSectionContent.php");
    ?>
</head>

<body>

<div id="colourHeader">
</div id="colourHeader">

<div id="siteCenter">

    <?php
    // includes which fill div elements should have the div open and close tags
    // set in the calling file.
    echo "<div class='header'>";
        // Must specify which section we represent before including siteNavigationBanner.php
        $sectionName="index";
        include_once("siteNavigationBanner.php");
    echo "</div class='header'>";
    ?>

    <div id="content">
        <p class="borderLine">
        <div class="event">
            <div class="upcomingShows">
                <h3>Upcoming Shows</h3>
                <div class="artistShow"><img src="AvivaTheatre200.gif" width="200" height="200" alt=""/><br><br> TICKETS</div>
                <div class="artistShow"><img src="AvivaTheatre200.gif" width="200" height="200" alt=""/><br><br> TICKETS</div>
                <div class="artistShow"><img src="AvivaTheatre200.gif" width="200" height="200" alt=""/><br><br> TICKETS</div>


                <br>
            </div>
            <p class="borderLine">
            <div class="information">
                <h3>Are You New To Townsville? And Love Music</h3>
                You looking for some assistance on getting concerts with your band, then fill out the application form and allow us to assist you in your endeavours.

            </div>
        </p>
    </div>
    </p>
</div>

</div id="siteCenter">

<div id="footer">
<?php
// Page footer is a good place to close the db connection
// No need to access the database after footer content is printed
include("siteFooter.php");
$dbh = null;
?>
</div id="footer">

</body>
</html>
