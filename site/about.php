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
        $sectionName="home";
        include_once("siteNavigationBanner.php");
    echo "</div class='header'>";
    ?>

    <div id="content">
        <h2>About</h2>
        <p class="borderLine">
        <div class="event">
            <div class="information">
                <img src="CivicFront300.jpg" width="300" height="170" alt="Civic Centre">
                <strong>Contact Details:-</strong> <br>
                <br>
                <strong>Phone</strong> &nbsp;&nbsp;&nbsp;&nbsp;07 4724 2086<br>
                <strong>Mobile</strong> &nbsp;&nbsp;&nbsp;402 255 182<br>
                <strong>Email</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;admin@townsvillemusic.org.au<br>
                <br>
                <strong>Postal Address</strong> &nbsp;&nbsp;&nbsp; PO Box 1006, Townsville, QLD 4810<br>
                <strong>Address</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Townsville Civic Theatre, 41 Boundary Street, Townsville, QLD 4810<br>
                <strong>Office Hours</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9.30 -2.30 Monday - Wednesday
            </div>
        </p>
        <p class="borderLine">
        <div class="information">
            <h3>About Us</h3>
            Townsville Community Music Centre is a not-for-profit, incorporated organisation serving musicians and their audience in North Queensland. The Music Centre's role includes facilitation, presentation and promotion of events, functions, education, workshops, concerts, festivals in Townsville, and surrounding centres.<br>
            <br>
            Based in Townsville, North Qld, the Music Centre presents concerts and workshops throughout the year, in a diverse range of genres including classical, jazz, folk, blues, world and contemporary music, featuring touring artists and locally-based professional and emerging artists. It is involved in the instigation of projects based on cross collaboration with other artistic disciplines, and it promotes the work of North Queensland musicians outside the region, organising tours and promoting their work.
        </div>
        </p>
        <p class="borderLine">
        <div class="information">
            <h3>Looking Back - Historic Collections </h3>
            Townsville Community Music Centre has been constantly changing over the years to keep up to date with the musical tastes and needs of the Townsville community. As part of the relocation of the Music Centre to the Civic Theatre, Bronia Renison and Jean Dartnall, both librarians, have assessed the old collection of sheet music, books and recorded music which the centre has been storing, unused, for many years. Sometimes older things have to be discarded to make way for the new, but the Music Centre is aware that older material may still have value.<br>
            The National Library of Australia has an online catalogue (TROVE) that lists not only its own holdings but also information about items held by many other libraries around Australia. Using this catalogue Bronia and Jean have identified at least 150 items of music that are not held by any of the country's major libraries. These items have been donated to the National Library to include in their collection and thus made available to all historians and musicians.<br>
            <br>
            Also discovered in the old collection were some pieces relevant to North Queensland. Local musicians performed these at a musical social afternoon on Sunday April 21st in C2 at the Civic Theatre. The remaining sheet music, books and CDs were put on display and distributed free of charge to the local music community.
        </div>
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
