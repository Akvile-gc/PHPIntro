<?php
declare(strict_types=1);

function getShoppingCart(): array
{
    return [
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
}
// Visose užduotyse naudokite array funkcijas

function exercise1(array $array): void
{
    $newArr = array_values($array);
    $keys = array_keys($newArr[0]);
    $sentence = implode(", ", $keys);

    echo $sentence;
    /*
    Išspausdinti visų krepšelio produktų pavadinimus vienoje eilutėje.
    Comfy chair, Yellow lamp, Didzioji sofa, Softest rug, Blue shelf
    */
}

//exercise1(getShoppingCart());
function exercise2(array $array): float
{
    /*
    Suskaičiuokite pirkimų krepšelio bendrą sumą (price * quantity)
    Kaip matote, krepšelio duomenys, kuriuos gavome iš svetimos sistemos, yra netvarkingi.
    - Skaičiuojant reikėtų atsižvelgti tik į produktus, kurie turi laukus 'price' ir 'quantity'.
    Jeigu produkto laukai užvadinti kitais pavadinimais arba iš viso jų neturi, tą produktą reikia ignoruoti.
    */

    $total = 0;

    foreach ($array as $key => $element)
        {
            foreach ($element as $single_item)
                {
                    if (is_array($single_item)){
                        if(array_key_exists('price', $single_item) && array_key_exists('quantity', $single_item)){
                            $item_total = $single_item['price'] * $single_item['quantity'];
                            $total += $item_total;
                        }

                    }
                }
        }
    print_r($total);

    return $total;
}

//exercise2(getShoppingCart());

function exercise3(array $array): float
{

    /*
    Suskaičiuokite pirkinių krepšelio bendrą sumą.
    Galioja tos pačios salygos kaip ir funkcijoje exercise2, bet papildomai reikia:
    - Skaičiuojant bendrą sumą pritaikyti nuolaidas.
    Nuolaida laikoma 'cartDiscounts' masyve, taip pat nuolaida gali būti ir prie produkto - 'discount'.
    Abi reikšmės yra išreikštos procentais.
    Nuolaidos sumuojasi.
    Krepšelio nuolaida taikoma bendrai krepšelio sumai.
    Naudojama tik viena, didžiausia su krepšeliu susieta nuolaida ('cartDiscounts').
    */

    $total = 0;

    foreach ($array as $key => $element)
    {
        foreach ($element as $single_item)
        {
            if (is_array($single_item)){
                if(array_key_exists('price', $single_item) && array_key_exists('quantity', $single_item)){
                    $item_total = $single_item['price'] * $single_item['quantity'];
                    if (array_key_exists('discount', $single_item)){
                        $discounted = $item_total * $single_item['discount'] / 100;
                        $total += $discounted;
                    } else {
                        $total += $item_total;
                    }
                }
            }
        }
    }

    $final_price = $total * max(end($array)) / 100;
    print_r(number_format($final_price, 2));
    return $final_price;
}
//exercise3(getShoppingCart());
function exercise4(array $newIpList): array
{
    $existingIpList = [
        '1.17.2.1',
        '15.1.2.1',
        '1.9.2.1',
        '1.1.98.1',
        '1.1.2.12',
        '1.11.2.1',
        '122.1.2.1',
        '1.31.2.1',
        '33.12.2.1',
    ];

    /*
    Sukategorizuokite ip adresų sąrašą.
    ipsNew - ip iš $newIpList, kurių nėra $existingIpList
    ipsOld - ip iš $existingIpList, kurių nėra $newIpList
    ipsRemaining - ip, kurie egzistuoja abiejuose sąrašuose
    funkcija butu kviečiam taip:
    exercise4(
        ['15.1.2.1', '16.1.8.1', '15.1.8.1']
    );
    */
    $result = [
        'ipsNew' => [],
        'ipsOld' => [],
        'ipsRemaining' => [],
    ];

//    ipsNew - ip iš $newIpList, kurių nėra $existingIpList
    foreach ($newIpList as $newIp)
        {
            if(!in_array($newIp, $existingIpList, true)){
                $result['ipsNew'][] = $newIp;
            }
        }

//    ipsOld - ip iš $existingIpList, kurių nėra $newIpList
    foreach ($existingIpList as $existingIp)
        {
            if(!in_array($existingIp, $newIpList, true)){
                $result['ipsOld'][] = $existingIp;
            } elseif(in_array($existingIp, $newIpList, true)){ //    ipsRemaining - ip, kurie egzistuoja abiejuose sąrašuose
                $result['ipsRemaining'][] = $existingIp;
            }
        }

    print_r($result);

    return $result;
}

exercise4(['15.1.2.1', '16.1.8.1', '15.1.8.1']);
function exercise5(): string
{
    $words = [
        'over',
        'jumps',
        'fox',
        'Quick',
        'dog',
        'lazy',
        'very',
        'the',
    ];

    /*
    "Išverskite" masyvą į kitą pusę ir paverskite į string tipo reikšmę.
    Arčiausiai vidurio esantys masyvo elementai turėtų atsirasti šonuose.
    Masyvo elementų skaičius galėtų dideti, bet jis visada bus lyginis.
    Rezultatas turėtų būti - 'Quick fox jumps over the very lazy dog'
    */
    return '';
}


/*
    exercise 6
    Parašykite savo array_map funkcijos versiją nesinaudodami pačia array_map funkcija
*/
function array_map_custom(callable $callback, array $array): array
{
    return [];
}

/*
    exercise 7
    Parašykite savo array_filter funkcijos versiją nesinaudodami pačia array_filter funkcija
*/
function array_filter_custom(array $array, ?callable $callback): array
{
    return [];
}

/*
    exercise 8
    Parašykite savo array_reduce funkcijos versiją nesinaudodami pačia array_reduce funkcija
*/
function array_reduce_custom(array $array, callable $callback, $carry)
{
    return 'array reduced to string';
}