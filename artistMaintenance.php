<?php
include("dbConnect.php")
/* Fairly simple example - there's a form for inserting a new phone record and a set of forms, one for each record,
	that allows for deleting and updating each record. In these ones, the id of the record is passed using a hidden form field. 
*/
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Artist List Maintenance</title>

    <link href="styles/artistDisplay.css" rel="stylesheet" type="text/css">
<style type="text/css">
.subtleSet {
	border-radius:25px;
	width: 30em;
}
.deleteButton {
	color: red;
}
</style>
</head>

<body>
<h1>Artist Database Maintenance</h1>
<form id="insert" name="insert" method="post" action="dbMaintHandler.php">
<fieldset class="subtleSet">
    <h2>Insert new artist:</h2>
    <p>
      <label for="artistName">Name: </label>
      <input type="text" name="artistName" id="artistName">
    </p>
    <p>
      <label for="artistGenre">Genre: </label>
      <input type="text" name="artistGenre" id="artistGenre">
    </p>
    <p>
        <label for="artistUrl">Website: </label>
        <input type="text" name="artistUrl" id="artistUrl">
    </p>
    <p>
        <label for="artistPhoto">File Name: </label>
        <input type="text" name="artistPhoto" id="artistPhoto">
    </p>
    <p>
        <label for="artistText">Artist Description:</label>
        <textarea name="artistText" id="artistText" form="insert" rows="12" cols="80">Write a blurb about this artist (up to 4Kb).
        </textarea>
    </p>
    <p>
      <input type="submit" name="submit" id="submit" value="Insert Entry">
    </p>
</fieldset>
</form>

<fieldset class="subtleSet">
<h2>Current data:</h2>
<?php
// Display what's in the database at the moment.
$sql = "SELECT * FROM artists";
foreach ($dbh->query($sql) as $row)
{
?>
<form id="deleteForm" name="deleteForm" method="post" action="dbMaintHandler.php">
<p>
<?php
	echo "<input type='text' name='name' value='$row[name]' /> <input type='text' name='genre' value='$row[genre]' /> <input type='hidden' name='id' value='$row[id]' />";
?>

<br><input type="submit" name="submit" value="View Details" />
<input type="submit" name="submit" value="Update" />
<input type="submit" name="submit" value="Delete" class="deleteButton">
</p>
</form>
<?php
}
echo "</fieldset>\n";
// close the database connection
$dbh = null;
?>
</body>
</html>
