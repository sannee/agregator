<?php /* Smarty version Smarty-3.1.8, created on 2012-12-23 00:49:24
         compiled from "View\Channels.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2080450d0cad5baeea1-55090105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62f4dd4915544bcf288bf35ddca6c030a5ce8546' => 
    array (
      0 => 'View\\Channels.tpl',
      1 => 1356216549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2080450d0cad5baeea1-55090105',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50d0cad5c57391_19033567',
  'variables' => 
  array (
    'table' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d0cad5c57391_19033567')) {function content_50d0cad5c57391_19033567($_smarty_tpl) {?>
<table class="channels">
    <caption>Список RSS Каналов</caption>

    <tr class="context">
        <td align="center">ID</td>
        <td align="center">URL RSS Канала</td>

        <td align="center">Действие</td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
        <tr>
            <td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
            <td align="center"><input type="text" size="40" value=<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
 ></td>

            <td align="center">
                <div class='menu'>
                    <ul > 
                        <li><a href="#">Меню</a> 
                            <ul> 
                                <li><a href="channels/importNews?import_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">импорт</a></li> 
                                <li><a href="channels/editChannel?change_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" >изменить</a></li> 
                                <li><a href="channels/deleteChannel?delete_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">удалить</a></li> 
                            </ul> 
                        </li> 
                    </ul>
                </div>
        </tr>
    <?php } ?>
</table>
<form method="POST" action="Channels/addpage">
    <input value="Добавить канал" type="submit">
</form>
<?php }} ?>