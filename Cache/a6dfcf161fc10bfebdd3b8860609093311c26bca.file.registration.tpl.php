<?php /* Smarty version Smarty-3.1.8, created on 2012-12-23 21:45:03
         compiled from "View\registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1879950d73d3ca1ded1-09633977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6dfcf161fc10bfebdd3b8860609093311c26bca' => 
    array (
      0 => 'View\\registration.tpl',
      1 => 1356291884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1879950d73d3ca1ded1-09633977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50d73d3ca4b409_02699544',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d73d3ca4b409_02699544')) {function content_50d73d3ca4b409_02699544($_smarty_tpl) {?><div id="div-regForm">
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
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }} ?>