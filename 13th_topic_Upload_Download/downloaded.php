<?php
$existingData = file_get_contents('meta.json');
$deserializedData = json_decode($existingData, true);

foreach ($deserializedData as $file){
    foreach ($file as $image){
        if ($_POST['id'] == $image['unique_id']){
            $file = '/data/' . $image['unique_id'];
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($file) . '"');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            die();
        }
    }
}