<?php /* Smarty version Smarty-3.1.8, created on 2012-12-18 21:55:36
         compiled from "View\Panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1497250d0b35e074789-49125064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e50fe23b18b37288fd41a3e8c01cb258eeb58932' => 
    array (
      0 => 'View\\Panel.tpl',
      1 => 1355860533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1497250d0b35e074789-49125064',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50d0b35e168a52_63190039',
  'variables' => 
  array (
    'table' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d0b35e168a52_63190039')) {function content_50d0b35e168a52_63190039($_smarty_tpl) {?><table>
<caption>Список RSS Каналов</caption>
  <tr class="context">
   <td align="center">ID</td>
   <td align="center">URL RSS Канала</td>
   <td align="center">Краткое описание</td>
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
   <td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
</td>
   <td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</td>
   <td align="center">
<ul> 
    <li><a href="#">Меню</a> 
      <ul> 
        <li><a href="#">импортировать</a></li> 
        <li><a href="#">изменить</a></li> 
        <li><a href="#">удалить</a></li> 
      </ul> 
    </li> 
</ul>
  </tr>
          
<?php } ?>

</table>
<form method="GET" id="addChanalForm">
                    <button name="addChanel" value="yes">Добавить канал</button>
                </form>
<?php }} ?>