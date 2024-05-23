<?php

    $database= new mysqli("localhost","root","","ddoctor");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>