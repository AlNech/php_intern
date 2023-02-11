<?php
    session_start();
 ?>


<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "./assets/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Форма обратной связи</title>
</head>
<body>
    <div class="container">
    <h3 class="col-md-6 d-flex ">Добро пожаловать  пользователь <?= $_SESSION['user']['email'] ?>! Пожалуйста заполните форму!</h3>
    <form class="col-md-8 d-flex flex-column" action="vendor\add_form.php" method="post">
        <div class="col-md-5 d-flex flex-row justify-content-between age mt-3 mb-3">
            <label for="">Введите свой возраст</label>
            <input type="text" name="age" class="col-md-3">
        </div>
        
        <div class="col-md-6 d-flex flex-column gender mb-3">
            <label for="">Пол</label>
            <div class="col-md-6 d-flex flex-row justify-content-between gender-female mx-4"><span>Женский</span><input type="radio"  name="gender" value="Женский"></input></div>
            <div class="col-md-6 d-flex flex-row justify-content-between gender-male mx-4"><span>Мужской</span><input type="radio"  name="gender" value="Мужской"></input></div>
        </div>
        
        <div class="col-md-6 d-flex flex-column lang_prog">
            <label for="">Знание языков программирования</label>
            <div class="col-md-6 d-flex flex-row justify-content-between mx-4"><span>PHP</span><input type="checkbox" name="lang_prog" value="PHP"></input></div>
            <div class="col-md-6 d-flex flex-row justify-content-between mx-4"><span>Java</span><input type="checkbox" name="lang_prog" value="Java"></input></div>
            <div class="col-md-6 d-flex flex-row justify-content-between mx-4"><span>JavaScript</span><input type="checkbox" name="lang_prog" value="JavaScript"></input></div>
            <div class="col-md-6 d-flex flex-row justify-content-between mx-4"><span>C#</span><input type="checkbox" name="lang_prog" value="C#"></input>
        </div>
        
        <div class="col-md-6 d-flex flex-column country mt-3 mb-3">
            <label for="">Страна проживания</label>
            <select name="country">
                <option value="Россия">Россия</option>
                <option value="Беларусь">Беларусь</option>
                <option value="Иное">Иное</option>
            </select>
        </div>
        
        <div class="col-md-12 d-flex flex-column comment mb-1">
            <label for="">Отзыв</label>
            <input type="textarea" class="form-control pt-5 pb-5" name="comment"></input>
        </div>
        

    <div class="group-btn d-flex flex-row justify-content-between">
        <button class="btn btn-primary mt-4 mb-2" onClick="window.location.reload();">Очистить</button>
        <button class="btn btn-primary mt-4 mb-2" type="submit">Отправить</button>
    </div>
        
    <a href="vendor/logout.php" class="logout d-flex flex-row justify-content-end"> <span class="logout-btn">Выйти</span></a>         
    </form>
    
    </div>
    
</body>