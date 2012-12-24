<?php /* Smarty version Smarty-3.1.8, created on 2012-12-23 16:41:25
         compiled from "View\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2951350d7171c3ccce5-34738315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02ac4d976f753628c76dbe8faf08a24859e6622f' => 
    array (
      0 => 'View\\login.tpl',
      1 => 1356273604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2951350d7171c3ccce5-34738315',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50d7171c411fc0_68027027',
  'variables' => 
  array (
    'login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d7171c411fc0_68027027')) {function content_50d7171c411fc0_68027027($_smarty_tpl) {?>Здравствуй, <?php echo $_smarty_tpl->tpl_vars['login']->value;?>

<a href="/index/unlogin">Выйти</a><?php }} ?>