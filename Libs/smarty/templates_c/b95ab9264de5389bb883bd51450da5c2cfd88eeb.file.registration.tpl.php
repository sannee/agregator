<?php /* Smarty version Smarty-3.1.8, created on 2012-06-15 13:23:33
         compiled from "registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:272684fa7886ea01e53-60271485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b95ab9264de5389bb883bd51450da5c2cfd88eeb' => 
    array (
      0 => 'registration.tpl',
      1 => 1339751687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272684fa7886ea01e53-60271485',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa7886ea695a8_81304593',
  'variables' => 
  array (
    'login' => 0,
    'email' => 0,
    'FieldsWasFilled' => 0,
    'emailIsCorrect' => 0,
    'passwordsMatch' => 0,
    'loginIsFree' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa7886ea695a8_81304593')) {function content_4fa7886ea695a8_81304593($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="style.css">
<form action="registration.php" method="post">
    <br><br>
    <center>
        <table>
            <td>Логин:</td>
            <td><input type="text" name="login" size="14" value='<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
' id="1"  /></td>
            </tr>
            <tr>
                <td>email:</td>
                <td> <input type="text" name="email" size=14 value='<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
'>  </td>
            </tr>
            <tr>
                <td>Пароль:</td>
                <td><input type="password" name="password1" size=14 id="2"/></td>
            </tr>
            <tr>
                <td>Еще раз пароль<td>
                    <input type="password" name="password2" size=14 id="3"/>
            </tr>
        </table>
        <br>
        <input type="submit" value="Регистрация" name='registration'/>
    </center>	           
</form>

<?php if ($_smarty_tpl->tpl_vars['FieldsWasFilled']->value==0){?>
    
        <br>
        <noscript>
        <FONT SIZE="+2" COLOR="black">Все поля должны быть заполненны!</FONT>
        </noscript>
        <script> alert("Все поля должны быть заполненны") </script>
    
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['emailIsCorrect']->value==0){?>
    
        <br>
        <noscript>
        <FONT SIZE = "+2" COLOR = "black">Email введен не верно</FONT>
        </noscript>
        <script> alert("Email введен не верно") </script>
    
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['passwordsMatch']->value==0){?>
    
        <br>
        <noscript>
        <FONT SIZE = "+2" COLOR = "black">Пароли не совпадают</FONT>
        </noscript>
        <script> alert("Пароли не совпадают") </script>
    
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['loginIsFree']->value==0){?>
    
        <br>
        <noscript>
        <FONT SIZE = "+2" COLOR = "black">Такой пользователь уже существует</FONT>
        </noscript>
        <script> alert("Такой пользователь уже существует") </script>
    
<?php }?><?php }} ?>