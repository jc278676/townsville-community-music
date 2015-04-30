<?php
include("dbConnect.php")

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Artist Details</title>

    <link href='styles/artistDisplay.css' rel='stylesheet' type='text/css'>
 </head>

<body>


<h1>Artist Details</h1>

<?php

// TODO: this only ever returns 1 item, so get rid of the for loop
$query = $dbh->prepare("SELECT * FROM artists WHERE artistId = $_GET[artistId]");
$query->execute();
$rows= $query -> fetchAll();

foreach ($rows as $row)
{
    echo "<div>";
    // Heading is the Artist's name
    echo "<h2>$row[artistName]</h2>";

    // The photo is a right-floated image
    echo "<img src='musos/$row[artistPhoto]' class='artistPhotoRight'>";

    echo "<p>";
    // Turns paragraphs of raw ASCII text into paragraphs of HTML
    echo str_replace("\n", "</p><p>", $row[artistText]) . "</p>";

    // Always give the user a way back
    echo "<p><a href='#' onclick='history.go(-1)'>Go Back</a> </p>";

    echo "</div>";
}

// close the database connection
$dbh = null;
?>
</body>
</html>
