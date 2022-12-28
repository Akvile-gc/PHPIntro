<?php

declare(strict_types=1);

/*
1. Išspausdinkite šio momento datą pasinaudodami funkcija 'date'
*/
function exercise1(): void
{
    var_dump(date('Y.m.d H.i.s'));
}

//exercise1();

/*
2. Išspausdinkite datą '2008-12-15 15:15' pasinaudodami funkcija 'date'
*/
function exercise2(): void
{
    var_dump(date(format: 'Y-m-d H:i', timestamp: 1229346900));

}
//exercise2();

/*
3. Išspausdinkite šio momento datą skirtingais formatais, kurie atitiktų pavyzdžius:
- 1970 Mar 1 15:15:00
- 1970 Mar 01 15:15
- 1970 Mar 1st 11:15:00 PM
- 1970/3/1
- savaites numeris (52 savaitės metuose)
- dienos numeris (365 dienos metuose)
*/
function exercise3(): void
{
    //1st
//    var_dump(date(format: 'Y M j H:i:s', timestamp: 5141700));

    //2nd
//    var_dump(date(format: 'Y M d H:i', timestamp: 5141700));

    //3rd
//    var_dump(date(format: 'Y M jS h:i:s A', timestamp: 5170500));

    //4th
//    var_dump(date(format: 'Y/n/j', timestamp: 5094000));

    //5th
//    var_dump(date(format: 'W'));

    //6th
//    var_dump(date(format: 'z'));

}
//exercise3();

/*
4. Sukurkite datos objektą iš šių tekstinių datų:
- 2000-03-02 15:30:00
- 2000/02/15 08:30:00 PM
- 2000 March 2nd 15:30:00
*/
function exercise4(): void
{
//    $date = new DateTime(datetime: '2000-03-02 15:30:00');
//    var_dump($date);
//    //1st
//    $date->format(format: 'Y-m-d H:i:s'); //var_dump() for the result
//    //2nd
//    $date->modify(modifier: '-16 days 5 hours');
//    $date->format(format: 'Y/m/d h:i:s A'); //var_dump() for the result
//
//    //3rd
//    $date->modify(modifier: '16 days -5 hours');
//    var_dump($date->format(format: 'Y F jS H:i:s'));


//    var_dump(new DateTime('2000-03-02 15:30:00'));
//    var_dump(new DateTime('2000/02/15 08:30:00 PM'));
    var_dump(new DateTime(datetime: '2000 March 2nd 15:30:00'));
}
//exercise4();
/*
5. Sukurkite datą iš '15th Jan 2021 8:15:01 PM' (data X). Pamodifikuokite, kad gautumėte:
- datą po 2 savaičių nuo datos X
- datą po 10 metų nuo datos X
- datą prieš 5 valandas nuo datos X
- paskutinę mėnesio dieną
- pirmą mėnesio dieną
- ateinantį antradienį
- datą prieš 1 dieną 8 valandas 15 minučių nuo datos X
*/

function exercise5(): void
{
    $x = '15th Jan 2021 8:15:01 PM';
    $date = new DateTime($x);
    //1st
//    $date->modify(modifier: '-2 weeks');
    //2nd
//    $date->modify(modifier: '10 years');
    //3rd
//    $date->modify(modifier: '-5 hours');


//    var_dump($date->format(format: 'Y M jS h:i:s A'));
    //4th
//    var_dump($date->modify(modifier: 'last day of this month'));
    //5th
//    var_dump($date->modify(modifier: 'first day of this month'));
    //6th
//    var_dump($date->modify(modifier: 'next Tuesday'));
    //7th
    var_dump($date->modify(modifier: '-1 day -8 hours -15 minutes'));

}
//exercise5();
function exercise6(): void
{
    $products = [
        [
            'name' => 'Wine glass',
            'last_purchase' => '2021 Jan 15 18:34:12',
        ],
        [
            'name' => 'Bread knife',
            'last_purchase' => '2020 Mar 15 23:14:00',
        ],
        [
            'name' => 'Blue chair',
            'last_purchase' => '2019 Dec 02 15:00:12',
        ],
    ];

    foreach ($products as $product)
        {
            $date = date_create_from_format('Y M d H:i:s', $product['last_purchase']);
            echo $product['name'] . ' ' . $date->format('Y-m-d H:i:s') . PHP_EOL;
        }

    /*
    Išspausdinkite produktų paskutinių pirkimų santrauką:
    Wine glass 2021-01-15 18:34:12
    ...
    */
}

exercise6();
function exercise7($date1, $date2): string
{
    /*
    Palyginkite datas ir grąžinkite atsakymą, kuri data naujesnė.
    Funkcijos kvietimas: exercise7(date_create('2022-01-25 17:13:25'), date_create('2020-01-25 17:13:25'));
    Rezultatas:
    'First date is newer'
    Funkcijos kvietimas: exercise7(date_create('2020-01-25 17:13:25'), date_create('2022-01-25 17:13:25'));
    Rezultatas:
    'Second date is newer'
    */

    return '';
}

function exercise8($date): void
{
    /*
    Išspausdinkite paduotos datos skirtumą nuo dabartinio momento žodžiais.
    Funkcijos kvietimas: exercise8(date_create('2020-01-25 17:13:25'));
    Rezultatas:
    Supplied date was 891 days ago
    Funkcijos kvietimas: exercise8(date_create('2023-01-25 17:13:25'));
    Rezultatas:
    Supplied date is in the future
    */
}

function exercise9($date): void
{
    /*
    Išspausdinkite datų skirtumą žodžiais.
    Funkcijos kvietimas: exercise9(date_create('2020-01-25 17:13:25'));
    Rezultatas:
    Supplied date was 2 years 1 months 11 days
    Funkcijos kvietimas: exercise9(date_create('2023-01-25 17:13:25'));
    Rezultatas:
    Supplied date is in the future
    */
}