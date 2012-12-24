
<table class="channels">
    <caption>Список RSS Каналов</caption>

    <tr class="context">
        <td align="center">ID</td>
        <td align="center">URL RSS Канала</td>

        <td align="center">Действие</td>
    </tr>
    {foreach from=$table item=row}
        <tr>
            <td align="center">{$row['id']}</td>
            <td align="center"><input type="text" size="40" value={$row['url']} ></td>

            <td align="center">
                <div class='menu'>
                    <ul > 
                        <li><a href="#">Меню</a> 
                            <ul> 
                                <li><a href="channels/importNews?import_id={$row['id']}">импорт</a></li> 
                                <li><a href="channels/editChannel?change_id={$row['id']}" >изменить</a></li> 
                                <li><a href="channels/deleteChannel?delete_id={$row['id']}">удалить</a></li> 
                            </ul> 
                        </li> 
                    </ul>
                </div>
        </tr>
    {/foreach}
</table>
<form method="POST" action="Channels/addpage">
    <input value="Добавить канал" type="submit">
</form>
