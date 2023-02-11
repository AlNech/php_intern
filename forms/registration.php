<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "./assets/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Авторизация и регистрация</title>
</head>
<body>
    <!--Форма регистрации-->
    <div class="form-auth d-flex justify-content-center align-items-center flex-column">
        
       <form action="vendor/signup.php" method="post" class="col-mb-4 d-flex flex-column ">
                <h2 class="d-flex justify-content-center p-3">Регистрация</h2>
                <label for="" class="form-label ">Email</label>
                <input type="text" class="form-control " name="email"></input>
                <label for="" class="form-label p-1">Password</label>
                <input type="Password" class="form-control" name="password"></input>
                <button class="btn btn-primary mt-4 mb-2" type="submit">Зарегистрироватся</button>
        </form>
        
        <p class="d-flex justify-content-center">Есть аккаунт - <a href = "/"> войти</a></p>
    </div>
        


</body>
</html>