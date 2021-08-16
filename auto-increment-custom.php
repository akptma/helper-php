<?php

function auto_formater($date, $val, $pad, $length)
{
    $explode = explode('-', $date);
    $implode = implode('', $explode);
    $str_pad = str_pad($val, intval($length), $pad, STR_PAD_LEFT);
    return $implode . $str_pad;
}

echo auto_formater(date('Y-m-d'), 1, 0, 3);

/**
 * example : 
 *          -> 20210816 (ini diambil dari tanngal)
 *          -> 1 (ini value hasil count dari colom pada table)
 *          -> 0 (ini yang digunakan dan akan diulang sebanyak 3 kali (sesuai dengan panjang yang diinput))
 * 
 * Result : 202108160001
 *          
 */
