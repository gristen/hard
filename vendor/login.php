<?php

session_start();
require_once 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];


$_SESSION['email'] = $email;





if ($email === '' && $password == "" ){
    $_SESSION['is_error'] = true;
    $_SESSION['error_message'] = 'Введите данные для авторизации';
    header('Location: /login.php');
    exit();
}



elseif ($email === '')
 {
    $_SESSION['is_error'] = true;
    $_SESSION['error_message'] = 'Введите емлайл';
    header('Location: /login.php');
    exit();
} elseif ($password == "") {
    $_SESSION['is_error'] = true;
    $_SESSION['error_message'] = 'Введите пароль ';
    header('Location: /login.php');
    exit();
}

$user = $db->prepare("SELECT * FROM `users` WHERE `email` = :email");
//$user = $db ->prepare("SELECT * FROM `users` WHERE `email`= :email");
$user ->execute([
    "email" => $email
]);
$user = $user->fetch(); // получаем все поля

if (!$user) {                                                                       // Ищем в БД пользователя по емайлу . Если не находит = Пользователь не найден
    $_SESSION['is_error'] = true;
    $_SESSION['error_message'] = "Пользователь не найден" ;
    header('location: /login.php');
    exit();
}

if(password_verify($password, $user['password'] ) == true) {
    $_SESSION['auth'] = true;
    $_SESSION['user'] = [
        'id'=>$user['id'],                                          // храним информацию о текущем авторизированном пользователе в сессиях.
        'name'=>$user['name'],
        'email'=>$user['email']
    ];

    header('location: /profile.php');
} else {
    $_SESSION['is_error'] = true;
    $_SESSION['error_message'] = "не верный пароль" ;
    header('location: /login.php');
}