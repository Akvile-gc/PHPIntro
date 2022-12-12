<?php
declare(strict_types=1);

/*
1. Apskaičiuokite PHP pagalba ir išveskite į terminalą. Kiekvienas rezultatas turi būti naujoje eilutėje:
987 + 545 - 32 * 94
32 pakelkite laipsniu 3 ir pridėkite 18
120 padalinkite iš 4 ir dar karta padalinkite iš 3
kokia liekana lieka po skaičiaus 187 dalybos iš 5
skaičiui 3 tris kartus pritaikykite increment operatorių - koki skaičių gaunate?
skaičiui 12 keturis kartus pritaikykite decrement operatorių - koki skaičių gaunate?
*/


//$x = 3;
//$y = 12;
//
//var_dump(987 + 545 - (32 * 94));
//var_dump((32 ** 3) + 18);
//var_dump((120 / 4) / 3);
//var_dump(187 % 5);
//var_dump($x += 3);
//var_dump($y -= 4);


/*
2. Išspausdinkite skaičius nuo 1 iki 10 naudodamiesi ciklu. Panaudokite visus 4 būdus ciklams aprašyti.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
1
2
3
...
*/
//1st
//$i = 0;
//while($i < 10) {
//    $i++;
//    echo $i . PHP_EOL;
//}

//2nd
//$i = 0;
//
//do {
//    $i++;
//    echo $i . PHP_EOL;
//} while($i < 10);

//3rd
//for($i = 1; $i <11; $i++){
//    echo $i . PHP_EOL;
//}

//4th
//$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//
//foreach ($numbers as $num) {
//    echo $num . PHP_EOL;
//}

/*
3. Išspausdinkite skaičius nuo 15 iki 3 naudodamiesi ciklu. Panaudokite sau patogiausią ciklą.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/

//for($i = 15; $i >= 3 ; $i--){
//    echo $i . PHP_EOL;
//}

/*
4. Išspausdinkite kas antrą skaičių nuo 1 iki 20 naudodamiesi ciklu.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
1
3
5
...
*/

//for($i = 1; $i <= 20; $i += 2){
//    echo $i . PHP_EOL;
//}

/*
5. Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/

//for($i = 1; $i <= 20; $i ++){
//    if($i % 3 === 0){
//        echo $i . PHP_EOL;
//    }
//}

//for($i = 1; $i <= 20; $i ++){
//    if($i % 3 !== 0){
//        continue;
//    }
//    echo $i . PHP_EOL;
//}

/*
6. Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3 arba iš 5.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/

//for($i = 1; $i <= 20; $i ++){
//    if(($i % 3 === 0) || ($i % 5 === 0)){
//        echo $i . PHP_EOL;
//    }
//}

/*
7. Iteruokite per skaičius, nuo 1 iki 20.
Jeigu skaičius dalijasi iš 3, išspausdinkite žodį 'Hey'.
Jeigu skaičius dalijasi iš 5, išspausdinkite žodį Ho'.
Jeigu skaičius dalijasi ir iš 5, ir iš 3, išspausdinkite žodį 'HeyHo'.
Kitu atveju išspausdinkite skaičių.
Viskas turi būti atspausdinti vienoje eilutėje su tarpais:
1 2 Hey 4 Ho Hey 7 8 Hey Ho 11 Hey 13 14 HeyHo 16 17 Hey 19 Ho
*/

//for($i = 1; $i <= 20; $i ++){
//    switch ($i){
//        case (($i % 3 === 0) && ($i % 5 === 0)):
//            echo 'HeyHo ';
//            break;
//        case ($i % 3 === 0):
//            echo 'Hey ';
//            break;
//        case ($i % 5 === 0):
//            echo 'Ho ';
//            break;
//        default:
//            echo $i . ' ';
//            break;
//    }
//}

/*
8. Raskite sveikų skaičių nuo 1 iki 100 sumą.
*/

$sum = 0;
for($i = 0; $i <= 100; $i++){
        $sum += $i;
}
echo $sum . PHP_EOL;

/*
9. Pasinaudodami ciklu išspausdinkite savaitės dienas iš masyvo $days vienoje eilutėje:
monday-tuesday-wednesday-thursday-friday-saturday-sunday-
*/

$days = [
    'monday',
    'tuesday',
    'wednesday',
    'thursday',
    'friday',
    'saturday',
    'sunday',
];

//foreach ($days as $day){
//    echo $day . '-';
//}

/*
10. Iteruokite sveikus skaičius nuo -5 iki 5.
Išspausdinkite skaičių dvejopai:
1. Pasinaudojant paprastu echo
2. Pasinaudojant funkcija var_dump ir prieš tai pavertus į 'bool' tipo reikšmę
-5
bool(true)
-4
bool(true)
...
HINT: atkreipkite dėmesį į ką pavirsta skaičius 0
*/

//for ($i = -5; $i <= 5; $i++) {
//    echo $i . PHP_EOL;
//    var_dump((bool)$i);
//}