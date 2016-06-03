<?php
$file = __DIR__.'/data.json';
if (!is_writable($file)) {
    exit('File is not rewritable');
}
$data = json_decode(stripslashes(file_get_contents('data.json')),1);
$object = array();
foreach ($_REQUEST as $key=>$value) {
    $object[$key] = $value;
}
$data[] = $object;
$data = json_encode($data);
file_put_contents('data.json',$data);
echo 'OK';