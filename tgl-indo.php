<?php

function tgl_indo($val)
{
    $explode = explode('-', $val);
    $tgl     = $explode[0];
    $bulan   = $explode[1];
    $tahun   = $explode[2];
    switch ($bulan) {
        case '01':
            return ($tgl . ' ' .  'Januari' . ' ' .  $tahun);
            break;
        case '02':
            return ($tgl . ' ' .  'Februari' . ' ' .  $tahun);
            break;
        case '03':
            return ($tgl . ' ' .  'Maret' . ' ' .  $tahun);
            break;
        case '04':
            return ($tgl . ' ' .  'April' . ' ' .  $tahun);
            break;
        case '05':
            return ($tgl . ' ' .  'Mei' . ' ' .  $tahun);
            break;
        case '06':
            return ($tgl . ' ' .  'Juni' . ' ' .  $tahun);
            break;
        case '07':
            return ($tgl . ' ' .  'July' . ' ' .  $tahun);
            break;
        case '08':
            return ($tgl . ' ' .  'Agustus' . ' ' .  $tahun);
            break;
        case '09':
            return ($tgl . ' ' .  'September' . ' ' .  $tahun);
            break;
        case '10':
            return ($tgl . ' ' .  'Oktober' . ' ' .  $tahun);
            break;
        case '11':
            return ($tgl . ' ' .  'November' . ' ' .  $tahun);
            break;
        case '12':
            return ($tgl . ' ' .  'Desember' . ' ' .  $tahun);
            break;

        default:
            return "Format bulan harus mengunakan M kecil m, date('d-m-Y H:i:s')";
            break;
    }
}

echo tgl_indo(date('d-m-Y H:i:s'));
    // output Example:  01 Januari 2022
