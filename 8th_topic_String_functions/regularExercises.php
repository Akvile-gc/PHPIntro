<?php

declare(strict_types=1);

$someProducts = [
    '000_product_1  ',
    ' 000_product_2',
    '000_product_3  ',
    '000_product_4',
    '  000_product_5 ',
    '000_product_20
    ',
];

function exercise1(array $products)
{
    /*
    Suskaičiuokite ir grąžinkite visų $products masyve esančių eilučių ilgių sumą, BET
    į sumą neįtraukite tuščių simbolių - ty. tarpų, new line ir pan.
    Naudokite $someProducts masyvą.
    */

    $sum = 0;

    foreach ($products as $product)
    {
        $clean = trim($product);
        $sentence = strlen($clean);
        $sum += $sentence;
    }
    return $sum;
}
//var_dump(exercise1($someProducts));
function exercise2(): array
{
    /*
    Išskaidykite $longLine kintamajį į atskirus žodžius. Žodžiai turi grįžti iš funkcijos masyvo formoje.
    Skaidykite per underscore (_)
    */
    $longLine = 'Hello_how_are_you_doing?';

    return explode('_', $longLine);
}

//var_dump(exercise2());
function exercise3(): array
{
    /*
    Grąžinkite masyvą, kuris talpintų tik tuos žodžius, kurie panašūs į emailų adresus
    t.y. turi savyje simbolį @
    */
    $emails = [
        'some@email.com',
        'someAemail.com',
        'another@gmail.com',
        'notAreal.email.com',
        'real@gmail.com',
    ];

    $goodEmails = array_filter($emails, function(string $email)
    {
        if(str_contains($email, '@')){
            return true;
        }
    },
    );
    return $goodEmails;
}
//var_dump(exercise3());

function exercise4(array $products): int
{
    /*
    Suskaičiuokite ir grąžinkite visų $products masyve esančių eilučių ilgių sumą.
    Naudokite $someProducts masyvą
    */

    $totalSymbols = array_reduce($products, function(int $initialNum, string $product)
        {
            $sentence = strlen($product);
            return $initialNum + $sentence;
        },
        0,
    );

    return $totalSymbols;
}

//var_dump(exercise4($someProducts));

function exercise5(): array
{
    /*
    Kiekvienam žodžiui apskaičiuokite balsių skaičių (a, e, i, o, u)
    Funkcijos kvietimas: exercise5()
    Funkcija grąžina: [2, 3, 3, 1, 2]
    */

    $words = [
        'tennis',
        'rooftops',
        'hillside',
        'warm',
        'friends',
    ];

    $letters = ['a', 'e', 'i', 'o', 'u'];
    $result = [];

    foreach ($words as $key => $word) {
        $seperated = str_split($word, 1);
        $result[$key] = [0];
        $sum = 0;
        foreach ($seperated as $i => $symbol) {
            if (in_array($symbol, $letters, true)) {
                $sum += strlen($symbol);
                $result[$key] = $sum;
            };
        };
//        $vowels = preg_match_all('/[aeiou]/i',$word);
//        echo $vowels . PHP_EOL;
    };
    var_dump($result);
        return $result;

//    return $words;
}
//exercise5();
function exercise6(array $products): int
{
    /*
    Suskaičiuokite ir grąžinkite visų $products masyve esančių eilučių ilgių sumą, BET
    į sumą neįtraukite tuščių simbolių - ty. tarpų, new line ir pan.
    Naudokite $someProducts masyvą.
    */

    $allSum = array_reduce($products, function(int $initial, string $product)
        {
            $clean = trim($product);
            $sentence = strlen($clean);
            return $initial + $sentence;
        },
        0,
    );
    return $allSum;
}
//var_dump(exercise6($someProducts));

function exercise7(): int
{
    $text = 'The African philosophy of Ubuntu has its roots in the Nguni word for being human.
    The concept emphasises the significance of our community and shared humanity and teaches
    us that "A person is a person through others". Many view the philosphy as a counterweight
    to the culture of individualism in our contemporary world.';

    /*
    Suskaičiuokite kiek balsių yra tekste
    */

    $letters = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $seperated = str_split($text, 1);
    $result = 0;

    foreach ($seperated as $symbol) {
        if (in_array($symbol, $letters, true))
            $result += strlen($symbol);
    };

//        foreach($letters as $letter){
//            if(stripos($text, $letter)){
//                $result++;
//            }
//            echo $result;
//        }
//    }
//
//    for($i = 0; $i < strlen($text); $i++){
//        if (str_contains($text, $letters[0])) {
//            $result++;
////            echo $result . PHP_EOL;
//        }
//    };
    var_dump($result);
    return $result;
}

exercise7();