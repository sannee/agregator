<?php /* Smarty version Smarty-3.1.8, created on 2012-12-23 01:04:37
         compiled from "View\ImportNews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2528950d5cf30926f24-88227394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4777687d79e4b43411f6b394454d45339cbb0b13' => 
    array (
      0 => 'View\\ImportNews.tpl',
      1 => 1356217473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2528950d5cf30926f24-88227394',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50d5cf3096aff5_15382660',
  'variables' => 
  array (
    'table' => 0,
    'row' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d5cf3096aff5_15382660')) {function content_50d5cf3096aff5_15382660($_smarty_tpl) {?><form method="POST" id="addChanalForm" action="">
    <table class="import">
        <caption>Список RSS Каналов</caption>
        <tr class="context">

            <td align="center">Title</td>
            <td align="center">Действие</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['table']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
            <tr>
                <td align="center"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></td>
                <td align="center">
                    <input type="checkbox" name="import_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="import" checked>
                </td>
            </tr>
        <?php } ?>
    </table>

    <input value="Добавить в БД" type="submit">
    <input value="pressed" type="hidden" name="importBtn">
</form><?php }} ?>