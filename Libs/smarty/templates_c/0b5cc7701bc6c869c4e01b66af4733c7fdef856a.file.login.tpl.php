<?php /* Smarty version Smarty-3.1.8, created on 2012-06-15 13:26:14
         compiled from "login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184634fa77e2d4c1a38-67633269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b5cc7701bc6c869c4e01b66af4733c7fdef856a' => 
    array (
      0 => 'login.tpl',
      1 => 1339752339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184634fa77e2d4c1a38-67633269',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa77e2d53b044_08647624',
  'variables' => 
  array (
    'login' => 0,
    'fieldsWasFilled' => 0,
    'userIsFound' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa77e2d53b044_08647624')) {function content_4fa77e2d53b044_08647624($_smarty_tpl) {?>
<link rel="stylesheet" type="text/css" href="style.css">
<form action="login.php" method="post" id='lin'>
    <br><br>
    <center>
        <table>
            <tr>
                <td>Логин:</td>
                <td><input type="text" name="login" value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['login']->value);?>
' size="14"/></td>
            </tr>
            <tr>
                <td>Пароль:</td>
                <td><input type="password" name="password" size='14'/></td>
            </tr>

        </table>
        <br>
        <input type="submit" value="Войти" name='logging'/>
        <input type="submit" value="Регистрация" name='registration'/>
    </center>	           
</form>
<?php if ($_smarty_tpl->tpl_vars['fieldsWasFilled']->value==0){?>
    
        <br>
        <noscript>
        <FONT SIZE="+2" COLOR="black">Все поля должны быть заполненны!</FONT>
        </noscript>
        <script>
     alert("Не все поля заполненны");
        </script>
    
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['fieldsWasFilled']->value==1){?>
    <?php if ($_smarty_tpl->tpl_vars['userIsFound']->value==0){?>
        
            <br>
            <noscript>
            <FONT SIZE="+2" COLOR="black">Пользователь с таким логином-паролем не найден!</FONT>
            </noscript>
            <script>
         alert("Пользователь с таким логином-паролем не найден!");
            </script>
        
    <?php }?>
<?php }?><?php }} ?>