<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="/style.css" />
    <title>お問い合わせ</title>
</head>

<body>
<div id="wrap">
    <div id="head">
        <h1>お問い合わせ</h1>
    </div>

    <div id="content">
        <?php print(Form::open('contact/check')); ?>
        <?php print(Form::label('お名前', 'myname')); ?>
        <?php print(Form::input('myname')); ?>
        <?php print(Form::submit('submit', '送信する')); ?>
        <?php print(Form::close()); ?>
    </div>

    <div id="foot">
        <p>&copy; OMOKAJI</p>
    </div>

</div>
</body>
</html>