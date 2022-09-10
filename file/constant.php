<?php

// define('NAMA', 'Rizky Andriawan');
// echo NAMA;

class Coba{
    const NAMA = 'Rizky';
    public $kelas = __CLASS__;
}

echo Coba::NAMA;

$obj = new Coba;
echo $obj->kelas;