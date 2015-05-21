<?php
echo "<meta charset='UTF-8'>";
if (is_null($pageTitle)) {
    $pageTitle="untitled page";
}
echo "<title>$pageTitle</title>";
echo "<link href='styles/tcmcStyle.css' rel='stylesheet' type='text/css'>";
?>