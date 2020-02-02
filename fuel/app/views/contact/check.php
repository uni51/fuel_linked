<?php print(Form::open('contact/check')); ?>
<table>
    <tr>
        <th>お名前</th>
        <td><?php print($myname); ?></td>
    </tr>
    <tr>
        <th>メールアドレス</th>
        <td><?php print($email); ?></td>
    </tr>
    <tr>
        <th>性別</th>
        <td><?php print($gender); ?></td>
    </tr>
    <tr>
        <th></th>
        <td><?php print(Form::submit('submit', '送信する')); ?></td>
    </tr>
</table>
<?php print(Form::close()); ?>
