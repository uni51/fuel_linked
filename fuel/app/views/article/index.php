<p>Index</p>

<?php foreach ($rows as $row): ?>
    <h2><?php print($row->title); ?></h2>

    <p><?php print($row->body); ?></p>

    <h3>コメント</h3>

    <ul>
        <?php foreach($row->comments as $c): ?>
            <li><?php print($c->comment); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endforeach; ?>
