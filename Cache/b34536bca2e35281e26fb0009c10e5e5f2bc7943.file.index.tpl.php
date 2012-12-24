<?php /* Smarty version Smarty-3.1.8, created on 2012-12-24 08:21:39
         compiled from "View\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55750d0d2cda1cc29-92560970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b34536bca2e35281e26fb0009c10e5e5f2bc7943' => 
    array (
      0 => 'View\\index.tpl',
      1 => 1356293368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55750d0d2cda1cc29-92560970',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50d0d2cda4dea6_29289960',
  'variables' => 
  array (
    'content' => 0,
    'articles' => 0,
    'row' => 0,
    'more' => 0,
    'autorize' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d0d2cda4dea6_29289960')) {function content_50d0d2cda4dea6_29289960($_smarty_tpl) {?><!DOCTYPE>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>RSS-агрегатор</title>
        <link href="/skins/controlstyle.css" rel="stylesheet" type="text/css" />
        <link href="/skins/default.css" rel="stylesheet" type="text/css" />

    </head
    <body>
        <div id="header">
            <h1>RSS-агрегатор</h1>
        </div>
        <div id="content">
            <div id="colOne">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>


                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <h2><?php echo $_smarty_tpl->tpl_vars['row']->value['header'];?>
</h2>
                    <?php if ($_smarty_tpl->tpl_vars['more']->value=='1'){?>
                        <?php echo $_smarty_tpl->tpl_vars['row']->value['body'];?>

                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
 
                    <?php }?>

                    <div class="credits">
                        <p class="file"><small>24 Декабря, 2012 г.</small></p>
                        <p class="posted">Действие: <?php if ($_smarty_tpl->tpl_vars['more']->value!='1'){?>
                            <a href="/index/MoreNews?MoreID=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Подробнее</a> | <?php }?>
                            <a href="/index/deleteNews?delete_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Удалить</a></p>
                    </div>
                <?php } ?>
            </div>
            <div id="colTwo">
                <ul>
                    <li>
                        <h2>Авторизация</h2>
                        <ul>
                            <?php echo $_smarty_tpl->tpl_vars['autorize']->value;?>

                        </ul>
                    </li>
                    <li>
                        <h2>Меню</h2>
                        <ul>
                            <li><a href="/"><b>Главная</b></a></li>
                            <li><a href="/channels"><b>Упрвление каналами</b></li>

                        </ul>
                    </li>
                    <li>
                        <h2>Интересные ссылки</h2>
                        <ul>
                            <li><a href="#">Википедия</a></li>
                            <li><a href="#">Новости науки</a></li>
                            <li><a href="#">Компьютерные новости</a></li>
                            <li><a href="#">Софт</a></li>
                            <li><a href="#">Список RSS-лент</a></li>
                            <li><a href="#">Google</a></li>
                            <li><a href="#">yandex.ru</a></li>
                            <li><a href="#">nigma.ru</a></li>
                        </ul>
                    </li>
                    <li>
                        <h2>О разработчике</h2>
                        <ul>
                            <li><a href="#">Блог разработчика</a></li>
                            <li><a href="mailto:sannee@yandex.ru">Почта</a></li>
                            <li><a href="http://vk.com/dergachev_alexandr">Я Вконтакте</a></li>
                            <li><a href="http://www.facebook.com/profile.php?id=100002460896583">Я в Facebook</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div id="footer">
            <p>&copy; Дергачев Александр, 2012</p>
        </div>
    </body>
</html><?php }} ?>