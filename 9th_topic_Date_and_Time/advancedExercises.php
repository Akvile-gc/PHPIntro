<?php

declare(strict_types=1);

function exercise1(): array
{
    $products = [
        [
            'name' => 'Wine glass',
            'last_purchase' => '2022 Jan 15 18:34:12',
        ],
        [
            'name' => 'Bread knife',
            'last_purchase' => '2020 Mar 15 23:14:00',
        ],
        [
            'name' => 'Blue chair',
            'last_purchase' => '2019 Dec 12 15:00:12',
        ],
        [
            'name' => 'Cutting board',
            'last_purchase' => '2022 Feb 1 03:15:01',
        ],
    ];

    $latest_products = [];

    $date_current = new DateTime();
    foreach ($products as $key => $product)
        {
            $date_purchase = date_create_from_format('Y M d H:i:s', $product['last_purchase']);
            //format to the year
            $purchase_year = $date_purchase->format('Y');
            $current_year = $date_current->format('Y');

            //compare, if the year is the same
            if ($purchase_year === $current_year){
                $latest_products[] = $product;
            }
        }

    /*
    Grąžinkite iš funkcijos masyvą tik su tais produktais, kurie paskutinį kartą buvo pirkti einamaisiais metais.
    Ši funkcija turėtų veikti ir bet kuriais ateinančiais metais (2023, 2024 ir t.t.)
    */

    return $latest_products;
}

//var_dump(exercise1());
function exercise2(bool $showOnlyDays): void
{
    $products = [
        [
            'name' => 'Wine glass',
            'last_purchase' => '2022 Jan 15 18:34:12',
        ],
        [
            'name' => 'Bread knife',
            'last_purchase' => '2020 Mar 15 23:14:00',
        ],
        [
            'name' => 'Blue chair',
            'last_purchase' => '2019 Dec 12 15:00:12',
        ],
        [
            'name' => 'Cutting board',
            'last_purchase' => '2022 Feb 1 03:15:01',
        ],
    ];

    /*
    Išspausdinkite paskutinių pirkimų santrauką. Jeigu $showOnlyDays yra true, tuomet rodykite tik dienas.
    Funkcijos kvietimas: exercise11(false)
    Rezultatas:
    Last purchased:
    Wine glass 0 years 1 month 23 days ago
    ...
    Funkcijos kvietimas: exercise11(true)
    Rezultatas:
    Last purchased:
    Wine glass 51 days ago
    ...
    */

    $days_or_full = $showOnlyDays;

    $date_current = new DateTime();

    echo 'Last purchased:' . PHP_EOL;

    foreach ($products as $product)
    {
        $date_purchase = date_create_from_format('Y M d H:i:s', $product['last_purchase']);
        $interval = $date_purchase ->diff($date_current);

        if ($days_or_full){
            echo $product['name'], $interval->format(' %a days ago') . PHP_EOL;
        } else {
            echo $product['name'], $interval->format(' %y years %m months %d days ago') . PHP_EOL;
        }
    }
}
exercise2(false);
function exercise3(int $numberOfCycles): void
{
    /*
    Išspausdinkite kiek laiko trunka prasukti tuščią ciklą nurodytą kiekį kartų ($numberOfCycles).
    Trukmę apvalinkite iki milisekundžių.
    Pridėkite parametrui $numberOfCycles numatytąją reikšmę 1000000.
    */
}