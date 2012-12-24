
<form action="{$action}" method="POST">

    <table class = "change">

        <caption>Добавнение канала</caption>
        <tr>
            <td>Количество новостей:</td>
            <td><input name="numNews" type='text'size="5" value="{$numNews}" onkeyup="this.value = this.value.replace (/\D+/, '')"></td>
        </tr>
        <tr>
            <td>URL канала:</td>
            <td><input name="url" type='text'size="40" value="{$url}"></td>
        </tr>
        <tr>
            <td><span>Краткое описание:</span></td>
            <td><textarea name="description" maxlength="500" cols="40" rows="5">{$description}</textarea> </td>
        </tr>

    </table>
    <input name="button" type="submit" value="{$buttonText}">
    <input name="{$PressButton}" type="hidden" value="yes">
</form>
{$numError}
{$urlError}