<?php

//данные БД
$dbhost = 'localhost';
$dbuser = 'local';
$dbpass = '87654321';
$dbname = 'test1';

//соединяемся с БД
$mysql = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die();
mysqli_set_charset($mysql,'utf8');

function config($config) {
    $get_config = mysqli_fetch_array(mysqli_query("select * data"));
    $config = $get_config[$config];
    return $config;
}

function access() {
    $mysql = mysqli_connect($dbhost,'local','87654321','test1') or die();
    if($_COOKIE['login']){
        $login = $_COOKIE['login'];
        $pass = $_COOKIE['pass'];
        $checkuser = mysqli_query($mysql, "SELECT * FROM users WHERE login='$login' AND pass='$pass'");
        $returned = mysqli_num_rows($checkuser);
        mysqli_free_result($checkuser); //закрытие выборки
        if($returned=="1"){
            //вход выполнен
        }
        else{ //возврат на попытку входа если логин/пароль ВВЕДЕНЫ неверные
            include("template.php");
            echo $login_header; //форма логин/пароль
?>
            <form action="login_check.php" method="post">
            <table cellspacing="1" cellpadding="4" border="0" bgcolor="#f2f2f2">
            <tr><td width="130">Login</td><td><input type="text" name="login" required /></td></tr>
            <tr><td>Password</td><td><input type="password" name="pass" required /></td></tr>
            </table><br />
            <input type="hidden" name="referer" value="<? echo $_SERVER['REQUEST_URI']; ?>" />
            <input type="submit" value="Вход" name="login_check" />
            </form>
<?
            exit;
            mysqli_free_result($mysql);
        }

    }else{ //возврат если логин/пароль не существуют
            include("template.php");
            echo $login_header; //форма логин/пароль
?>
        <form action="login_check.php" method="post">
        <table cellspacing="1" cellpadding="4" border="0" bgcolor="#f2f2f2">
        <tr><td width="130">Login</td><td><input type="text" name="login" required /></td></tr>
        <tr><td>Password</td><td><input type="password" name="pass" required /></td></tr>
        </table><br />
        <input type="hidden" name="referer" value="<? echo $_SERVER['REQUEST_URI']; ?>" />
        <input type="submit" value="Вход" name="login_check" />
        </form>
<?
    exit;
    }
}
?>