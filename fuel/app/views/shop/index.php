<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="/style.css" />
    <title>ショップサイト</title>
</head>

<body>
<div id="wrap">
    <div id="head">
        <h1>ショップサイト</h1>
    </div>

    <div id="content">
        <ul>
                <?php foreach($rows as $row): ?>
                <li><?php print($row['item_name']); ?> / <?php print($row['price']); ?></li>
                <?php endforeach; ?>
        </ul>
    </div>

    <div id="foot">
        <p>&copy; OMOKAJI</p>
    </div>

</div>
</body>
</html>
