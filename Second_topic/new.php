<?php
declare(strict_types=1);

/*
1. Pašalinkite/užkomentuokite praeitos užduoties eilutes, kad jos netrukdytų toliau tęsti darbo.
Išveskite į terminalą kintamojo $variableToDebug:
- tik reikšmę
- reikšmę kartu su duomens tipu
*/
$variableToDebug = 15;
//echo $variableToDebug.PHP_EOL;
//var_dump($variableToDebug).PHP_EOL;

/*
2. Sudėliokite masyvą ir jį atspausdinkite iš šių reikšmių:
- Hello
- Learning
- Amazing
- CodeAcademy
- Php
- Git
*/
$newArray = ['Hello', 'Learning', 'Amazing', 'CodeAcademy', 'Php', 'Git'];
//var_dump($newArray).PHP_EOL;
/*
3. Pakeiskite duotų kintamųjų reikšmes į:
- int
- bool
*/

//pakeisti i int:
$variable1 = false;
$variable2 = true;
$variable3 = '2022 year';

//var_dump((int)$variable1).PHP_EOL;
//var_dump((int)$variable2).PHP_EOL;
//var_dump((int)$variable3).PHP_EOL;

//pakeisti i bool:
$variable4 = 150;
$variable5 = [];
$variable6 = 'Year - 2022';

//var_dump((bool)$variable4).PHP_EOL;
//var_dump((bool)$variable5).PHP_EOL;
//var_dump((bool)$variable6).PHP_EOL;

/*
4. Atlikite šiuo loginius operatorius su duotais kintamaisiais taip, kad gautumėt true ir false
- &&
- ||
*/

$variable7 = 145;
$variable8 = '145';
$variable9 = '150';
$variable10 = 150;
//
//var_dump($variable7 || $variable8);
//var_dump(!($variable9 && $variable10));

/*
5. Atlikite siuos skaiciavimus, panaudodami kintamuosius
- 143 * 444
- 567 / 12
- 578 % 55
- 6 ** 5
- 5--;
- 6++;
*/
$number1 = 143;
$number2 = 444;
$number3 = 567;
$number4 = 12;
$number5 = 578;
$number6 = 55;
$number7 = 6;
$number8 = 5;
//var_dump($number1 * $number2);
//var_dump($number3 / $number4);
//var_dump($number5 % $number6);
//var_dump($number7 ** $number8);
//var_dump(--$number8);
//var_dump(++$number7);

/*
6. Parasykite koda, kad jis patikrintu ar:
- 56 > 77
- 190 <= 230
- 230 yra lygu '230'
- 45 nera lygu '45
*/
$num1 = 56;
$num2 = 77;
$num3 = 190;
$num4 = 230;
$num5 = '230';
$num6 = 45;
$num7 = '45';

//var_dump($num1 > $num2);
//var_dump($num3 <= $num4);
//var_dump($num4 === $num5);
//var_dump($num6 !== $num7);

/*
7. Parasykite koda, kad jis ar reiksme egzistuoja
- pasirasykite kintamaji $variable = 10; patikrinkite ar jis egzistuoja;
- jeigu egzistuoja patikrinkite koks jo tipas
- istrinkite jo apsirasyma ir patikrinkite ar egzistuojate. kokia reiksme gaunate? ar gaunate error?
*/

$variable = 10;
var_dump(isset($variable));
var_dump(($variable));