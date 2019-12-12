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
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
//plus de calcul ici on fait que de l'affichage
    for($i=0; $i <count($students); $i++)
    {
        echo "<li>".$students[$i]."</li>";
    }
    foreach ($students as $student)
    {
        echo "<li>$student</li>";
    }
    foreach ($classes as $class){
        echo "<li>$student</li>"
    }


?>
</body>



