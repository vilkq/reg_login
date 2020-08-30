<?php

include("config.php");

//проверка данных при авторизации
$login = $_POST['login'];
$pass = $_POST['pass'];
$checkuser = mysqli_query($mysql ,"SELECT * FROM users WHERE login='$login' AND pass='$pass'");
$returned = mysqli_num_rows($checkuser);
mysqli_free_result($checkuser); //закрытие выборки

if($returned=="1"){
	$referer = $_POST['referer'];
	setcookie ("login", $login, time()+11520000);
	setcookie ("pass", $pass, time()+11520000);
	header("Location: index.php");
}else{
	header("Location: index.php");
}
mysqli_close($mysql); //закрываем соединение
?>