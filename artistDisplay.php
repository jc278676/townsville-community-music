<?php
include("dbConnect.php")

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Artist Details</title>

    <link href="styles/artistDisplay.css" rel="stylesheet" type="text/css">
 </head>

<body>


<h1>Artist Details</h1>

<?php
// Display what's in the database at the moment.

$query = $dbh->prepare("SELECT * FROM artists WHERE artistId = $_GET[artistId]");
$query->execute();
$rows= $query -> fetchAll();

foreach ($rows as $row)
{
    echo "<div><h2>$row[artistName]</h2><img src='musos/$row[artistPhoto]' class='artistPhotoRight'><p>";
    echo str_replace("\n", "</p><p>", $row[artistText]);
    echo "</p>";
    echo "</div>";
}

// close the database connection
$dbh = null;
?>
</body>
</html>
