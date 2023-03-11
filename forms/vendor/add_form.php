<?php
    session_start();
    require_once 'connection.php';

    
        $age = $_POST['age'];
        $gender =  $_POST['gender'];
        $lang_prog =  $_POST['lang_prog'];
        $country = $_POST['country'];
        $comment =  htmlspecialchars($_POST['comment']);


        $lang = array();
        foreach ($lang_prog as $row){
            array_push($lang, $row);
        }
        $lang = json_encode($lang);

        mysqli_query($connect, "INSERT INTO `add_form`(`id`, `age`, `gender`, `lang_prog`, `country`, `comment`) VALUES (0,'$age','$gender','$lang','$country','$comment')");
        header("Location: ../index.php");
   