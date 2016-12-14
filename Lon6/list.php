
<?php
  include  'functions.php';

  $data = json_decode(file_get_contents('data.json'), true);
$dir    = __DIR__ . '/Tests';

$f = scandir($dir);

foreach ($f as $file){
    if(preg_match('/\.(json)/', $file)){
        echo $file.'<br/>';
    }
}
