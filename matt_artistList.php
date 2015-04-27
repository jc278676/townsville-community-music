<?php
include("dbconnectartist.php")

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Featured Artists</title>

    <link href="styles/artistDisplay.css" rel="stylesheet" type="text/css">
 </head>

<body>


<h1>Featured Artists</h1>

<?php
// Display what's in the database at the moment.

$query = $dbh->prepare('SELECT * FROM artists');
$query->execute();

$rows= $query -> fetchAll();

$rowCount = 0;

shuffle($rows);
foreach ($rows as $row)
{
    if ($rowCount % 2 == 0) {
        $photoClass = "artistPhotoRight";
    } else {
        $photoClass = "artistPhotoLeft";
    }
    //
    echo "<div><h2>$row[artistName]</h2><img src='musos/$row[artistPhoto]' class='$photoClass'><p>";

    echo str_replace("\n", "</p><p>", $row[artistText]);
    echo "</p>";
    echo "</div>";
    // switch sides
    $rowCount += 1;
}
// close the database connection
$dbh = null;
?>
</table>
</body>
</html>
