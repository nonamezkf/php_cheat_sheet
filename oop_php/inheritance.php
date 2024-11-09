<?php
    class kendaraan {
        private $warna = "putih";
        private $mesin = 1000;

        public function setWarna($parameterWarna){
            $this->warna = $parameterWarna;
        }

        public function getWarna(){
            return $this->warna;
        }

        public function setMesin($parameterMesin){
            $this->mesin = $parameterMesin;
        }

        public function getMesin(){
            return $this->mesin;
        }
    }


    class Mobil extends kendaraan{

        private $temperatur = 0;

        public function __construct(){
            
        }

        public function setTemperatur($temperatur){
            $this->temperatur = $temperatur;
        }

        public function getTemperatur(){
            return $this->temperatur;
        }
    }

    class motor extends kendaraan{
        private $bagasiHelm = 0;

        public function setBagasiHelm($bagasiHelm){
            $this->bagasiHelm = $bagasiHelm;
        }

        public function getBagasiHelm(){
            return $this->bagasiHelm;
        }

    }

    $mobil = new Mobil();
    $mobil->setWarna("hitam");
    $mobil->setMesin(2000);
    $mobil->setTemperatur(15);

    echo "Mobil bewarna ". $mobil->getWarna() . " dengan mesin ". $mobil->getMesin(). "dan memeiliki pengatur temperatur yang bisa sampai dingin ". $mobil->getTemperatur(); 

    echo"<br/>";

    $motor = new motor();
    $motor->setWarna("merah");
    $motor->setMesin(150);
    $motor->setBagasiHelm(2);

    echo "Motor bewarna ". $motor->getWarna() . " dengan mesin ". $motor->getMesin(). "dan memiliki kapasitas bagasi helm ". $motor->getBagasiHelm(); 