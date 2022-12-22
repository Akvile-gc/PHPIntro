<?php
declare(strict_types=1);

function exercise1(): array
{
    $products = [
        'item_1' => 'desk',
        'item_2' => 'lamp',
        'item_3' => 'error',
        'item_4' => 'sofa',
        'item_5' => 'error',
    ];

    foreach ($products as $key => $product){
        if($product === 'error'){
            unset($products[$key]);
        }
    }

    /*
    Sunaikinkitę visus elementus, kurių reikšmė yra 'error' ir grąžinkite pamodifikuotą masyvą.
    Tikėkitės, kad $products masyvas gali turėti ne 5, 100 elementų - naudokite ciklą.
    */

    return $products;
}
//var_dump(exercise1());

function exercise2(int $keyPart): array
{
    $products = [
        'product_1' => 'desk',
        'product_2' => 'lamp',
        'product_3' => 'sofa',
    ];

    /*
    Sunaikinkitę reikšmę, kuri atitiktų raktą 'product_' + $keyPart ir grąžinkite pamodifikuotą masyvą.
    Jeigu tokio rakto nėra, gražinkite null. Pridėkite trūkstamą return tipą.
    Funkcijos kvietimas: exercise2(1)
    */

    foreach ($products as $key => $product) {
        if($key === 'product_' . $keyPart) {
            unset($products[$key]);
        }
    }

    return $products;
}

//var_dump(exercise2(1));

function exercise3(): array
{
    $transactions = [
        [
            'total' => 200,
            'status' => 'error',
        ],
        [
            'total' => 150,
            'status' => 'completed',
        ],
    ];

    foreach ($transactions as $key => $transaction){
        if($transaction['status'] === 'error'){
                unset($transactions[$key]);
        };
    };

    /*
    Sunaikinkitę visus elementus, kurių reikšmė yra 'error' ir grąžinkite pamodifikuotą masyvą.
    Tikėkitės, kad $products masyvas gali turėti ne 5, 100 elementų - naudokite ciklą.
    */
    return $transactions;
}

//var_dump(exercise3());

function exercise4(string $key): string
{
    $products = [
        'product_1' => 'shirt',
        'product_2' => 'trousers',
        'product_98' => 'coat',
    ];
    /*
    Funkcija turi grąžinti reikšmę pagal paduota raktą.
    Jeigu paduotas raktas neegzistuoja $products masyve, gražinkite tekstą 'Item not found'.
    Funkcijos kvietimas: exercise4('product_2')
    */
    if($products[$key]){
        return $products[$key];
    } else {
        return 'Item not found';
    }
}

//var_dump(exercise4('product_2'));
function exercise5(): array
{
    $transactions = [
        [
            'count' => 2,
            'price' => 13,
        ],
        [
            'count' => 15,
            'price' => 14,
        ],
    ];
    /*
    Kiekvienai iš transakcijų, esančių kintamajame $transactions, suskaičiuokite galutinę sumą ir pridėkite į
    transakciją su raktu 'total'. Grąžinkite $transactions iš funkcijos.
    Tikėkitės, kad transakciju skaičius gali išaugti. Jų gali būti ne 2, o 100. Dėl to naudokite ciklą.
    Laukiamas rezultatas:
    [
        [
            'count' => 2,
            'price' => 13,
            'total' => 26,
        ],
        ...
    ];
    */

    foreach ($transactions as $key => $transaction){
        $transactions[$key]['total'] = $transaction['count'] * $transaction['price'];
    }
    return $transactions;
}

//var_dump(exercise5());
function exercise6(): array
{
    $currencyRates = [
        'usd' => 1.13,
        'gbp' => 0.83,
    ];

    $transactions = [
        [
            'count' => 2,
            'price' => 3.55
        ],
        [
            'count' => 15,
            'price' => 14.1
        ],
    ];
    /*
    Kiekvienai iš transakcijų, esančių kintamajame $transactions, suskaičiuokite galutinę sumą visomis valiutomis
    esančiomis kintamajame $currencyRates (taip pat ir bazine valiuta - eur) ir pridėkite į transakciją su raktu 'totals'.
    Apvalinkite dviejų skaitmenų po kablelio tikslumu.
    Grąžinkite pamodifikuotą $transactions masyvą iš funkcijos.
    Tikėkitės, kad transakciju skaičius gali išaugti. Jų gali būti ne 2, o 100. Dėl to naudokite ciklą.
    Valiutų skaičius taip pat gali augti.
    Laukiamas rezultatas:
    [
        [
            'count' => 2,
            'price' => 3.55,
            'totals' => [
                'eur' => ...,
                'usd' => ...,
                'gbp' => ...,
            ],
        ],
        ...
    ];
    */

    foreach ($transactions as $key => $transaction){
        $sumInEur = $transaction['count'] * $transaction['price'];
        $transactions[$key]['totals'] = [
            'eur' => round($sumInEur, 2),
            'usd' => round(($sumInEur * $currencyRates['usd']), 2),
            'gbp' => round(($sumInEur * $currencyRates['gbp']), 2),
            ];
    }
    return $transactions;
}

