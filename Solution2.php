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