<form method="POST" id="addChanalForm" action="">
    <table class="import">
        <caption>Список RSS Каналов</caption>
        <tr class="context">

            <td align="center">Title</td>
            <td align="center">Действие</td>
        </tr>
        {foreach from=$table item=row key=k}
            <tr>
                <td align="center"><a target="_blank" href="{$row['link']}">{$row['title']}</a></td>
                <td align="center">
                    <input type="checkbox" name="import_{$k}" value="import" checked>
                </td>
            </tr>
        {/foreach}
    </table>

    <input value="Добавить в БД" type="submit">
    <input value="pressed" type="hidden" name="importBtn">
</form>