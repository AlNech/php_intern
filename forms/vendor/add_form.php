<?php
    session_start();
    require_once 'connection.php';

    
        $age = $_POST['age'];
        $gender =  $_POST['gender'];
        $lang_prog =  $_POST['lang_prog'];
        $country = $_POST['country'];
        $comment =  $_POST['comment'];

        mysqli_query($connect, "INSERT INTO `add_form`(`id`, `age`, `gender`, `lang_prog`, `country`, `comment`) VALUES (0,'$age','$gender','$lang_prog','$country','$comment')");
        header("Location: ../index.php");
   