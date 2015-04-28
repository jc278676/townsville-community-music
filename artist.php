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
      <label for="name">Name: </label>
      <input type="text" name="name" id="name">
    </p>
    <p>
      <label for="genre">Genre: </label>
      <input type="text" name="genre" id="genre">
    </p>
      <p>
      <label for="fileName">File Name: </label>
      <input type="text" name="fileName" id="fileName">
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
	echo "<input type='text' name='name' value='$row[name]' /> <input type='text' name='genre' value='$row[genre]' /> <input type='hidden' name='id' value='$row[id]' />";
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
