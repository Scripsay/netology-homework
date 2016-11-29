<?php
ini_set('display_erors', 1);
error_reporting (E_ALL);
$A= 50; // компьютер задает число
if (isset($_POST['id']))
{
  $id = (int) $_POST['id'];
}
else {
  $id = 0;
}

echo  "Введите число </br>";
if ($id > $A)  {
 if ($id > 150 )  {//Верхняя граница
  echo "Слишком много";
  exit();
 }
 echo "<br>Много, попробуйте еще";
} else if ($id < $A)  {
 if ($id < 0 )  {//Нижняя граница
  echo "Слишком мало <br>";
  exit();
 }
 echo "Маловато, попробуйте еще <br>";
} else {
 echo "Вы угадали! <br>";
 exit();
}

?>
<form action="" method = "post">
  <input name = "id">
  <button> Отправить </form>
</form>
