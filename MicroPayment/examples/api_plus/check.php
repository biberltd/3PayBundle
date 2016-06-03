<?php
$id = $_REQUEST['id'];
$file = __DIR__.'/data.json';
if (!is_readable($file)) {
    exit('File is not readable');
}
$data = json_decode(stripslashes(file_get_contents('data.json')),1);
$state = 0;
$found = false;
foreach ($data as $item) {
    if (isset($item['order'])) {
        if ($item['order'] == $id) {
            $state = $item['state'];
        }
    }
}
echo $state;
