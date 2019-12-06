<!--
    Projet:
    Auteur: Altin Zili
    Date: S
    Version:
    Description
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    $timestamp = time();
    //$timestamp = strtotime('17.09.2013');
    echo '<ol>';
    echo '<li>';
    echo date('l d F o', $timestamp);
    echo '</li>';
    echo '<li>';
    echo date('M jS o', $timestamp);
    echo '</li>';
    echo '<li>';
    echo date('j/n/y H:j a', $timestamp);
    echo '</li>';
    echo '<li>';
    echo date('j M o, H:j:s', $timestamp);
    echo '</li>';
    echo '<li>';
    echo date('D, j M o H:j:s O', $timestamp);
    echo '</li>';
    echo '</ol>';
?>
</body>



