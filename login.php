<?php
session_start();
if (isset($_SESSION['auth']) && $_SESSION['auth'] == true) {  // если переменная аут существует и она = тру , то мы на профиль тп.
    header('location: /profile.php');
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/app.css">
</head>
<body>

<main id="main">
    <div class="container">
        <a href="../login.php" class="logo">
            <img src="src/img/logo.svg" width="130" alt="">
        </a>
        <div class="row tabs w-50">
            <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="/login.php">Вход</a>
                <a class="flex-sm-fill text-sm-center nav-link border" href="/register.php">Регистрация</a>
            </nav>
        </div>
        <div class="row form">
            <form action="vendor/login.php" method="post">
                    <?php
                       if(isset($_SESSION['is_success_register']) && $_SESSION['is_success_register'] == true){
                          ?>
                                <div class="alert alert-success mb-3" role="alert">
                                        <?= $_SESSION['success_message']?>
                                </div>

                   <?php

                       }
                        unset($_SESSION['is_success_register']);
                        unset($_SESSION['success_message']);
                    ?>



                <div class="mb-3">
                    <?php
                    if(isset($_SESSION['is_error']) && $_SESSION['is_error'] == true) {

                        ?>
                        <div class="alert alert-danger mb-3 role="alert">
                            <?=  $_SESSION['error_message'] ?>
                        </div>
                        <?php
                    }
                    unset($_SESSION['is_error']);
                    unset($_SESSION['error_message'])
                    ?>
                    <label for="email" class="form-label">Адрес электронной почты</label>
                    <input type="email" name="email" value="<?= $_SESSION['email'] ?>" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">E-mail будет использован при входе в систему</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" name="password" value="" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Авторизироваться в системе</button>
        <?php


        unset($_SESSION[email]);
        unset($_SESSION[name]);




        ?>



            </form>
        </div>
    </div>
</main>

<script src="src/js/bootstrap.min.js"></script>
</body>
</html>