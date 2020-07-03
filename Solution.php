<?php

function growUpNumber(int $angka)
{
    $arr = array();
    for($i = $angka; $i >= 0; $i--)
    {
        array_push($arr, $i);
    }
    return $arr;
}
// var_dump(growUpNumber(5)); //[5, 4, 3, 2, 1, 0]
function isMatchIdentity(string $str)
{
    $arr = str_split($str);

    foreach( $arr as $val)
    {
        if( $arr[0] != $val)
        {
            return false;
        }
    }
    return true;
}
// var_dump(isMatchIdentity('aaaaaa')); //true
// var_dump(isMatchIdentity('ase')); //false
function alphabetCharacter(string $str)
{
    $spl = str_split($str);
    sort($spl);
    return implode('',$spl);
}
//var_dump(alphabetCharacter('lamborgini mercy')); //abcegiilmmnorry
function existsHigherNumber(array $data, $number)
{
    foreach($data as $val)
    {
        if( $number <= $val)
        {
            return true;
        }
    }
    return false;
}
//var_dump(existsHigherNumber([1,2,3,4,5,6,7,8,9,10], 10)); //true
//var_dump(existsHigherNumber([1,2,3,4,5,6,7,8,9,10], 10)); //false
function howManyAlphabet(int $howmany)
{
    $arr = array();
    array_push($arr, 'L');
    for( $i=0; $i < $howmany; $i++)
    {
        array_push($arr, 'a');
    }
    array_push($arr, 'mborgini');
    return implode('', $arr);
}
//var_dump(howManyAlphabet(19)); //Laaaaaaaaaaaaaaaaaaamborgini
function isPalidrome(string $word)
{
    $str = str_split($word);
    if( $str[0] == $str[count($str) - 1])
    {
        return true;
    }
    return false;
}
// var_dump(isPalidrome('ses'));//true
// var_dump(isPalidrome('sez')); //false
function removeCharacter(array $data)
{
    $banchar = 'C';
    $arr = array();
    foreach($data as $val)
    {
        if( $val[0] != $banchar)
        {
            array_push($arr, $val);
        }
    }
    return $arr;
}
// var_dump(removeCharacter(['Cacing', 'Shuriken'])); //Shuriken
// var_dump(removeCharacter(['Cacing', 'Cicak', 'Cumi'])); //null array
function matchDictonary(string $str, array $data)
{
    $arr = array();
    foreach($data as $val)
    {
        if( strpos($val, $str) !== false)
        {
            array_push($arr, $val);
        }
    }
    return $arr;
}
// var_dump(matchDictonary('c' , ['string', 'strong' , 'strest', 'street', 'cat']));//return cat
// var_dump(matchDictonary('str' , ['string', 'strong' , 'strest', 'street', 'cat']));//return ['string', 'strong' , 'strest', 'street']
function additiveInverse(array $data)
{
    $arr = array();
    foreach( $data as $val)
    {
        if($val < 0)
        {
            $absolutenumber = abs($val);
            array_push($arr, $absolutenumber);
        }else{
            array_push($arr, 0 - $val);
        }
    }
    return $arr;
}
// var_dump(additiveInverse([1,2,3,4,5,-1,-5])); //return [-1,-2,-3,-4,-5,1,5]
// var_dump(additiveInverse([-1,2])); // [1,-2]
function reserveBool($input)
{
    if( gettype($input)=='boolean' && $input == true )
    {
        return false;
    }elseif( gettype($input)=='boolean' && $input == false )
    {
        return true;
    }
    else{
        return 'bukan boolean';
    }
}
// var_dump(reserveBool(564654));//bukan boolean
// var_dump(reserveBool(true)); //false
//** Finish Yes */
/** Yes */