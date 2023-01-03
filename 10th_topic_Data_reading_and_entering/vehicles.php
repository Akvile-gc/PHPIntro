<?php
declare(strict_types=1);

var_dump($argv);

function addFunction()
{
    $jsonFile = './vehicles_database.json';
    $data = file_get_contents($jsonFile);
    $deserializedData = json_decode($data, true);
    echo 'Add new vehicle' . PHP_EOL;

    $newInfo = function ($array )
    {
        $array["name"] = readline('Vehicle name: ');
        $array["type"] = readline('Vehicle type: ');
        $array["weight"] = readline('Vehicle weight: ');
//        $name = readline('Vehicle name: ') . PHP_EOL;
//        $array["name"] = $name;
//        $type = readline('Vehicle type: ') . PHP_EOL;
//        $array["type"] = $type;
//        $weight = readline('Vehicle weight: ') . PHP_EOL;
//        $array["weight"] = $weight;
    };

    $deserializedData[] = $newInfo; //might need to enter an argument

    $serializedData = json_encode($deserializedData, JSON_PRETTY_PRINT);
    file_put_contents($jsonFile, $serializedData);

    echo 'Vehicle saved!';
}

function listFunction()
{
    $jsonFile = './vehicles_database.json';
    $data = file_get_contents($jsonFile);
    $deserializedData = json_decode($data, true);
    echo '--------';
    foreach ($deserializedData as $key => $dataUnit){
        echo "id: $key";
        echo "type: " . $dataUnit['type'];
        echo "name: " . $dataUnit['name'];
        echo "weight: " . $dataUnit['weight'];
        echo '--------';
    }
}

function showOneFunction()
{
    $jsonFile = './vehicles_database.json';
    $data = file_get_contents($jsonFile);
    $deserializedData = json_decode($data, true);

    $id = readline('Please enter ID of the vehicle');
    foreach ($deserializedData as $key => $dataUnit){
        if($id === $key){
            echo "id: $key";
            echo "type: " . $dataUnit['type'];
            echo "name: " . $dataUnit['name'];
            echo "weight: " . $dataUnit['weight'];
        } else {
            echo 'Vehicle ' . $id . ' does not exist!';
        }
    }
}

function deleteOneFunction()
{
    $jsonFile = './vehicles_database.json';
    $data = file_get_contents($jsonFile);
    $deserializedData = json_decode($data, true);

    $id = readline('Please enter ID of the vehicle to delete');
    foreach ($deserializedData as $key => $dataUnit){
        if($id === $key){
            unset($dataUnit);
            echo 'Vehicle ' . $id . ' deleted!';
        } else {
            echo 'Vehicle ' . $id . ' does not exist!';
        }
    }
}

if ($argv[1] === "add"){
    addFunction();
} elseif ($argv[1] === "list"){
    listFunction();
} elseif ($argv[1] === "show_one"){
    showOneFunction();
} elseif ($argv[1] === "delete_one"){
    deleteOneFunction();
};

