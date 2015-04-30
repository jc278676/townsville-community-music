<?php
/* This code runs the SQL queries and outputs what happens as a result of the queries.
   It would be possible to have this code set messages in a session variable and pass this on to another page 
   (redirect with the header method) instead of printing the results here. 
   The X option demonstrates this ("silent" delete).
*/
include("dbConnect.php");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Artist Maintenance Action - Results</title>
<link href='styles/artistDisplay.css' rel='stylesheet' type='text/css'></head>
<body>
<h1>Artist Maintenance Action - Results</h1>
<div>
<?php
//TODO: Gracefully handle special characters in POSTed form data
if ($_REQUEST['submit'] == "Insert Entry")
{
	$sql = "INSERT INTO artists VALUES (NULL,
              '$_REQUEST[artistName]',
              '$_REQUEST[artistGenre]',
              '$_REQUEST[artistUrl]',
              '$_REQUEST[artistPhoto]',
              '$_REQUEST[artistText]');";
	if ($dbh->exec($sql))
		echo "Successfully inserted new entry - $_REQUEST[artistName]";
	else
		echo "Nothing inserted - query failed"; // in case it didn't work - e.g. if database is not writeable
}
else if ($_REQUEST['submit'] == "Delete")
{
    $sql = "DELETE FROM artists WHERE artistId = '$_REQUEST[artistId]';";
    if ($dbh->exec($sql))
        echo "Successfully deleted $_REQUEST[artistName]";
    else
        echo "Nothing deleted - query failed";
}
else if ($_REQUEST['submit'] == "View Details")
{
    header('Location: artistDisplay.php?artistId=' . $_REQUEST[artistId]);
}
else if ($_REQUEST['submit'] == "Update")
{
	$sql = "UPDATE artists SET
              artistName = '$_REQUEST[artistName]',
              artistGenre = '$_REQUEST[artistGenre]',
              artistUrl = '$_REQUEST[artistUrl]',
              artistPhoto = '$_REQUEST[artistPhoto]',
              artistText = '$_REQUEST[artistText]'
            WHERE artistId = '$_REQUEST[artistId]';";
	if ($dbh->exec($sql))
		echo "Successfully updated $_REQUEST[artistName]";
	else
		echo "Nothing updated - query failed";
}
else {
	echo "Sorry, but " . $_REQUEST['submit'] . " is not a known request type.<br />\n";
}

// close the database connection 
$dbh = null;
?>

<p><a href='#' onclick='history.go(-1)'>Return to Artist Maintenance page</a> </p>
</div>
</body>
</html>
