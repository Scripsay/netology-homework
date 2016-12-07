<?php
define('DATA_JSON_FILE', __DIR__ . '/phonebook.json');


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
        if (strcasecmp($item['what'], $what) == 0) {
            $result[] = $item;
        }
    }
    return $result;
}

function getQueryParam($name, $defaultValue = null)
{
    return isset($_GET[$name]) ? $_GET[$name] : $defaultValue;
    
}
