<?php
include("config.php");
$login = $_POST['login'];

        $checkuser = mysqli_query($mysql, "SELECT * FROM users WHERE login='$login'");
        $returned = mysqli_num_rows($checkuser);
        if($returned > "0"){
            header("Location: reg.php");
        }
        else{
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $name = $_POST['name'];
            $insert = mysqli_query($mysql, "INSERT INTO `users` (`email`, `login`, `pass`, `name`)" . "VALUES ('$email', '$login', '$pass', '$name')");
            header("Location: index.php");
        }

mysqli_free_result($checkuser); //закрытие выборки
mysqli_close($mysql); //закрываем соединение
?>