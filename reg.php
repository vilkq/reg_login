<form action='reg_insert.php' method="post" name="form" id="form">
    <table cellspacing="1" cellpadding="4">
        <tr>
            <td width="100">E-Mail:</td>
                <td width="300"><input type="email" name="email" id="email" size="55" autocomplete="off" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" value="<? echo $_POST['email']; ?>" /></td>
        </tr>
        <tr>
            <td width="100">Login:</td>
                <td width="300"><input type="text" name="login" id="login" size="55" autocomplete="off" required pattern="[a-z1-9]+" value="<? echo $_POST['login']; ?>" /></td>
        </tr>
        <tr>
            <td width="100">Password:</td>
                <td width="300"><input type="password" name="pass" id="pass" size="55" autocomplete="off" required pattern="[a-zA-Z1-9]+" value="<? echo $_POST['pass']; ?>" /></td>
        </tr>
        <tr><td colspan="2"><hr /></td></tr>
        <tr>
            <td width="100">ФИО:</td>
                <td width="300"><input type="text" name="name" id="name" size="92" autocomplete="off" required pattern="[/^[А-ЯЁ][а-яё]{2,}([-][А-ЯЁ][а-яё]{2,})?\s[А-ЯЁ][а-яё]{2,}\s[А-ЯЁ][а-яё]{2,}$/]" value="<? echo $_POST['name']; ?>" /></td>
        </tr>
    </table>
    <tr><br></tr>
<input type="submit" value="Регистрация" name="reg" /> — Если логин свободен, то после регистрации Вы будете перенаправлены на страницу входа.
</form>
