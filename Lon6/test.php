<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Загрузка теста на сервер</title>
</head>
<body>
  <form method="get" action="test.php">
<?php
include 'functions.php';
/* if (isPOST()) {
        if(!uploadFile('test', getUploadedFileClientName())) {
            echo 'Файл не смог загрузиться';
            die;
        }
}*/
$found = false;
$method = $_SERVER['REQUEST_METHOD'];
$type = ($method == 'GET' ? INPUT_GET : INPUT_POST);
$answer = filter_input($type,'answer0');
$testId = filter_input($type, 'testId');
$quest = [];
    $data = json_decode(file_get_contents($testId.'.json'), true);
    if ($answer != null) {
      echo "bla";
    } else {
    $id = 0;
    foreach ($data as $quest) {
        echo $quest['question'] ?>
      <input type="text" name="answer" placeholder="введите ответ" id="answer<?php echo $id;?>"></br>
      <?php $id++?>
<?php
    }
  }
  #  foreach ($data as $value) {
  #    echo $value['correct_answer'];
#  }
?>

<?php if (isGET()): ?>

        <input type="hidden" id="testId" value="<?php echo  $testId.'.json'?>">

        <input type="submit">
  </form>
  <?php endif; ?>
</body>
</html>
