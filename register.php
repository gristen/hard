<?php
    session_start();
if (isset($_SESSION['auth']) && $_SESSION['auth'] == true) {  // если переменная auth существует и она = true , то мы на профиль тп.
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
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/styleWAYUP.css">
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/app.css">
</head>
<body>

<main id="main">
    <div class="container">
        <a href="../register.php" class="logo">
            <img src="src/img/logo.svg" width="130" alt="">
        </a>
        <div class="row tabs w-50  " id="tabs" >
            <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link border" href="/login.php">Вход</a>
                <a class="flex-sm-fill text-sm-center nav-link active"  href="/register.php">Регистрация</a>
            </nav>
        </div>

        <div class="row form">
            <form action="vendor/register.php" method="post">
                <div class="mb-3">
                    <?php
                    if(isset($_SESSION['is_error']) && $_SESSION['is_error'] == true) {

                        ?>
                        <div class="alert alert-danger mb-1" role="alert">
                            <?=  $_SESSION['error_message'] ?>
                        </div>
                        <?php
                    }
                    unset($_SESSION['is_error']);
                    unset($_SESSION['error_message'])
                    ?>
                    <label for="email" class="form-label">Адрес электронной почты</label>
                    <input type="email" value="<?= $_SESSION['email'] ?>"   name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Используйте ваш e-mail, который был указан при регистрации</div>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Ваше имя</label>
                    <input type="text" value="<?= $_SESSION['name'] ?>" name="name" class="form-control" id="name" aria-describedby="nameHelp">
                    <div id="nameHelp" class="form-text">Вы можете указать ФИО или никнейм</div>
                </div>
                <?php


                unset($_SESSION[email]);
                unset($_SESSION[name]);




                ?>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Подтверждение пароля</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" aria-describedby="passwordConfirmHelp">
                    <div id="passwordConfirmHelp" class="form-text">Это необходимо, чтобы избежать ошибок при вводе пароля</div>
                </div>
                <button type="submit" class="btn btn-primary">Создать аккаунт</button>






            </form>
        </div>
    </div>
</main>

<script src="src/js/bootstrap.min.js"></script>
</body>
</html>