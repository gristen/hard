<?php
session_start();

unset($_SESSION["name"]);
unset($_SESSION["email"]);
unset($_SESSION["text_input"]);

unset($_SESSION["error_username"]);
unset($_SESSION["error_email"]);
unset($_SESSION["error_text"]);
unset($_SESSION["success"]);

function redirect(){
	header("location: index.php");
	exit;
}

$user_name = htmlspecialchars(trim($_POST["name"]));
$email = htmlspecialchars(trim($_POST["email"]));
$text = htmlspecialchars(trim($_POST["text_input"]));

$_SESSION["name"] = $user_name;
$_SESSION["email"] = $email;
$_SESSION["text_input"] = $text ;


if(strlen($user_name) <= 1 ) {                        
$_SESSION["error_username"]	 = "короткое имя";
redirect();
}
else if (strlen($email) <5 ) {
$_SESSION["error_email"] = "Не корректный емайл";
redirect();
}
else if(strlen($text) <=15 ){
$_SESSION["error_text"] = "Сообщение пусто"; 
redirect();
}
else{
	$_SESSION['success'] = "отправил";
	redirect();
}


?>