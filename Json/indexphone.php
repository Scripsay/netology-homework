<?php
    include  'functionphone.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Телефонная книжка</title>
</head>
<body>
    <table border="1">
        <?php foreach (getRecords() as $record): ?>
            <tr>
              <td><?= $record['fistName'] ?></td>
              <td><?= $record['lastName'] ?></td>
              <td><?= $record['address'] ?></td>
              <td><?= $record['phoneNumber'] ?></td>
            </tr>
        <? endforeach; ?>
    </table>
</body>
</html>
