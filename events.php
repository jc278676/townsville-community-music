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
        $sectionName="events";
        include_once("siteNavigationBanner.php");
    echo "</div class='header'>";
    ?>

    <div id="contentLeft">
        <div class="artist">
            <?php
            if (is_null($_GET["eventId"])) {
                echo "<h2>UPCOMING EVENTS</h2>";
            } else {
                echo "<h2>FEATURED EVENT</h2>";
            }
            ?>
            <div class="featureArtist">
            <?php
            if (is_null($_GET["eventId"])) {
                // No event selected? - just show the next two
                $query = $dbh->prepare("
                SELECT * FROM events
                  WHERE eventDateTime > strftime('%Y-%m-%d %H:%M', 'now', 'localtime')
                  ORDER BY eventDateTime ASC
                  LIMIT 2
                  ");
            } else {
                $selectedEventId = $_GET["eventId"];
                $query = $dbh->prepare("
                SELECT * FROM events
                  WHERE eventId = $selectedEventId
                  ");

            }

            $query->execute();
            $rows= $query -> fetchAll();
            foreach ($rows as $row)
            {
                echo "<div>";
                // Heading is the Event title
                echo "<h3>$row[eventTitle]</h3>";
                // The photo is a left-floated image
                echo "<img src='images/$row[eventPromoPhoto]' class='eventPhotoLeft'>";
                echo "<p>";
                echo "Date: $row[eventDateTime]<br>";
                echo "Venue: $row[eventVenue]<br>";

                echo "<p>";
                // Turns paragraphs of raw ASCII text into paragraphs of HTML
                echo str_replace("\n", "</p><p>", $row[eventText]) . "</p>";
                echo "</div>";
            }
            ?>
        </div class="featureArtist">
    </div class="artist">
    </div id="contentLeft">
 
    <div id="contentRight">
        <?php
        if (is_null($_GET["eventId"])) {
            echo "<h2>LATER EVENTS</h2>";
        } else {
            echo "<h2>OTHER EVENTS</h2>";
        }
        ?>
        <div id="artistList">
            <?php
            if (is_null($_GET["eventId"])) {
                // A simple page load shows the first n events in the
                // left content div and continues in the right div
                $query = $dbh->prepare("
                SELECT * FROM events
                  WHERE eventDateTime > strftime('%Y-%m-%d %H:%M', 'now', 'localtime')
                  ORDER BY eventDateTime ASC
                  LIMIT 2, 5000
                  ");

            } else {
                // A specific event selection shows only the chosen event
                // in the left content, end every other event in the right
                $query = $dbh->prepare("
                SELECT * FROM events
                  WHERE eventDateTime > strftime('%Y-%m-%d %H:%M', 'now', 'localtime')
                  ORDER BY eventDateTime ASC
                  ");

            }
            $query->execute();
            $rows= $query -> fetchAll();

            echo "<ul id='artistList'>";
            foreach ($rows as $row) {
                if ($row[eventId] != $selectedEventId) {
                    //
                    echo "<li><a href='events.php?eventId=$row[eventId]'>$row[eventTitle]<br>";
                    echo "<img src='images/thumb$row[eventPromoPhoto]' class='artistPhotoRight'></a><br>";
                    echo "Date: $row[eventDateTime]<br>";
                    echo "Venue: $row[eventVenue]<br>";

                    //
                    echo "$row[eventShortText]</li>";
                } // no else for this if
            }
            echo "</ul>";
            ?>
        </div id="artistList">
    </div id="contentRight">

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
