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

if ($id > $A)
  {
    echo "Много, попробуйте еще";
  }
if ($id===$A)
  {
    echo "Вы угадали!";
    }
if ($id < $A)
  {
    echo "Маловато, попробуйте еще";
    }



?>
<form action="" method = "post">
  <input name = "id">
  <button> Отправить </form>
</form>