//var_dump(exercise6());

function exercise7(array $collection): array
{
    foreach ($collection as $key => $item){
        $collection[$item['name']] = $collection[$key];
        unset($collection[$key]);
        $collection[$item['name']] = ['price' => $item['price']];
    };
    /*
    Funkcijai paduodama produktų kolekcija:
    Funkcijai paduodama produktų kolekcija:
    $productCollection = [
        [
            'name' => 'Best sofa',
            'price' => '55,
        ],
        ...
    ];
    exercise7($productCollection);
    Funkcija turi grąžinti performuota kolekciją - 'name' turi tapti kolekcijos elemento raktu:
    [
        'Best sofa' => [
            'price' => '55,
        ],
        ...
    ]
    */

    return $collection;
}

$productCollection = [
    [
        'name' => 'Best sofa',
        'price' => 55,
    ],
    [
        'name' => 'Worst sofa',
        'price' => 5,
    ],
];

//var_dump(exercise7($productCollection));

function exercise8(): array
{
    $products = [
        'desk',
        'lamp',
        'sofa',
        'error',
    ];

    /*
    Išskaidykite produktų pavadinimus į raides.
    [
        'desk' => [
            'd',
            'e',
            's',
            'k',
        ],
        ...
    ]
    */
    foreach ($products as $key => $product){
        $products[$product] = $products[$key];
        unset($products[$key]);
        $products[$product] = str_split($product);
//        $products[$product] = [explode("", $product)];
    }
    return $products;
}

//var_dump(exercise8());
function exercise9(): void
{
    $animals = [
        [
            'type' => 'water',
            'name' => 'shark',
        ],
        [
            'type' => 'land',
            'name' => 'chimp',
        ],
        [
            'type' => 'water',
            'name' => 'hippo',
        ],
        [
            'type' => 'water',
            'name' => 'crocodile',
        ],
        [
            'type' => 'land',
            'name' => 'cat',
        ],
        [
            'type' => 'land',
            'name' => 'dog',
        ],
    ];

    /*
    Išspausdinkite gyvūnus sugrupuotus pagal tipą.
    Rezultatas:
    land: chimp dog cat
    water: shark hippo crocodile
    */
    $land = 'land: ';
    $water = 'water: ';

    foreach ($animals as $key => $animal){
        if($animal['type'] === 'land'){
            $land = $land . ' ' . $animal['name'];
        } elseif ($animal['type'] === 'water'){
            $water = $water. ' ' . $animal['name'];
        }
    };

    echo $land . PHP_EOL;
    echo $water . PHP_EOL;
}

//exercise9();
function getProducts(): array
{
    return [
        'chair' => [
            'type' => 'furniture',
            'name' => 'Best chair',
            'price' => 15,
        ],
        'lamp' => [
            'type' => 'lighting',
            'name' => 'Ultimate lamp',
            'price' => 99,
        ],
        'sofa' => [
            'type' => 'furniture',
            'name' => 'Soft sofa',
            'price' => 350
        ],
    ];
}

function exercise10(): array
{
    $products = getProducts();
    /*
    Į masyvą $products pridėkite naują narį ir grąžinkite naujajį masyvą. Nario 'key' - 'fridge'. Nario reikšmė:
    [
        'type' => 'appliance',
        'name' => 'Coolest fridge',
        'price' => 200,
    ]
    */
    $products[] = [
        'fridge' => [
            'type' => 'appliance',
            'name' => 'Coolest fridge',
            'price' => 200,
        ],
    ];
    var_dump($products);
    return $products;
}
//exercise10();

function exercise11(): int
{
    $products = getProducts();
    $price = array_reduce($products, function (int $acc, array $product)
        {
            return $acc + $product['price'];
        },
    0,
    );

    return (int)round($price / count($products));

    /*
    Raskite ir grąžinkite visų produktų kainų vidurkį
    */

}

print_r(exercise11());
function exercise12(): array
{
    $products = getProducts();
    /*
    Sudėkite visų produktų pavadinimus į masyvą ir jį grąžinkite
    [
        'Best chair',
        'Ultimate lamp',
        'Soft sofa',
    ]
    */

    return [];
}

function exercise13(): void
{
    $products = getProducts();
    /*
    Iteruodami per masyvą išspausdinkite eilutę, kurioje matytusi produkto pavadinimas ir tipas atskirti brūkšneliu:
    Best chair - furniture, Ultimate lamp - lighting, Soft sofa - furniture
    */

}