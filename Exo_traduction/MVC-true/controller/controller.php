<?php
    function showConcerts(){
        // données, muscle
        require_once('model/concerts.php');
        //détruit une variable
        // Logique, cerveau
        //unset($concerts[5]);
        //unset($concerts[7]);
        //unset($concerts[8]);

        //ça ça ne marche pas car c'est juste une copie c'est pas les concerts c'est juste une variable
        /*foreach($concerts as $concert)
        {
            if($concerts['date'] < date("Y-m-d"))
            {
                unset($concert);
            }
        }
        */

        //ça ça marche c'est la première possibilité, en dessous la deuxième
        /*
        for($i = 0; $i < count($concerts); i++)
        {
            if($concerts[$i]['date'] < date("Y-m-d"))
            {
                unset($concerts[$i]);
            }
        }
        */

        foreach($concerts as $i => $concert)
        {
            if($concert['date'] < date("Y-m-d"))
            {
                unset($concerts[$i]);
            }
        }



        //vue, graphiste, il fait joli
        require_once('view/concerts.php');
    }

    function showMovies(){
        require_once('model/movies.php');


        require_once('view/movies.php');
    }

?>




