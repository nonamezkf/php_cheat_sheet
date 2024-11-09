<?php
    class Orang {
        public $nama = "jhon";

        function setAlamat(){
            return "Jombang";
        }
    }

    $orang = new Orang();
    $orang2 = new Orang();
    echo $orang->nama, "<br/>";
    echo $orang2->setAlamat();