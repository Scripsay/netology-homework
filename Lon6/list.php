
<?php
    include  'functions.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список тестов</title>
</head>
<body>
    <table border="1">
        <?php foreach (getRecords() as $record): ?>
            <tr>
                <td><? $dir    = __DIR__ . '/Test';
                $files1 = scandir($dir);
                list ($List1, $List2) = $files1; ?> </td>

            </tr>
        <? endforeach; ?>
    </table>
</body>
</html>
