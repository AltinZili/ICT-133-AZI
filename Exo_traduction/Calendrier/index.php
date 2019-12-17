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
    <link href="css_calendrier/style.css" rel="stylesheet">
</head>
<body>
<?php
    $month = $_GET['month']; //récupère dans la query string le mois choisi
    $month += 0; //met le met sous forme d'entier pour pouvoir faire des opérations
    $year = $_GET['year']; //récupère dans la query string le mois choisi

    //cette fonction permet, si le mois est janvier de faire en sorte que le mois d'avant soit décembre
    function getMonthBefore($month,$year){
        if($month  == 1){
            $previousMonth = 12;
        }else{
            $previousMonth = $month-1;
        }
        return array($previousMonth);
    }
    //ici on récupère la variable du mois précédent de la function getMonthBefore
    list($previousMonth) = getMonthBefore($month,$year);


    $firstDay = strtotime("$year-$month-1"); //le premier jour du mois à afficher en secondes stocké dans une variable
    $daysOfTheWeek = array("Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"); //tableau des jours de la semaine
    $firstDayOfPreviousMonth = strtotime("$year-$previousMonth-1"); //le premier jour du mois précédant celui à afficher en secondes stocké dans une variable
    $weekDayOfFirstDayOfTheMonth = date ('N', $firstDay); //donne la valeur du jour de la semaine correspondant à la variable firstDay
    $daysOfTheMonth = 1; //donne 1 comme première valeur aux jours du mois
    $nbOfDaysOfTheMonth = date ('t', $firstDay); // donne le nombre de jours du mois en cours
    $lastDay = strtotime("$year-$month-$nbOfDaysOfTheMonth"); //Donne en seconde moment du dernier jour du mois en cours
    $weekDayOfLastDayOfTheMonth = date('N', $lastDay); //donne la valeur du jour de la semaine correspondant au dernier jour du mois


    $nbOfDaysOfThePreviousMonth = date('t', $firstDayOfPreviousMonth); //donne le nombre de jours du mois précédant celui à afficher


    $startOfLine = $nbOfDaysOfThePreviousMonth - $weekDayOfFirstDayOfTheMonth + 2; //donne le numéro du jour commencant la première ligne du calendrier




    //cette fonction va créer le header qui comprend le mois à afficher en toute lettre et l'année
    function GetHeader($month,$year)
    {
        $monthsOfTheYear = array("","January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"); //tableau des mois de l'année
        $res = "";
        $res .= '<div class="month">';
        $res .= "<ul>";
        $res .= "<li>";
        $res .=" $monthsOfTheYear[$month]<br>$year</li>";
        $res .= "</ul>";
        $res .= "</div>";
        return $res;
    }


    echo GetHeader($month, $year); //appelle la fonction GetHeader


    //permet d'afficher les jours de la semaine dans le calendrier
    echo "<ul class='weekdays'>";
        for($j = 0; $j < 7; $j++)
        {
            echo"<li>";
                echo "$daysOfTheWeek[$j]";
            echo"</li>";
        }
    echo "</ul>";


    //ici sera affiché le contenu du calendrier
    echo "<ul class='days'>";
    for($i = 1; $i <= ($nbOfDaysOfTheMonth + $weekDayOfFirstDayOfTheMonth - 1); $i++)
    {

        if($i >= $weekDayOfFirstDayOfTheMonth) //affiche les jours du mois à afficher, sinon affiche les jours du mois précédant
        {
            if(($daysOfTheMonth == date('j')) && ($month == date('n')) && ($year == date('Y'))) //mettre en évidence si le date du jour est affichée dans le calendrier
            {
                echo"<li><span class='active'>$daysOfTheMonth</span></li>";
            }else{
                echo"<li>$daysOfTheMonth</li>";
            }

            $daysOfTheMonth += 1;
        }else{
            echo"<li><span class='otherMonths'>$startOfLine</span></li>";
            $startOfLine += 1;
        }

    }
    //affichera les premiers jours du mois suivant celui à afficher
    for($p = 1; $p <= 7 - $weekDayOfLastDayOfTheMonth; $p++)
    {
        echo"<li><span class='otherMonths'>$p</span></li>";
    }

    echo "</ul>";


?>



