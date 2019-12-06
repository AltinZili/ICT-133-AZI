<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="js/script.js"></script>
</head>
<body>
<?php
    $tab = array ("Fabien", "David", "Miguel", "Benoît", "Johnny", "Kevin", "Crisotpher", "Dmitri", "etc...");
    echo "<ul>";
        for($i = 0; $i <= 8; $i++)
        {
            echo"<li id='div$1'>";
            echo"$tab[$i]";
            echo"</li>";
        }

    echo "</ul>";
    echo "<br><br>";
    echo "<ul>";
    for ($i = 1; $i <= 9; $i++)
    {
        echo "<li id='div$1'>";
        switch ($i) {
            case 1:
                echo "Fabien";
                break;
            case 2:
                echo "David";
                break;
            case 3:
                echo "Miguel";
                break;
            case 4:
                echo "Benoît";
                break;
            case 5:
                echo "Johnny";
                break;
            case 6:
                echo "Kevin";
                break;
            case 7:
                echo "Cristopher";
                break;
            case 8:
                echo "Dmitri";
                break;
            case 9:
                echo "etc...";
                break;
        }
        echo "</li>";
    }
    echo "</ul>";
?>

<h1>SI-CMI2a</h1>
<ul>
    <li id="div1">Fabien</li>
    <li id="div2">David</li>
    <li id="div3">Miguel</li>
    <li id="div4">Benoît</li>
    <li id="div5">Johnny</li>
    <li id="div6">Kevin</li>
    <li id="div7">Christopher</li>
    <li id="div8">Dmitri</li>
    <li id="div9">etc...</li>
</ul>
</body>
</html>