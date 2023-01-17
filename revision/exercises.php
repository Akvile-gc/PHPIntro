<?php

//1. Išspausdinkite kas antrą skaičių nuo 100 iki 500 naudodamiesi for ciklu.
//                                                                     Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
//100
//   102
//   103
//   ...

function exercise1()
    {
        for($i = 100; $i <= 500; $i+=2){
            echo $i . PHP_EOL;
        }
    }

//exercise1();

//2. Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 555 ir grąžinkite tą reikšmę iš funkcijos.
//
$numbers = [
    [0, 1],
    [1, 0, 2],
    [
        0,
        [
            0, 1, 99,
            [
                10, 44, 555,
            ],
        ],
    ],
];
//print_r($numbers[2][1][3][2]);
function exercise2 (array $array, int $num)
    {
        foreach ($array as $key => $value){
            if (!is_array($value) && $value === $num){
                return [$key];
            }
            if (is_array($value)){
                $nextLevelCheck = exercise2($value, $num);

                if ($nextLevelCheck !== null){
                    return array_merge([$key], $nextLevelCheck);
                }
            }
        }

        return null;
    }

//print_r(exercise2($numbers, 555));

//3.     Išspausdinkite skaičius, kurie yra mažesni nei $number ir dalijasi iš 55. Jeigu paduotas skaičius mažesnis nei 0,
//       funkcija paverčia šį skaičių pliusiniu.
//Funkcijos kvietimas: exercise10(60)

function exercise3(int $number):void
    {
        if ($number < 0){
            $number = -$number;
//            return $number;
        }

        for ($i = 1; $i < $number; $i++){
            if ($i % 55 === 0){
                echo $i . PHP_EOL;
            }
        }
    }

//print_r(exercise3(111));


//4.   Išveskite žodžių statistiką.
//Funkcija kviečiama:
//         exercise2(['hello', 'you'])
//         Funkcijos outputas:
//         [
//             'hello' => [
//                 'vowels' => 2,
//                 'consonants' => 3,
//                 'length' => 5,
//                 'starts_with' => h,
//                 'ends_with' => o,
//             ],
//             'you' => [
//                 'vowels' => 3,
//                 'consonants' => 0,
//                 'length' => 3,
//                 'starts_with' => y,
//                 'ends_with' => u,
//             ]
//         ]

function exercise4 (array $words):array
    {
        $vowels = ['a', 'e', 'i', 'o', 'u', 'y'];
        $wordStatistics = [];

        foreach ($words as $key => $word){
            $key = $word;
            $actualWord = $word;
            $word = [];

            $divided = str_split($actualWord);
            var_dump($divided);
            $numOfVowels = [];

//            foreach ($divided as $letter){
                preg_match_all('/[aeiouyAEIOUY]/', $actualWord, $numOfVowels);
//            }

            var_dump($numOfVowels);
            $word['vowels'] = count($numOfVowels);

            $word['consonants'] = strlen($actualWord) - count($numOfVowels);
            $word['length'] = strlen($actualWord);
            $word['starts_with'] = substr($actualWord, 0, 1);
            $word['ends_with'] = substr($actualWord, -1);

            $wordStatistics[$key] = $word;
        }
        return $wordStatistics;
    }

print_r(exercise4(['hello', 'you']));

//Sis array bus naudojamas 5 ir 6 uzduociai :
$products =
    [
        'products' => [
            'Comfy chair' => 'no data',
            'Yellow lamp' => [
                'price' => 15.3,
                'quantity' => 2,
            ],
            'Didzioji sofa' => [
                'pavadinimas' => 'Didzioji sofa',
                'kaina' => 'trylika eurų'
            ],
            'Softest rug' => [
                'price' => 27.3,
                'quantity' => 3,
                'discount' => 13,
            ],
            'Blue shelf' => [],
        ],
        'cartDiscounts' => [5, 16, 15],
    ];

//5. Atspausdinkite statistika - pavadinima, kokia kaina ir koks likutis.
//Jeigu produkte truksta numatytu parametru, vietoje ju naudokite N/A
//    Pvz.:
//        - Pavadinimas - Softest rug, Kaina - 27.3, Likutis - 3
//        - Pavadinimas - Didzioji sofa, Kaina - N/A, Likutis - N/A
function exercise5(array $productArray):string
{
    foreach ($productArray as $items) {
        foreach ($items as $key => $product) {
            if (is_array($product) && ($product['price'] || $product['kaina']) && $product['quantity']) {
                return $items[$key];
            }
        }
    }
    return '';
}

//exercise5($products);

//6. Parašykite funkciją kuri priimti prekės pavadinimą ir kokį kiekį norima nusipirkti, jeigu kiekio užtenka mūsų sandelyje (masyve)
//    tuomet atspausdinama - Jums parduota tokio pavadinimo - PREKES_PAVADINIMAS, prekė, kuri kainuoja - 55.55
//    Kitu atveju turi buti spausdinama - atsiprasau, bet tokio likucio sandelyje nebeturime.