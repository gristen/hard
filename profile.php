<?php
session_start();

if (isset($_SESSION['auth']) && $_SESSION['auth'] !== true) {
    header('location: /login.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/app.css">
</head>
<body>

<main id="main">
    <div class="container">
        <a href="#" class="logo">
            <img src="src/img/logo.svg" width="130" alt="">
        </a>
        <div class="row tabs w-50">
            <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link active bg-success border" href="/profile.php">Мой аккаунт</a>
                <a class="flex-sm-fill text-sm-center nav-link text-danger border border-danger" href="/vendor/logout.php">Выход</a>
            </nav>
        </div>
        <div class="row">
            <div class="profile">
                <div class="alert alert-warning" role="alert">
                    Добро пожаловать в систему!
                </div>
                <div class="top">
                    <h2></h2>
                    <span class="badge bg-primary"></span>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="src/js/bootstrap.min.js"></script>
</body>
</html>