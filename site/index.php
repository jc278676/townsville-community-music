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
        $sectionName="index";
        include_once("siteNavigationBanner.php");
    echo "</div class='header'>";
    ?>

    <div id="content">
        <div class="event">
            <div class="information">
                <h1>New To Townsville? Love Music? THEN BECOME A MEMBER!</h1>
                <a class="signUp" href="membership.html">SIGN UP</a><br><br>
                You looking for some assistance on getting concerts with your band, then fill out the application form and allow us to assist you in your endeavours. Plus ou can get discounts up to 50%, if you are a member of the Townsville Community Music Centre. JUST CLICK THE SIGNUP BUTTON!
            </div>
            <p class="borderLine">
            <div class="information">
                <h1>We Are also on Facebook</h1>
                We can also be found on facebook. <a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534"><img src="FBimages.gif" width="147" height="98" alt="Facebook"</a>
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
