<?php /* Smarty version Smarty-3.1.8, created on 2012-12-23 21:55:39
         compiled from "View\AddChannel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:842450d0d2458398e4-15141442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ae2eb4edba568b8db76aeeb63b0df4e611b895' => 
    array (
      0 => 'View\\AddChannel.tpl',
      1 => 1356292535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '842450d0d2458398e4-15141442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50d0d245861ed4_14189695',
  'variables' => 
  array (
    'action' => 0,
    'numNews' => 0,
    'url' => 0,
    'description' => 0,
    'buttonText' => 0,
    'PressButton' => 0,
    'numError' => 0,
    'urlError' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d0d245861ed4_14189695')) {function content_50d0d245861ed4_14189695($_smarty_tpl) {?>
<form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">

    <table class = "change">

        <caption>Добавнение канала</caption>
        <tr>
            <td>Количество новостей:</td>
            <td><input name="numNews" type='text'size="5" value="<?php echo $_smarty_tpl->tpl_vars['numNews']->value;?>
" onkeyup="this.value = this.value.replace (/\D+/, '')"></td>
        </tr>
        <tr>
            <td>URL канала:</td>
            <td><input name="url" type='text'size="40" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"></td>
        </tr>
        <tr>
            <td><span>Краткое описание:</span></td>
            <td><textarea name="description" maxlength="500" cols="40" rows="5"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</textarea> </td>
        </tr>

    </table>
    <input name="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['buttonText']->value;?>
">
    <input name="<?php echo $_smarty_tpl->tpl_vars['PressButton']->value;?>
" type="hidden" value="yes">
</form>
<?php echo $_smarty_tpl->tpl_vars['numError']->value;?>

<?php echo $_smarty_tpl->tpl_vars['urlError']->value;?>
<?php }} ?>