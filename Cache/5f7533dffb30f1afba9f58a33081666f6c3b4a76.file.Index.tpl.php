<?php /* Smarty version Smarty-3.1.8, created on 2012-12-23 22:09:30
         compiled from "View\Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1699750cf71f8e339e1-43512106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f7533dffb30f1afba9f58a33081666f6c3b4a76' => 
    array (
      0 => 'View\\Index.tpl',
      1 => 1356293368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1699750cf71f8e339e1-43512106',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50cf71f8e73180_57543058',
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
<?php if ($_valid && !is_callable('content_50cf71f8e73180_57543058')) {function content_50cf71f8e73180_57543058($_smarty_tpl) {?><!DOCTYPE>
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