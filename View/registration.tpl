<div id="div-regForm">
    <div class="form-title">Регистрация</div>

    <form id="regForm" action="/index/registration" method="post">
        <table>
            <tbody>

                <tr>
                    <td><label for="email">Логин:</label></td>
                    <td><div class="input-container">
                            <input name="login" id="login-box" type="text" />
                        </div></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><div class="input-container">
                            <input name="email" id="login-box" type="text" />
                        </div></td>
                </tr>

                <tr>
                    <td><label for="pass">Пароль:</label></td>
                    <td><div class="input-container">
                            <input name="pass1" id="pass" type="password" />
                        </div></td>
                </tr>

                <tr>
                    <td><label for="pass">Подтверждение пароля:</label></td>
                    <td><div class="input-container">
                            <input name="pass2" id="pass" type="password" />
                        </div></td>
                </tr>

                <tr>

                    <td><input type="submit" name="reg" class="greenButton" value="Регистрация" />

                    </td>
                </tr>
            </tbody>
        </table>
    </form>

</div>
{$error}