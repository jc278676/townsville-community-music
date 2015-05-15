<?php
$pageTitle="Template Page";
include_once("frontMatter.php");
?>

<body>

<div id="colourHeader">
</div>

<div id="siteCenter">

    <div class="header">
        <?php
	// Building the site's navigation header. Each section in the 
	// header has a name on the left matching the text on the right
	// The text is what will be displayed in the banner, the name is 
	// how it is referred to in php. The name is used as a link to the 
	// relevant page for all but the current page (e.g. "Home" makes 
	// a link back to the home page on every page except the home page.)
	//
	// Here are the defined sections:
	//	 $headerSections = array (
        //		"home" => "Home",
        //		"events" => "Events",
        //		"bulletinBoard" => "Bulletin Board",
        //		"musicians" => "Musicians",
        //		"membership" => "Membership",
        //		"sponsors" => "Sponsors",
        //		"about" => "About Us"
	// 	);
	//
        // Here we can specify which section we represent before including siteHeader.php
	// If it is not a page represented by the navigation header (Really? Why not?), use: 
	// $sectionName = null; 
        $sectionName=musicians;
        include_once("siteHeader.php");
        ?>

        <div class="center">
            <p>
                <a href="artistPage.html">Free listing for Music Centre members!<br>
                    Publicise yourself, your band or organisation here!</a>
            </p>
        </div>

    </div>

    <div id="contentLeft">
    </div>
 
    <div id="contentRight">
    </div>

</div>

<?php
include_once("siteFooter.php");
?>