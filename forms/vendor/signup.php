<?php

    require_once 'connection.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $password = md5($password);

    mysqli_query($connect, "INSERT INTO `users` (`id`, `email`, `password`) VALUES (0, '$email', '$password')");

    header("Location: ../index.php");
