<?php
    include  'functions.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Поиск по телефонной книжке</title>
</head>
<body>
    <table border="1">
        <?php foreach (searchWhatItems(getQueryParam('what')) as $record): ?>
            <tr>
                <td><?= $record['fistName'] ?></td>
                <td><?= $record['lastName'] ?></td>
                <td><?= $record['address'] ?></td>
                <td><?= $record['phoneNumbe'] ?></td>
            </tr>
        <? endforeach; ?>
    </table>
</body>
</html>
