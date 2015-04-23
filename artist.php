<?php
include("dbconnectartist.php")
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
      <label for="phone">Phone: </label>
      <input type="text" name="phone" id="phone">
    </p>
      <p>
      <label for="basicdescription">Basic Description: </label>
      <input type="text" name="basicdescription" id="basicdescription">
    </p>
      <p>
      <label for="fulldescription">Full Description: </label>
      <input type="text" name="fulldescription" id="fulldescription">
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
$sql = "SELECT * FROM artist";
foreach ($dbh->query($sql) as $row)
{
?>
<form id="deleteForm" name="deleteForm" method="post" action="dbprocessartist.php">
<?php
	echo "<input type='text' name='name' value='$row[name]' /> <input type='text' name='phone' value='$row[phone]' /><input type='text' name='basicDescription' value='$row[basicDescription]' /><input type='text' name='fullDescription' value='$row[fullDescription]' />\n";
	
	echo "<input type='hidden' name='id' value='$row[id]' />";
?>
<input type="submit" name="submit" value="Update Entry" />
<input type="submit" name="submit" value="Delete Entry" class="deleteButton">
</form>
<?php
}
echo "</fieldset>\n";
// close the database connection
$dbh = null;
?>
</body>
</html>