<?php
// Visur sudėkite reikiamus parametrų bei return tipus

/*
1. Parašykite funkciją 'dividesBy5', kuri priimtų int tipo skaičių ir grąžintų jo dalybos iš 5 liekaną.
*/

//function divide_by_5(int $num):int {
//    return $num % 5;
//};
//
//var_dump(divide_by_5(12));

/*
2. Parašykite funkciją 'arrayPrinter', kuri priimtų array tipo parametrą ir
išspausdintų kiekvieną masyvo elementą naujoje eilutėje.
Funkcijos kvietimas: arrayPrinter(['some text', 'another text'])
Funkcija grąžina: funkcija nieko negrąžina - ji tik išspausdina masyvą į terminalą:
'some text'
'another text'
...
*/
//function array_printer(array $yourArray): void {
////wrong code, because didn't use foreach
////    for($i = 0; $i < sizeof($yourArray); $i++){
////        echo ("'" . $yourArray[$i] . "'" . PHP_EOL);
////    };
//    foreach ($yourArray as $value){
//        echo ("'" . $value . "'") . PHP_EOL;
//    }
//};
//
//array_printer(['some text', 'another text']);
/*
3. Parašykite funkciją 'stringEnhancer', kuri grąžintų pakeistą tekstą.
Funkcijos kvietimas: stringEnhancer('some text', '##')
Funkcija grąžina: '##some text##'
Funkcijos kvietimas: stringEnhancer('some text')
Funkcija grąžina: '**some text**'
*/
//function string_enhancer(string $yourText, string $symbol = '**'): string {
//    return $symbol . $yourText . $symbol;
//}
//
////var_dump(string_enhancer('some text', '##'));
//var_dump(string_enhancer('some text'));

/*
4. Parašykite funkciją 'stringModifier', kuri pamodifikuotų paduotą string tipo kintamąjį.
Funkcijos kvietimas:
$x = 'some text';
stringModifier($x, '##');
echo $x; // '##some text##'
Funkcija grąžina: funkcija nieko negrąžina
*/

//Don't forget to add & next to functions parameter in order to change the value later
//function string_modifier(string &$yourString, string $symbol): void
//{
//    $yourString = "'$symbol$yourString$symbol'";
//}
//
//$x = 'some text';
//string_modifier($x, '##');
//echo $x;

/*
5. Parašykite funkciją 'textReplicator', kuri grąžintų 'padaugintą' tekstą.
Funkcijos kvietimas:
textReplicator('some_text', 3);
Funkcija grąžina: 'some_text-some_text-some_text'
Funkcijos kvietimas:
textReplicator('some_text', null);
Funkcija grąžina: 'some_text'
*/

//function text_replicator(string $text, ?int $num): string
//{
//    echo "'";
//    if($num > 1){
//        for($i = 0; $i < $num; $i++){
//            echo $text;
//            if($i !== $num - 1){
//                echo "-";
//            }
//        }
//    } else {
//        echo $text;
//    }
//    echo "'";
//    return $text;
//}
//
//text_replicator('some_text', 3);

/*
6. Paverskite funkciją 'textReplicator', į veikiančią anoniminę funkciją.
*/

$textReplicator = function (string $text, ?int $num): string
{
    echo "'";
    if($num > 1){
        for($i = 0; $i < $num; $i++){
            echo $text;
            if($i !== $num - 1){
                echo "-";
            }
        }
    } else {
        echo $text;
    }
    echo "'";
    return $text;
};

$textReplicator('some_text', 3);