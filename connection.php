<?php
//connect to database
    $connection = mysqli_connect("localhost", "root", "Spiderman001","picart");
    if (!$connection)
    {
        die("could not connect" . mysqli_connect_error());
    } 

?>