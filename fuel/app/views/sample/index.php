<p>お問い合わせありがとうございます。</p>
<form action="/sample/check" method="post">
    <table>
        <tr>
            <th>お名前</th>
            <td><input type="text" name="myname" size="35" value="<?php print($myname); ?>" /></td>
        </tr>
        <tr>
            <th></th>
            <td>...</td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="送信" /></td>
        </tr>
    </table>
</form>

<?php print(View::forge('parts/news')); ?>
