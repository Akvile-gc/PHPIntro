<?php
declare(strict_types=1);

/*
1. Parašykite funkciją, kuri pašalintų paskutinį žodį iš stringo
"A car is standing in a parkinglot." --> "A car is standing in a"
*/
$text = 'A car is standing in a parkinglot.';
function exercise1(string $sentence):string
    {
        $pattern = '/\w+\./';
        $result = preg_replace($pattern, '', $sentence);
        return $result;
    }
//print_r(exercise1($text));
/*
2. Parašykite funkciją, kuri patikrintų, ar tekstas atitinka lietuviško mobilaus telefono numerio formatą
"+37062345678" - true
"+37012345678" - false
"+3706234567" - false
"+3706234567a" - false
*/
$numbers = ["+37062345678", "+37012345678", "+3706234567", "+3706234567a"];
function exercise2(?string $number):bool
    {
        $pattern = '/^\+[3][7][0][6]\d{7}$/';
        $match = preg_match($pattern, $number);

        if ($match)
            return true;
        else
            return false;

    }

//foreach ($numbers as $num){
//    var_dump(exercise2($num));
//}

/*
3. Patobulinkite funkciją (2). Funkcija turėtų galėti patikrinti ir tokius telefono numerius:
"+370 623 45678"
"+370-623-45678"
"+370-623 45678"
"00370 623 45678"
Jeigu telefono numeris validus, iš funkcijos turėtų grįžti tvarkingai suformatuotas telefono numeris:
"+370-623 45678" --> "+37062345678"
*/

$phones = ["+370 623 45678", "+370-623-45678", "+370-623 45678", "00370 623 45678"];
function exercise3(string $number):string
{
    $pattern = '/^(\+|0{2})(370)( |\-)([6]\d{2})( |\-)(\d{5})$/';
    $replace = '+$2$4$6';

//    '/^\+((370|8)6)\d{7}$/';
    $match = preg_match($pattern, $number);

    if ($match){
        $result = preg_replace($pattern, $replace, $number);
        return $result;
    }
    else
        return 'Wrong number';
}

//foreach ($phones as $num){
//    var_dump(exercise3($num));
//}
/*
4. Parašykite funkciją, kuri užmaskuotų dalį vartotojo duomenų. Pavardės ir gimimo metų simboliai
turėtų būti pakeisti i simbolius 'X'.
"John Smith, 1979 05 15" --> "John XXXXX, XXXX 05 15"
*/
function exercise4(string $data):string
    {
        $matches = [];
        $pattern = '/(\w*) (\w*), (\d{4}) (\d{2}) (\d{2})/';
        $matched = preg_match($pattern, $data, $matches);
        if ($matched === 0)
            return $data;
        $lastName = $matches[2];
        $LastNameChanged = str_pad('', strlen($lastName), 'X');
        return "$matches[1] $LastNameChanged, XXXX $matches[4] $matches[5]";
//        $replace = '$1 XXXXX, XXXX $4 $5';
//        $result = preg_replace($pattern, $replace, $data);
//        return $result;
    }
//print_r(exercise4("John Smith, 1979 05 15"));

/*
5. Parašykite funkciją, kuri pravaliduotų IPv4 adresą. IPv4 adresas yra sudarytas iš 4 skaičių, kurių kiekvienas gali
būti nuo 0 iki 255. Skaičiai atskirti taškais.
Pvz.:
255.255.255.255
1.1.0.1
*/

function exercise5(string $input):bool
    {
        $match = [];
        $pattern = '/^\d{1-3}.\d{1-3}.\d{1-3}.\d{1-3}$/';
        preg_match($pattern, $input, $match);
        $segments = array_slice($match, 1);

        foreach ($segments as $segment){
            if((int)$segment > 255)
                return false;
        }
        return true;
    }

//var_dump(exercise5('1.1.0.1'));
//var_dump(exercise5('255.255.255.255'));