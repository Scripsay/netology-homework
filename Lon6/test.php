<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Загрузка теста на сервер</title>
</head>
<body>
  <form method="GET" action="test.php">
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
    $id = 0;
    if ($answer != null) {
        foreach ($data as $quest) {
            $answerTmp = filter_input($type, 'answer'.$id);
            echo $quest['question']." ";
            if ($answerTmp === strval($quest['correct_answer'])) {
              echo "Yes!";
            } else {
              echo "No(";
            }
            echo "<br>"; 
            $id++;
            #echo $quest['correct_answer'].'<br>' ;
        }
    } else {
      foreach ($data as $quest) {
          echo $quest['question'] ?>
        <input type="text" name="answer<?php echo $id;?>" placeholder="введите ответ"></br>
        <?php $id++?>
<?php
    }
}
  #  foreach ($data as $value) {
  #    echo $value['correct_answer'];
#  }
?>

<?php if (isGET()): ?>
      <input type="hidden" name="testId" value="<?php echo  $testId ?>">

        <input type="submit">
  </form>
  <?php endif; ?>
</body>
</html>
