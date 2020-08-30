<?php
include("config.php");
$name = $_POST['name'];
$pass = $_POST['pass'];
$update = mysqli_query($mysql, "UPDATE `users` SET `name`='$name' WHERE login=".$_COOKIE['login']." AND pass=".$_COOKIE['pass']."");
$update = mysqli_query($mysql, "UPDATE `users` SET `pass`='$pass' WHERE login=".$_COOKIE['login']." AND pass=".$_COOKIE['pass']."");
header("Location: index.php");
mysqli_close($mysql); //закрываем соединение
?>