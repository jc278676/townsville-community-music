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
            

            
<form id='insert' name='insert' method='post' action='dbMaintHandler1.php'>
<fieldset class='subtleSet'>
                <h3>Membership Form:</h3><br>
          
                    <label>First Name:</label> <input align="middle" type="text" placeholder="First Name"><br><br>
                    <label>Surname:</label> <input align="middle" type="text" placeholder="Surname"><br><br>
                    Postal Address: <br>
                    <label> Line 1:</label> <input align="middle" id="addressLine1" type="text" placeholder="Unit / apartment Number"><br><br>
                    <label> Line 2:</label> <input align="middle" id="addressLine1" type="text" placeholder="Street Number & Name"><br><br>
                    <label> Town/Suburb:</label> <input align="middle" id="addressSuburb" type="text" placeholder="Town or Suburb"><br><br>
                    <label> State:</label> <input align="middle" id="state" type="text" placeholder="State"> &nbsp;&nbsp;&nbsp;
                    <label> Postcode:</label> <input align="middle" id="postcode" type="text" placeholder="Postcode"><br><br>
                    <label> Phone(Daytime Hours):</label> <input type="tel" placeholder="Daytime Phone Number"><br><br>
                    <label> Phone(After Hours):</label> <input type="tel" placeholder="After Hours Phone"><br><br>
                    <label> Mobile:</label> <input type="tel" placeholder="Mobile"> <br><br>
                    <label> </label> 
                    <input type='submit' name='submit' id='submit' value='Insert Entry'>
    </p>
 
</form>

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
