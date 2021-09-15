<?php

session_start();
require_once 'db.php' ;// подкл к БД



$email = trim($_POST['email']);
$name = trim($_POST['name']);
$password = trim($_POST['password']);
$password_confirmation = trim($_POST['password_confirmation']);

$_SESSION['email'] = $email;
$_SESSION['name'] = $name;


if($email == "" || $name == "" || $password == "" || $password_confirmation == '' || !filter_var($email, FILTER_VALIDATE_EMAIL) ){
    $_SESSION['is_error'] = true;
    $_SESSION['error_message'] = "Для регистрации необхадимо заполнить все поля" ;
    header('location: /register.php');
    exit();
}



if($password !== $password_confirmation) {
    $_SESSION['is_error'] = true;
    $_SESSION['error_message'] = "Пароли не совпадают" ;
    header('location: /register.php');
    exit();
}

$user = $db->prepare("SELECT * FROM `users` WHERE `email` = :email");
$user ->execute([
    "email" => $email
]);
$user = $user->fetch(); // получаем все поля

if ($user) {                                                                       // Ищем в БД пользователя по емайлу . Если не находит = Пользователь не найден
    $_SESSION['is_error'] = true;
    $_SESSION['error_message'] = "Пользователь с таким емлайыом уже зарегистрирован" ;
    header('location: /register.php');
    exit();
}

$store_user = $db->prepare("INSERT INTO `users` (`email`, `name`, `password`) VALUES (:email, :name, :password)"); //
$store_user->execute([
    "email" => $email,
    "name" => $name,
    "password" => password_hash($password, PASSWORD_DEFAULT),


]);




$_SESSION['is_success_register'] = true;
$_SESSION['success_message'] = "Регестрация прошла успешно." ;
header('Location: /login.php');

