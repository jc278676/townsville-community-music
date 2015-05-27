
<?php
include("dbConnect.php")
/* Fairly simple example - there's a form for inserting a new phone record and a set of forms, one for each record,
	that allows for deleting and updating each record. In these ones, the id of the record is passed using a hidden form field. 
*/
?>
<?php

$sql = "SELECT * FROM members";
foreach ($dbh->query($sql) as $row)
{
?>
<?php
    $formName = "maintForm" . $row[memberId];
    echo "<form id=$formName name=$formName method='post' action='dbMaintHandler1.php'>";
	
    echo "<label for='memberClass'>	Member Class: </label>";
    echo "<input type='integer' name='memberClass' id='memberClass' value='$row[memberClass]'>";
    echo "</p><p>";
	
    echo "<label for='memberFname'>Member First Name: </label>";
    echo "<input type='text' name='memberFname' id='memberFname' value='$row[memberFname]'>";
    echo "</p><p>";
	
    echo "<label for='memberLname'>Member Last Name: </label>";
    echo "<input type='text' name='memberLname' id='memberLname' value='$row[memberLname]'>";
    echo "</p><p>";
    
    echo "<label for='memberPhone1'>Day Time Phone: </label>";
    echo "<input type='text' name='memberPhone1' id='memberPhone1' value='$row[memberPhone1]'>";
    echo "</p><p>";
	
	echo "<label for='memberPhone2'>After Hours Phone: </label>";
    echo "<input type='text' name='memberPhone2' id='memberPhone2' value='$row[memberPhone2]'>";
    echo "</p><p>";
	
		echo "<label for='memberPhone3'>Mobile: </label>";
    echo "<input type='text' name='memberPhone3' id='memberPhone3' value='$row[memberPhone3]'>";
    echo "</p><p>";
	
	echo "<label for='memberAddressLine1'>Address Line 1: </label>";
    echo "<input type='text' name='memberAddressLine1' id='memberAddressLine1' value='$row[memberAddressLine1]'>";
    echo "</p><p>";
	
		echo "<label for='memberAddressLine2'>Address Line 2: </label>";
    echo "<input type='text' name='memberAddressLine2' id='memberAddressLine2' value='$row[memberAddressLine2]'>";
    echo "</p><p>";
	
		echo "<label for='memberAddressSuburb'>Suburb: </label>";
    echo "<input type='text' name='memberAddressSuburb' id='memberAddressSuburb' value='$row[memberAddressSuburb]'>";
    echo "</p><p>";
	
		echo "<label for='memberAddressState'>State: </label>";
    echo "<input type='text' name='memberAddressState' id='memberAddressState' value='$row[memberAddressState]'>";
    echo "</p><p>";
	
		echo "<label for='memberAddressPostcode'>Postcode: </label>";
    echo "<input type='text' name='memberAddressPostcode' id='memberAddressPostcode' value='$row[memberAddressPostcode]'>";
    echo "</p><p>";
	
		echo "<label for='memberEmail'>Email: </label>";
    echo "<input type='text' name='memberEmail' id='memberEmail' value='$row[memberEmail]'>";
    echo "</p><p>";
	
		echo "<label for='memberPasswd'>Password: </label>";
    echo "<input type='text' name='memberPasswd' id='memberPasswd' value='$row[memberPasswd]'>";
    echo "</p><p>";
		
    echo "<input type='hidden' name='memberId' value='$row[memberId]' />";
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
       