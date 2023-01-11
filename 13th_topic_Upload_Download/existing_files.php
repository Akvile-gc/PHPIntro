<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>

        </tr>
    </table>

</body>
</html>

<?php
////<!--2. Pridėti puslapį, kuriame būtų atvaizduojami visi pauplodinti failai. Turėtų būti matoma:-->
////<!--- failo pavadinimas (kokį buvo priskyręs vartotojas)-->
////<!--- failo dydis-->
////<!--- įkėlimo data-->
////<!--Paspaudus ant tam tikro failo turėtų jį parsiųsti į vartotojo kompiuterį.-->
//

function gettingMeta(string $source) //source will be 'meta.json'
    {
        $existingData = file_get_contents($source);
        $deserializedData = json_decode($existingData, true);

        echo 'Already uploaded files:' . PHP_EOL;
        //var_dump($deserializedData);
        foreach ($deserializedData as $file){
            foreach ($file as $image){
                echo 'File name: ' . $image['name'] . PHP_EOL;
                echo 'File size: ' . $image['size'] . PHP_EOL;
                echo 'Upload date: ' . $image['time'] . PHP_EOL;
            }
        }
    }
function gettingImg(string $idInfo, string $imgInfo) //source will be 'meta.json'
{
    $existingData = file_get_contents($idInfo);
    $deserializedData = json_decode($existingData, true);
    foreach ($deserializedData as $file){
        foreach ($file as $id){
            $picturePath = '/data/' . $id['unique_id'];
            return $picturePath;
        }
    }
}
