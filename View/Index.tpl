<!DOCTYPE>
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
                {$content}

                {foreach from=$articles item=row}
                    <h2>{$row['header']}</h2>
                    {if $more eq '1'}
                        {$row['body']}
                    {else}
                        {$row['description']} 
                    {/if}

                    <div class="credits">
                        <p class="file"><small>24 Декабря, 2012 г.</small></p>
                        <p class="posted">Действие: {if $more neq '1'}
                            <a href="/index/MoreNews?MoreID={$row['id']}">Подробнее</a> | {/if}
                            <a href="/index/deleteNews?delete_id={$row['id']}">Удалить</a></p>
                    </div>
                {/foreach }
            </div>
            <div id="colTwo">
                <ul>
                    <li>
                        <h2>Авторизация</h2>
                        <ul>
                            {$autorize}
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
</html>