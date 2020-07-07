<?php

function isFibonacci(int $angka)
{
    $f = 0;
    $s = 1;
    $n = null;
    $arr = array();
    for ( $i = 0; $i <= $angka; $i++ )
    {
        if( $i <= 1 )
        {
            $n = $i; 
        }else{
        $n = $f + $s;
        $f = $s; 
        $s = $n;
        }
        array_push($arr, $n);
    }
    return $arr;
}
//var_dump(isFibonacci(8)); // 0,1,1,2,3,5,8,13,21
function isBubleSort(&$arr) 
{ 
    $n = sizeof($arr); 
  
    for($i = 0; $i < $n; $i++)  
    { 
        for ($j = 0; $j < $n - $i - 1; $j++)  
        { 
            if ($arr[$j] > $arr[$j+1]) 
            { 
                $t = $arr[$j]; 
                $arr[$j] = $arr[$j+1]; 
                $arr[$j+1] = $t; 
            } 
        } 
    } 
} 
// $arr = array(64,52,15,25,35,355);
// isBubleSort($arr);
// var_dump($arr); 
//15,25,35,52,64,355
function calcDeterminant(array $ab, array $cd )
{
    $a = $ab[0];    $b = $ab[1];
    $c = $cd[0];    $d = $cd[1];
    return $a * $d - $b * $c;
}
// echo calcDeterminant([1, 2], [3, 4]); //-2
function middleEarth(array $data)
{
    $f = 'Ari';
    $s = 'Danang';

    $aripos = array_search($f , $data);
    $danangpos = array_search($s, $data);

    if( $aripos == $danangpos - 1)
    {
        return true;
    }else{
        return false;
    }
}
// var_dump(middleEarth(['Ari', 'Adil ','Danang'])); //false
// var_dump(middleEarth(['Ari','Danang'])); //true

function firstAndLast()
{

}