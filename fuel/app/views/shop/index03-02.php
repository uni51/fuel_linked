<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商品一覧</title>
</head>

<body>

<ul>
    <?php foreach ($rows as $row): ?>
        <li><?php print($row['item_name']); ?> / <?php print($row['price']); ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>
