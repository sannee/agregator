<?php /* Smarty version Smarty-3.1.8, created on 2012-12-23 21:42:40
         compiled from "View\autorize.tpl" */ ?>
<?php /*%%SmartyHeaderCode:792550d6fa46dc1ec4-46913347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a5d3b0601a74c18f382068d9b0457786f04e5a7' => 
    array (
      0 => 'View\\autorize.tpl',
      1 => 1356291758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '792550d6fa46dc1ec4-46913347',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50d6fa46df04f3_99332307',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d6fa46df04f3_99332307')) {function content_50d6fa46df04f3_99332307($_smarty_tpl) {?><form id='form' action='/index/autorize' method='post'> 
    Логин<br /><input type='text' name='login'> 
    Пароль<br /><input type='password' name='password'>
    <p><input type='submit' name='submit' value='Войти'><a href="/index/registration" style="margin-left: 10px;">Регистрация</a></p> </form>
<?php }} ?>