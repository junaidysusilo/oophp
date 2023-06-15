<?php

// define('NAMA', 'Junaidy Susilo');
// echo NAMA;

// echo "<br>";

// const UMUR = 32;
// echo UMUR;


// class coba
// {
//     const NAMA = 'Junaidy';
// }

// echo coba::NAMA;



// echo __FUNCTION__ ;


// function coba()
// {
//     return __FUNCTION__;
// }
// echo coba();


class coba
{
    public $kelas = __CLASS__;
}

$obj = new coba;
echo $obj->kelas;
