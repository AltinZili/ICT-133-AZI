<?php
/*  Program:
    Author: Altin Zili
    Date: 19.12.2019
    Version:
*/

// SEUL LE GRAPHISTE FAIT DES ECHOS !!!

ob_start();

?>

<h1> Liste des concerts </h1>
<ul>
    <?php
    foreach($concerts as $concert)
    {
        echo "<li>".$concert['band']." ".$concert['date']."</li>";
    }
    ?>
</ul>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>