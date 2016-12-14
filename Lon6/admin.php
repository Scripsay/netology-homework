<?php
include 'functions.php';
 if (isPOST()) {
        if(!uploadFile('test', getUploadedFileClientName())) {
            echo 'Файл не смог загрузиться';
            die;
        }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Загрузка теста на сервер</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
    <? if(isGET()): ?>
    <div>
        <label for="name">Тест </label>
        <input type="file" id="test" name="test"/>
    </div>
    <button type="submit">Отправить</button>
    <? else: ?>
        Здравствуйте, тесты загружены <br/>
    <? endif; ?>
</form>
</body>
</html>
