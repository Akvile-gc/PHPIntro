<?php

declare(strict_types=1);

function getCities(): array
{
    return [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        [
            'name' => 'Delhi',
            'population' => 29399141,
        ],
        [
            'name' => 'Shanghai',
            'population' => 26317104,
        ],
        [
            'name' => 'Sao Paulo',
            'population' => 21846507,
        ],
        [
            'name' => 'Mexico City',
            'population' => 21671908,
        ],
        [
            'name' => 'New York',
            'population' => 25000000,
        ],
    ];
}

function exercise1(array $array): int
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami paprastu 'foreach' ir grąžinkite ją iš funkcijos.
    Miestus pasiimkite iškvietę funkciją 'getCities'
    */
    $sum = 0;

    foreach ($array as $item){
        $sum += $item['population'];
    };

    return $sum;
}

//var_dump(exercise1(getCities()));
function exercise2(array $array): int
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcijomis array_column ir array_sum
    ir grąžinkite ją iš funkcijos
    */
    $population = array_sum(array_column($array,'population'));

    return $population;
}

//var_dump(exercise2(getCities()));
function exercise3(array $array): int
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcija array_reduce ir grąžinkite ją iš funkcijos
    */
    $population = array_reduce($array, function(int $singlePop, array $cities)
        {
            $sum = $singlePop + $cities['population'];
            return $sum;
        },
        0,
    );

    return $population;
}

//var_dump(exercise3(getCities()));

function exercise4(array $array): int
{
    $filtered = array_filter($array, function(array $value){
        if($value['population'] > 25e6)
            return true;
    }
    );

    $total = array_reduce($filtered, function(int $acc, array $cur){
      $pop = $acc + $cur['population'];
      return $pop;
    },
    0,
    );
    /*
    Suskaičiuokite populiaciją miestų, kurie yra didesni nei 25,000,000 gyventojų.
    Rinkites sau patogiausią skaičiavimo būdą.
    */


//    $getCities = getCities();
//    $sum = 0;
//    foreach($getCities as $city){
//        if($city['population'] > 25000000) {
//            $sum += $city['population'];
//        }
//    }
//
//    return $sum;
    return $total;
}

//var_dump(exercise4(getCities()));
function exercise5(): array
{
    /*
    Grąžinkite masyvą, kuriame būtų tik tie miestai, kurie yra didesni nei 25,000,000 gyventojų
    Rezultatas turi būti tokios pat struktūros, kaip ir pradinis miestų masyvas:
    [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        ...
    ]
    */
    $getCities = getCities();

    $array = array_filter($getCities, function(array $city)
        {
            if($city['population'] > 25e6){
                return true;
            }
        }
    );

    return $array;
}

//var_dump(exercise5());
function exercise6(): int
{

    /*
    Suskaičiuokite ir grąžinkite bendrą užsakymo sumą.
    Prekėms, kurių pavadinimai nurodyti masyve $lowPriceItems, taikykite kainą 'priceLow'.
    Kitoms prekėms taikykite kainą 'priceRegular'.
    Bandykite panaudoti array_* funkcijas.
    */


    $lowPriceItems = ['t-shirt', 'shoes'];

    $orderItems = [
        [
            'name' => 't-shirt',
            'priceRegular' => 15,
            'priceLow' => 13,
            'quantity' => 3,
        ],
        [
            'name' => 'coat',
            'priceRegular' => 74,
            'priceLow' => 60,
            'quantity' => 6,
        ],
        [
            'name' => 'shirt',
            'priceRegular' => 25,
            'priceLow' => 20,
            'quantity' => 2,
        ],
        [
            'name' => 'shoes',
            'priceRegular' => 115,
            'priceLow' => 100,
            'quantity' => 1,
        ],
    ];

    $totalSum = array_reduce($orderItems, function (int $acc, array $item)
        {
            if($item['name'] === 't-shirt' || $item['name'] === 'shoes'){
                $low = $item['priceLow'] * $item['quantity'];
                return $acc + $low;
            } else {
                $reg = $item['priceRegular'] * $item['quantity'];
                return $acc + $reg;
            }
        },
        0,
    );

    return $totalSum;
    //easy way
//    $sum = 0;
//
//    foreach($orderItems as $key => $item){
//        if(array_search($orderItems[$key]['name'], $lowPriceItems, true)){
//            $sum += ($item['priceLow'] * $item['quantity']);
//        } else {
//            $sum += ($item['priceRegular'] * $item['quantity']);
//        }
//    }
//
//    return $sum;
    //it looks like it's counting t-shirt with regular price. Why?
}

var_dump(exercise6());