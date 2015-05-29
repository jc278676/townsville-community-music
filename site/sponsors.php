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
    <meta name="description" content="Townsville Community Music Centre is a not-for-profit, incorporated organisation serving musicians and their audience in North Queensland. The Music Centre's role includes facilitation, presentation and promotion of events, functions, education, workshops, concerts, festivals in Townsville, and surrounding centres.

Based in Townsville, North Qld, the Music Centre presents concerts and workshops throughout the year, in a diverse range of genres including classical, jazz, folk, blues, world and contemporary music, featuring touring artists and locally-based professional and emerging artists. It is involved in the instigation of projects based on cross collaboration with other artistic disciplines, and it promotes the work of North Queensland musicians outside the region, organising tours and promoting their work.">

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
        $sectionName="sponsors";
        include_once("siteNavigationBanner.php");
    echo "</div class='header'>";
    ?>

    <div id="content">
            <h2>Sponsors</h2>
            <div class="event">

                <div class="information">
                    <p><img src="TCCcolour150193.gif" width="150" height="193" alt="Civic Centre"></p>
                    <h3>Townsville City Council</h3>
                    The Council's Partnerships and Sponsorships scheme provides vital core funding which enables us to maintain the administrative base for all our other activities, and also provides the premises which house our office space.
                    The Council also assists with the performance venues for our concerts and workshops.

                </div>
                <p class="borderLine">
                <div class="information">
                    <img src="QG.gif" width="150" height="188" alt="QLD Government"/> <h3>About Us</h3>
                    <h3>Queensland Government</h3>
                    The Gambling Community Benefit Fund has assisted us to obtain office equipment and sound and lighting equipment for our productions.
                </div>
                </p>
            </div>


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
