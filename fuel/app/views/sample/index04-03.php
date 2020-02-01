<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/style.css">
    <title>HTMLをそのまま受け渡す</title>
</head>

<body>
<div id="wrap">
    <div id ="head">
        <h1>HTMLをそのまま受け渡す</h1>
    </div>

    <div id="content">
        <p><?php print($html); ?></p>
        <p><?php print($danger); ?></p>
    </div>

    <div id="foot">
        <p>&copy; OMOKAJI</p>
    </div>
</div>
</body>
</html>
