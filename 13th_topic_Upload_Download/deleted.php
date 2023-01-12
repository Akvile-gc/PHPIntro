<?php
$existingData = file_get_contents('meta.json');
$deserializedData = json_decode($existingData, true);

foreach ($deserializedData as $file){
    foreach ($file as $image){
        if ($_POST['idDelete'] == $image['unique_id']){
            echo "Let's delete the image " . $image['unique_id'];
//            unlink('./data/' . $image['unique_id']);
//            unset($file);
        }
    }
}