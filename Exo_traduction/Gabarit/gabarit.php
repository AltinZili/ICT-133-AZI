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
<header>
    <img src="images/logo_cpnv.png">
</header>


<?php
echo"<h1>$title</h1>";
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
        echo "<li>$class</li>";
    }

?>

<footer>
    <img src="images/twitter.png">
</footer>
</body>



