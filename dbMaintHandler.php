<?php
/* This code runs the SQL queries and outputs what happens as a result of the queries.
   It would be possible to have this code set messages in a session variable and pass this on to another page 
   (redirect with the header method) instead of printing the results here. 
   The X option demonstrates this ("silent" delete).
*/
include("dbConnect.php");
$debugOn = true;
echo "<pre>";
print_r($_REQUEST); // a useful debugging function to see everything in an array, best inside a <pre> element
echo "</pre>";

if ($_REQUEST['submit'] == "Delete Entry")
{
	$sql = "DELETE FROM artists WHERE artistId = '$_REQUEST[artistId]'";
	if ($dbh->exec($sql))
		header("Location: artist.php"); // NOTE: This must be done before ANY html is output, which is why it's right at the top!
/*	else
		// set message to be printed on appropriate (results) page
*/
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP SQLite Database Example (Artist Records) - Results Page</title>
</head>

<body>
<h1>Results</h1>
<?php
echo "<h2>Form Data</h2>";
echo "<pre>";
print_r($_REQUEST); // a useful debugging function to see everything in an array, best inside a <pre> element
echo "</pre>";
// execute the appropriate query based on which submit button (insert, delete or update) was clicked
if ($_REQUEST['submit'] == "Insert Entry")
{
	$sql = "INSERT INTO artists VALUES (NULL,
              '$_REQUEST[artistName]',
              '$_REQUEST[artistGenre]',
              '$_REQUEST[artistUrl]',
              '$_REQUEST[artistPhoto]',
              '$_REQUEST[artistText]')";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Inserted $_REQUEST[name]";
	else
		echo "Not inserted"; // in case it didn't work - e.g. if database is not writeable
}
else if ($_REQUEST['submit'] == "Delete")
{
	$sql = "DELETE FROM artists WHERE artistId = '$_REQUEST[artistId]'";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Deleted $_REQUEST[name]";
	else
		echo "Not deleted";
}
else if ($_REQUEST['submit'] == "Update")
{
	$sql = "UPDATE artists SET
              artistName = '$_REQUEST[artistName]',
              artistGenre = '$_REQUEST[artistGenre]',
              artistUrl = '$_REQUEST[artistUrl]',
              artistPhoto = '$_REQUEST[artistPhoto]',
              artistText = '$_REQUEST[artistText]'
            WHERE artistId = '$_REQUEST[artistId]'";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Updated $_REQUEST[name]";
	else
		echo "Not updated";
}
else {
	echo "This page did not come from a valid form submission.<br />\n";
}
echo "</strong></p>\n";

// Basic select and display all contents from table 

echo "<h2>Artist Records in Database Now</h2>\n";
$sql = "SELECT * FROM artist";
$result = $dbh->query($sql);
$resultCopy = $result;

if ($debugOn) {
	echo "<pre>";	
// one row at a time:
/*	$row = $result->fetch(PDO::FETCH_ASSOC);
	print_r($row);
	echo "<br />\n";
	$row = $result->fetch(PDO::FETCH_ASSOC);
	print_r($row);
*/
// all rows in one associative array
	$rows = $result->fetchall(PDO::FETCH_ASSOC);
	echo count($rows) . " records in table<br />\n";
	print_r($rows);
	echo "</pre>";
	echo "<br />\n";
}
foreach ($dbh->query($sql) as $row)
{
	print $row[name] .' - '. $row[genre] .' - '. $row[genre] .' - '. $row[fileName].' - '. "<br />\n";
}

// close the database connection 
$dbh = null;
?>
<p><a href="artist.php">Return to database test page</a></p>
</body>
</html>
