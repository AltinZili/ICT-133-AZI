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
    $month = $_GET['month'];
    $month += 0;
    $year = $_GET['year'];

    $dayOfTheMonth = 1;

    $daysOfTheWeek = array("Mo", "Tu", "We", "Th", "Fr", "Sa", "Su");
    $monthsOfTheYear = array("January", "February", "March", "April", "May", "Juni", "July", "August", "September", "October", "November", "December");

    strtotime("$year-$month-01");
    echo "<div class='month'>";
        echo "<ul>";
            echo "<li>";
                echo $monthsOfTheYear[$month-1]."<br>$year";
            echo "</li>";
        echo "</ul>";
    echo "</div>";

    echo "<ul class='weekdays'>";
        for($j = 0; $j < 7; $j++)
        {
            echo"<li>";
                echo "$daysOfTheWeek[$j]";
            echo"</li>";
        }
    echo "</ul>";

    echo "<ul class='days'>";
        for($i = 0; $i < 31; $i++)
        {
            echo"<li>";
                echo "$dayOfTheMonth";
                $dayOfTheMonth += 1;
            echo"</li>";
        }
    echo "</ul>";
?>
<div class="month">
    <ul>
        <li>August<br>2017</li>
    </ul>
</div>

<ul class="weekdays">
    <li>Mo</li>
    <li>Tu</li>
    <li>We</li>
    <li>Th</li>
    <li>Fr</li>
    <li>Sa</li>
    <li>Su</li>
</ul>

<ul class="days">
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
    <li>6</li>
    <li>7</li>
    <li>8</li>
    <li>9</li>
    <li><span class="active">10</span></li>
    <li>11</li>
</ul>
</body>



