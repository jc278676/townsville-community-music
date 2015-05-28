 <?php
    // the dbConnection include is a special case - it creates no output
    // but sets up
    include_once("dbConnect.php");
    //
    //
    // Some of our output-creating includes require certain variables to be set prior to calling
    // (This is a stylistic requirement, not a technical one - defaults are used if )
    // headSectionContent.php will set a default value of "Untitled Page"
    $pageTitle="Townsville Community Music Centre: Home";
    include("headSectionContent.php");
    ?><!--
Every web page has the following structure:

    Head
        headSectionContent (mostly metadata)
    Body
        siteHeader
            siteBanner (horizontal navigation bar)
            callToAction (may change with each page it is on)

        mainContent
            primaryContent  (~60% width)
            secondaryContent (~30% width)

        footer content (legals, disclaimer, etc.)
-->
<!doctype html>
<html>
<head>
<title>Membership</title>
</head>
<body>

<div id="colourHeader">
</div id="colourHeader">

<div id="siteCenter">

    <?php
    // includes which fill div elements should have the div open and close tags
    // set in the calling file.
    echo "<div class='header'>";
        // Must specify which section we represent before including siteNavigationBanner.php
        $sectionName="membership";
        include_once("siteNavigationBanner.php");
    echo "</div class='header'>";
    ?>

    <div id="content">
        <h2>Membership</h2>
        <div class="event">
            <div class="information">
                You can support the Music Centre by becoming a Member and derive some benefits for yourself at the same time. Your subscription helps to keep us operating and we provide substantial discounts whenever possible. For the Music Centre's own events, Members' ticket discounts can be as high as 50%. The Music Centre is also registered as a Deductible Gift Recipient. Any extra donations are tax-deductible! <br><br>
                Membership is $25 for the year.<br>
            </div>
            <p class="borderLine">
            <div class="information">


<h3>Please fill in your details to join Townsville Community Music Centre</h3>
<form id='insert' name='insert' method='post' action='dbMaintHandler1.php'>
  <fieldset class='subtleSet'>
      <label for='memberClass'>Registration Type: </label>
      <input type='integer' name='memberClass' id='memberClass'>
      <br>
      <label for='memberFname'>First Name: </label>
      <input type='text' name='memberFname' id='memberFname'>
      <br>
      <label for='memberLname'>Last Name: </label>
      <input type='text' name='memberLname' id='memberLname'>
      <br>
      <label for='memberPhone1'>Phone Day: </label>
      <input type='text' name='memberPhone1' id='memberPhone1'>
      <br>
      <label for='memberPhone2'>After hours: </label>
      <input type='text' name='memberPhone2' id='memberPhone2'>
      <br>
      <label for='memberPhone3'>Mobile: </label>
      <input type='text' name='memberPhone3' id='memberPhone3'>
      <br>
      <label for='memberFname'>First Name: </label>
      <input type='text' name='memberFname' id='memberFname'>
      <br>
      <label for='memberAddressLine1'>Address Line 1: </label>
      <input type='text' name='memberAddressLine1' id='memberAddressLine1'>
      <br>
      <label for='memberAddressLine2'>Address Line 2: </label>
      <input type='text' name='memberAddressLine2' id='memberAddressLine2'>
      <br>
      <label for='memberAddressSuburb'>Suburb: </label>
      <input type='text' name='memberAddressSuburb' id='memberAddressSuburb'>
      <br>
      <label for='memberAddressState'>State: </label>
      <input type='text' name='memberAddressState' id='memberAddressState'>
      <label for='memberAddressPostcode'>Postcode: </label>
      <input type='text' name='memberAddressPostcode' id='memberAddressPostcode'>
      <br>
      <label for='memberEmail'>Email: </label>
      <input type='text' name='memberEmail' id='memberEmail'>
      <br>
      <label for='memberPasswd'>Password: </label>
      <input type='text' name='memberPasswd' id='memberPasswd'>
    </p>
  
    <p>
      <input type='submit' name='submit' id='submit' value='Insert Entry'>
    </p>
  </fieldset>
</form>
<fieldset class='subtleSet'>

         <label> </label>  <input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_paynow_SM.gif" name="submit" alt="PayPal � The safer, easier way to pay online."><br>
                <label> </label> <input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_donate_SM.gif" name="submit" alt="PayPal � The safer, easier way to pay online."><br>
                
            </div>
        </div>
        </p>
    </div>

</div id="siteCenter">

<div id="footer">

</div id="footer">

</body>
</html>
