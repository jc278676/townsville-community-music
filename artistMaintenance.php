<?php
include("dbConnect.php")
/* Fairly simple example - there's a form for inserting a new phone record and a set of forms, one for each record,
	that allows for deleting and updating each record. In these ones, the id of the record is passed using a hidden form field. 
*/
?>
<!doctype html>
<html>
<head>
<meta charset='UTF-8'>
<title>Artist List Maintenance</title>
<link href='styles/artistDisplay.css' rel='stylesheet' type='text/css'>
</head>

<body>
<h1>Artist Database Maintenance</h1>
<form id='insert' name='insert' method='post' action='dbMaintHandler.php'>
  <fieldset class='subtleSet'>
    <h2>Insert new artist:</h2>
    <p>
      <label for='artistName'>Name: </label>
      <input type='text' name='artistName' id='artistName'>
    </p>
    <p>
      <label for='artistGenre'>Genre: </label>
      <input type='text' name='artistGenre' id='artistGenre'>
    </p>
    <p>
      <label for='artistUrl'>Website: </label>
      <input type='text' name='artistUrl' id='artistUrl'>
    </p>
    <p> 
      <!-- TODO: weave in photo upload capability -->
      <label for='artistPhoto'>File Name: </label>
      <input type='text' name='artistPhoto' id='artistPhoto'>
    </p>
    <p>
      <label for='artistText'>Artist Description:</label>
      <textarea name='artistText' id='artistText' form='insert' rows='12' cols='80'>Write a blurb about this artist (up to 4Kb).</textarea>
    </p>
    <p>
      <input type='submit' name='submit' id='submit' value='Insert Entry'>
    </p>
  </fieldset>
</form>
<fieldset class='subtleSet'>
<h2>Current data:</h2>
<?php

$sql = "SELECT * FROM artists";
foreach ($dbh->query($sql) as $row)
{
?>
<?php
    $formName = "maintForm" . $row[artistId];
    echo "<form id=$formName name=$formName method='post' action='dbMaintHandler.php'>";
    echo "<h2>$row[artistName]</h2>";
    echo "<p>";
    echo "<label for='artistName'>Name: </label>";
    echo "<input type='text' name='artistName' id='artistName' value='$row[artistName]'>";
    echo "</p><p>";
    echo "<label for='artistGenre'>Genre: </label>";
    echo "<input type='text' name='artistGenre' id='artistGenre' value='$row[artistGenre]'>";
    echo "</p><p>";
    echo "<label for='artistUrl'>Website: </label>";
    echo "<input type='text' name='artistUrl' id='artistUrl' value='$row[artistUrl]'>";
    echo "</p><p>";
    // TODO: weave in photo upload capability
    echo "<label for='artistPhoto'>File Name: </label>";
    echo "<input type='text' name='artistPhoto' id='artistPhoto' value='$row[artistPhoto]'>";
    echo "</p><p>";
    echo "<label for='artistText'>Artist Description:</label>";
    echo "<textarea name='artistText' id='artistText' form=$formName rows='12' cols='80'>$row[artistText]</textarea>";
    echo "</p>";
    echo "<input type='hidden' name='artistId' value='$row[artistId]' />";
?>
<br>
<input type='submit' name='submit' value='View Details'>
<input type='submit' name='submit' value='Update'>
<input type='submit' name='submit' value='Delete' class='deleteButton'>
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
