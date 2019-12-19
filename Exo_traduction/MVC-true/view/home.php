<?php
/*  Program:
    Author: Gatien Jayme
    Date: 19.12.2019
    Version:
*/
ob_start();
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <a href='?action=movies'><img src="images/movies.jpg" height="500px"></a>
            </div>
            <div class="col-lg-6">
                <a href='?action=concerts'><img src="images/concerts.jpg" height="500px"></a>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
?>