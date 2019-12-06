<!--
    Projet:
    Auteur: Altin Zili
    Date: 
    Version:
    Description
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/cssP4.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table>
<?php
for ($ligne = 0; $ligne < 8; $ligne++) {
    echo "<tr>";
    for ($col = 0; $col < 8; $col++) {
        if ($ligne == 7 && $col == 0) {
            echo "<td><img src='images/bleu.jpg'></td>";
        } else if ($ligne == 7 && $col == 6) {
            echo "<td><img src='images/rouge.JPG'></td>";

        } else {
            echo "<td></td>";
        }
    }
    echo "</tr>";
}
?>
</table>
</body>



