<?php
include("config.php");
access();
$data = mysqli_query($mysql, "SELECT * FROM users WHERE login=".$_COOKIE['login']." AND pass=".$_COOKIE['pass']."");
$row = mysqli_fetch_assoc($data);
?>

<a href="logout.php">logout</a>
<br><br>

<form action='reg_update.php' method="post" name="form" id="form">
    <table cellspacing="1" cellpadding="4">
        <tr>
            <td width="100">Password:</td>
                <td width="300"><input type="password" name="pass" id="pass" size="55" autocomplete="off" required
                    pattern="[a-zA-Z1-9]+" value="<? echo $row['pass']; ?>" /></td>
        </tr>
        <tr><td colspan="2"></td></tr>
        <tr>
            <td width="100">ФИО:</td>
                <td width="300"><input type="text" name="name" id="name" size="92" autocomplete="off" required
                    pattern="[/^[А-ЯЁ][а-яё]{2,}([-][А-ЯЁ][а-яё]{2,})?\s[А-ЯЁ][а-яё]{2,}\s[А-ЯЁ][а-яё]{2,}$/]" value="<? echo $row['name']; ?>" /></td>
        </tr>
    </table>
    <tr><br></tr>
<input type="submit" value="Обновить данные" name="reg" />
</form>


<br><hr/><br>


<?
    $count = mysqli_query($mysql, "SELECT COUNT(*) FROM users LIMIT 1");
    $row = mysqli_fetch_array($count);
    $count = $row['0']; //количество записей в таблице пользователей

echo "Список email-адресов, встречающихся более чем у одного пользователя:<br>";
for ($i=1; $i <= $count; $i++) {
    $data = mysqli_query($mysql, "





        ");
    $row = mysqli_fetch_array($data);
    //if ($row['email'] > 0) {
        echo '<br>'.$row[$i];
    //}
}




echo "<br><hr/><br>";

$count = mysqli_query($mysql, "SELECT COUNT(*) FROM orders LIMIT 1");
$row = mysqli_fetch_array($count);
$count = $row['0']; //количество записей в таблице заказов

echo 'Пользователи, которые не сделали ни одного заказа:';
for ($i=1; $i <= $count; $i++) {
    $data = mysqli_query($mysql, "SELECT user_id FROM orders WHERE id='$i' AND price = 0");
    $row = mysqli_fetch_assoc($data);
    if ($row['user_id'] > 0) {
        $data = mysqli_query($mysql, "SELECT login FROM users WHERE id = ".$row['user_id']."");
        $row = mysqli_fetch_assoc($data);
        echo '<br>'.$row['login'];
    }
}

echo "<br><hr/><br>";

echo 'Пользователи, которые сделали более двух заказов:';
for ($i=1; $i <= $count; $i++) {
    $data = mysqli_query($mysql, "SELECT user_id FROM orders WHERE id='$i' AND price > 2");
    $row = mysqli_fetch_assoc($data);
    if ($row['user_id'] > 0) {
        $data = mysqli_query($mysql, "SELECT login FROM users WHERE id = ".$row['user_id']."");
        $row = mysqli_fetch_assoc($data);
        echo '<br>'.$row['login'];
    }
}
?>


<?
mysqli_close($mysql); //закрываем соединение