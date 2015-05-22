<?php
include_once("dbConnect.php");
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Featured Artist</title>
<link href="styles/tcmcStyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="colourHeader"> </div id="colourHeader">
<div id="siteCenter">
  <div class="header">
    <?php
        // Must specify which section we represent before including siteNavigationBanner.php
        $sectionName="musicians";
        include_once("siteNavigationBanner.php");
        ?>
  </div class="header">
  <div id="contentLeft"> 
    
    <!--
         Probably should not come before the featured artist on the featured artist page
         Perhaps should not be on the featured artist page at all.
         Unless it is the featured artist's upcoming shows.

        <div class="upcomingShows">
            <h2>UPCOMING SHOWS</h2>
            <?php
            # Code to retrieve list of upcoming shows from database
            ?>
        </div>
        -->
    
    <div class="artist">
      <h2>FEATURED ARTIST</h2>
      <div class="featureArtist">
        <?php
                if (is_null($_GET["artistId"])) {
                    $featuredArtistId = 4;  // just for now, but eventually get a random one from the db
                                            // and maybe this is where we apply some "gamification"
                    //$query = $dbh->prepare("SELECT artistId FROM artists");
                    //$query->execute();
                    //$rows= $query -> fetchAll();
                    //shuffle($rows);
                    //$keys = array_keys($rows);
                    //$featuredArtistId = $rows[$keys[1]];
                } else {
                    $featuredArtistId = $_GET["artistId"];
                }
                // TODO: this only ever returns 1 item, so get rid of the for loop
                $query = $dbh->prepare("SELECT * FROM artists WHERE artistId = $featuredArtistId");
                $query->execute();
                $rows= $query -> fetchAll();

                foreach ($rows as $row)
                {
                    // echo "<div>";
                    // Heading is the Artist's name
                    echo "<h2>$row[artistName]</h2>";

                    // The photo is a right-floated image
                    echo "<img src='musos/$row[artistPhoto]' class='artistPhotoRight'>";

                    echo "<p>";
                    // Turns paragraphs of raw ASCII text into paragraphs of HTML
                    echo str_replace("\n", "</p><p>", $row[artistText]) . "</p>";

                    // Always give the user a way back
                    // /echo "<p><a href='#' onclick='history.go(-1)'>Go Back</a> </p>";

                    // echo "</div>";
                }
                ?>
      </div class="featureArtist">
    </div class="artist">
  </div id="contentLeft">
  <div id="contentRight">
    <h2>MORE ARTISTS</h2>
    <div id="artistList">
      <?php
            // Grab our list of artists from the database
            // $query returns an array of associative arrays
            $query = $dbh->prepare('SELECT * FROM artists');
            $query->execute();
            $rows= $query -> fetchAll();

            // Random ordering is fine for now
            shuffle($rows);

            echo "<ul id='artistList'>";
            foreach ($rows as $row)
            {
                if ($row[artistId] != $featuredArtistId) {
                    // Level 3 heading is the artist's name
                    echo "<li><a href='musicians.php?artistId=$row[artistId]'>$row[artistName]</a><br>";

                    // Artist's photo is a link to the artist display page
                    echo "<a href='musicians.php?artistId=$row[artistId]'><img src='musos/thumb$row[artistPhoto]' class='artistPhotoRight'></a><br>";

                    //
                    echo "$row[artistShortText]</li>";

                }
            }
            echo "</ul>";
            ?>
    </div id="artistList">
  </div id="contentRight">
</div id="siteCenter">

<?php
include("siteFooter.php");
?>
</body>
</html>
