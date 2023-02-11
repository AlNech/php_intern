<?php
    $connect = mysqli_connect('localhost', 'root', 'root', 'forms');

    if (!$connect){
        die('Error connect to DataBase');
    }