<?php
function getQueryParam($name)
{
    return isset($_REQUEST[$name]) ? $_REQUEST[$name] : null;
}
/**
 * @param string $fieldName Имя поля формы
 * @param string $newName Новое имя загружаемого файла
 */
function uploadFile($fieldName, $newName)
{
    $newPath = __DIR__ . '/Tests';
    $tmpFile = $_FILES[$fieldName]['tmp_name'];
    if(!move_uploaded_file($tmpFile, $newPath . '/' . $newName)) {
       return false;
    } else {
        return true;
    }
}
function isPOST()
{
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}
function isGET()
{
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}
function getUploadedFileClientName()
{
    return isset($_FILES['test']) ? $_FILES['test']['name'] : null;
}
function getUploadedFileNewName()
{
    return md5(getUploadedFileClientName()) . '.json';
}
/*function isAllowedExt($imageName)
{
    $allowedExt = ['json', 'jpg', 'jpeg'];
    if (!in_array(getExtFile($imageName), $allowedExt)) {
        return false;
    } else {
        return true;
    }
}*/
function getExtFile($fileName)
{
    return substr($fileName, strrpos($fileName, '.') + 1);
}
define('DATA_JSON_FILE', __DIR__ . '/data.json');


function getRecords() {
    if (!file_exists(DATA_JSON_FILE)) {
        return [];
    }
    $json = file_get_contents(DATA_JSON_FILE);
    $arrayData = @json_decode($json, true);
    if (!empty($arrayData)) {
        return $arrayData;
    }
    return [];
}

function searchWhatItems($what)
{
    $data = getRecords();
    if (empty($what)) {
        return $data;
    }
    $result = [];
    foreach ($data as $item) {
        if (strcasecmp($item['correct_answer'], $what) == 0) {
            $result[] = $item;
        }
    }
    return $result;
}
