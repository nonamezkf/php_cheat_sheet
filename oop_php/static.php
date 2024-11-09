<?php

use Orang as GlobalOrang;

class Orang {
        public static $umur = 5;

        const nama = "david";

        public function tambahUmur($umur){
           static::$umur += $umur;  
        }
    }

    // $orang = new Orang(); ketika menggunakan static untuk mengakses value dari property tidak perlu membuat instance

    $jhon = new Orang();
    $jhon->tambahUmur(10);
    $jhon->tambahUmur(10);


    $tom = new Orang();
    $tom->tambahUmur(10);
    // echo orang::$umur; 

    echo Orang::nama . " Berumur ". Orang::$umur;