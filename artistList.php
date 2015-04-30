<?php
include("dbConnect.php")

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Featured Artists</title>

    <link href='styles/artistDisplay.css' rel='stylesheet' type='text/css'>
 </head>

<body>


<h1>Featured Artists</h1>
<?php
// Grab our list of artists from the database
// $query returns an array of associative arrays
$query = $dbh->prepare('SELECT * FROM artists');
$query->execute();
$rows= $query -> fetchAll();

// Random ordering is fine for now
shuffle($rows);

foreach ($rows as $row)
{
    echo "<div>";

    // Level 2 heading is the artist's name
    echo "<h2>$row[artistName]</h2>";

    // Artist's photo is a link to the artist display page
    echo "<a href='artistDisplay.php?artistId=$row[artistId]'><img src='musos/thumb$row[artistPhoto]' class='artistPhotoRight'></a>";
    echo "Genre: $row[artistGenre]<br>";
    echo "<br>";
    // echo "$row[artistShortText]<br>";  // when it is finally defined
    echo "Brief (1 or 2 lines) description of this artist from the database <br>(currently does not exist in db) <br>";
    echo "<br>";
    // A link to the singlae artist display page
    echo "<a href='artistDisplay.php?artistId=$row[artistId]'>More about $row[artistName]</a>";
    echo "</div>";
}
// close the database connection
$dbh = null;
?>
</body>
</html>
