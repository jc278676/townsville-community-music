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
<h1>Member Maintenance Action - Results</h1>
<div>
<?php
//TODO: Gracefully handle special characters in POSTed form data
if ($_REQUEST['submit'] == "Insert Entry")
{
	$sql = "INSERT INTO members VALUES (NULL,
              '$_REQUEST[memberClass]',
              '$_REQUEST[memberFname]',
              '$_REQUEST[memberLname]',
              '$_REQUEST[memberPhone1]',
			  '$_REQUEST[memberPhone2]',
              '$_REQUEST[memberPhone3]',
			  '$_REQUEST[memberAddressLine1]',
              '$_REQUEST[memberAddressLine2]',
			  '$_REQUEST[memberAddressSuburb]',
              '$_REQUEST[memberAddressState]',
			  '$_REQUEST[memberAddressPostcode]',
              '$_REQUEST[memberEmail]',
              '$_REQUEST[memberPasswd]');";
	if ($dbh->exec($sql))
		echo "Successfully inserted new entry - $_REQUEST[memberFname]";
	else
		echo "Nothing inserted - query failed"; // in case it didn't work - e.g. if database is not writeable
}
else if ($_REQUEST['submit'] == "Delete")
{
    $sql = "DELETE FROM members WHERE memberId = '$_REQUEST[memberId]';";
    if ($dbh->exec($sql))
        echo "Successfully deleted $_REQUEST[memberFname]";
    else
        echo "Nothing deleted - query failed";
}
else if ($_REQUEST['submit'] == "View Details")
{
    header('Location: memberDisplay.php?memberId=' . $_REQUEST[memberId]);
}
else if ($_REQUEST['submit'] == "Update")
{
	$sql = "UPDATE members SET
              memberClass = '$_REQUEST[memberClass]',
              memberFname = '$_REQUEST[memberFname]',
              memberLname = '$_REQUEST[memberLname]',
              memberPhone1 = '$_REQUEST[memberPhone1]',
              memberPhone2 = '$_REQUEST[memberPhone2]',
              memberPhone3 = '$_REQUEST[memberPhone3]',
              memberAddressLine1 = '$_REQUEST[memberAddressLine1]',
              memberAddressLine2 = '$_REQUEST[memberAddressLine2]',
              memberAddressSuburb = '$_REQUEST[memberAddressSuburb]',
              memberAddressState = '$_REQUEST[memberAddressState]',
              memberAddressPostcode = '$_REQUEST[memberAddressPostcode]',
              memberEmail = '$_REQUEST[memberEmail]',
              memberPasswd = '$_REQUEST[memberPasswd]',

            WHERE memberId = '$_REQUEST[memberId]';";
	if ($dbh->exec($sql))
		echo "Successfully updated $_REQUEST[memberFname]";
	else
		echo "Nothing updated - query failed";
}
else {
	echo "Sorry, but " . $_REQUEST['submit'] . " is not a known request type.<br />\n";
}

// close the database connection 
$dbh = null;
?>

<a href="membership.php">Return to membership page</a>
</div>
</body>
</html>
