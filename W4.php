<?php

error_reporting (E_ALL);



$files = scandir('/img');
foreach($files as $file){
    if($file != '.' || $file != '..'){
        $ext = array('jpg', 'gif', 'png');
        $file1 = explode(".", $file);
        if(in_array($file1[1], $ext)){
            $date = date ("F d Y H:i:s.", filemtime($file));
            $list[] = array($file, filesize($file),  $date);
            $fp = fopen('file.csv', 'w');
            foreach ($list as $fields) {
                fputcsv($fp, $fields);
            }
            fclose($fp);
        }
    }
}

$row = 1;
if (($handle = fopen("file.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
          }
    fclose($handle);
    $images = scandir('/img');
    if (false !== $images) {
    $images = preg_grep('/\\.(?:png|gif|jpe?g)$/', $images);
    foreach ($images as $image)
    echo '<div class=post><a href=/img/' . htmlspecialchars(urlencode($image)) . ' target=_blank ><img src=/img/' . htmlspecialchars(urlencode($image)) . ' width=390 height=180 /></a></div>';
    }
}
