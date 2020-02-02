<?php print(Form::open('contact/check')); ?>
    <table>
        <tr>
            <th><?php print(Form::label('お名前', 'myname')); ?></th>
            <td><?php print(Form::input('myname')); ?></td>
        </tr>
        <tr>
            <th><?php print(Form::label('メールアドレス', 'email')); ?></th>
            <td><?php print(Form::input('email')); ?></td>
        </tr>
        <tr>
            <th><?php print(Form::label('性別', 'gender')); ?></th>
            <td><?php print(Form::radio('gender', '男性', array('id'=>'form_gender_male'))); ?> <?php print(Form::label('男性', 'gender_male')); ?>　<?php print(Form::radio('gender', '女性', array('id'=>'form_gender_female', 'checked'=>'checked'))); ?> <?php print(Form::label('女性', 'gender_female')); ?></td>
        </tr>
        <tr>
            <th></th>
            <td><?php print(Form::submit('submit', '送信する')); ?></td>
        </tr>
    </table>
<?php print(Form::close()); ?>