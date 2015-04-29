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
<title>PHP SQLite Database Example (Artist Records)</title>
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
<h1>Artist Database</h1>
<form id="insert" name="insert" method="post" action="dbprocessartist.php">
<fieldset class="subtleSet">
    <h2>Insert new artist:</h2>
    <p>
      <label for="artistName">Name: </label>
      <input type="VARCHAR(40)" name="artistName" id="artistName">
    </p>
    <p>
      <label for="artistGenre">Genre: </label>
      <input type="VARCHAR(60)" name="artistGenre" id="artistGenre">
    </p>
      <p>
      <label for="artistUrl">Artist URL: </label>
      <input type="VARCHAR(80)" name="artistUrl" id="artistUrl">
    </p>
       <p>
      <label for="artistPhoto"> Photo: </label>
      <input type="VARCHAR(40)" name="artistPhoto" id="artistPhoto">
    </p>
     <p>
      <label for="artistText"> Artist text: </label>
      <input type="VARCHAR(4096)" name="artistText" id="artistText">
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
<form id="deleteForm" name="deleteForm" method="post" action="dbprocessartist.php">
<p>
<?php
	echo "<input type='VARCHAR(40)' name='artistName' value='$row[artistName]' /> <input type='VARCHAR(60)' name='artistGenre' value='$row[artistGenre]' /> <input type='VARCHAR(80)' name='artistUrl' value='$row[artistUrl]' /> <input type='VARCHAR(40)' name='artistPhoto' value='$row[artistPhoto]' /> <input type='VARCHAR(4096)' name='artistText' value='$row[artistText]' /> <input type='hidden' name='artistId' value='$row[artistId]' />";
?>

<input type="submit" name="submit" value="View Details" />
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
