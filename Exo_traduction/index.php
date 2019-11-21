<!--
    Projet:
    Auteur: Altin Zili
    Date:
    Version:
    Description:
-->


<!DOCTYPE html >
<html lang = "en" >
<head >
    <meta charset = "UTF-8" >
    <title > Title</title >
</head >
<body >


<?php
$value = 20;
$step = 3;

for($i = 0; $i < 10; $i++)
{
    if($value >= 30)
    {
        echo "le nombre vaut $value <br>";
    }
    else
    {
        echo "nombre trop petit <br>";
    }
    $value += $step;
}
?>

</body >

