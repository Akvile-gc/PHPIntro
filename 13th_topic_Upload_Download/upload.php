<?php
//var_dump($_FILES);
$type = $_FILES['my_file']['type'];
$size = $_FILES['my_file']['size'];
$error = $_FILES['my_file']['error'];
//ini_set("upload_max_filesize", '1M');
//phpinfo();


if (($type === 'image/jpeg' || $type === 'image/png') && $size <= 1000000){
    if ($error !== UPLOAD_ERR_OK){
        echo 'Error uploading the file';
        die();
    }

    $existingData = file_get_contents('meta.json');
    $deserializedData = json_decode($existingData, true);

    $uploadFileName = $_FILES['my_file']['name'];
    $fileSavePath = './data/' . uniqid() . '_' . $uploadFileName;
    $tempFilePath = $_FILES['my_file']['tmp_name'];
    move_uploaded_file($tempFilePath, $fileSavePath);

    $date = new DateTime();
    $formattedDate = $date -> format('Y-m-d H:i');
    $_FILES['my_file']['time'] = $formattedDate;

    $deserializedData[] = $_FILES;
    $serializedData = json_encode($deserializedData, JSON_PRETTY_PRINT);
    file_put_contents('meta.json', $serializedData);
    echo 'Upload successful';
} else {
    echo 'Wrong file. Please upload jpeg or png type file which is 1MB or less';
    die();
}