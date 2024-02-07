<?php

$phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");

$path_parts = pathinfo($phpSelf);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Changing the World Through Reducing Waste</title>
        <meta charset="utf-8">
        <meta name="author" content="Derek Winsor">
        <meta name="description" content="<?php $description ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/custom.css" type="text/css">
    </head>
    <body> 
        
    
<?php
print '<body id="' . $path_parts['filename'] . '">';
include("database-connect.php");
include("header.php");
include("nav.php");
?>


