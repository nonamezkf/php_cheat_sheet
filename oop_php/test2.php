<?php
    class Orang {
        public $nama = "jhon";
        public $umur = 1;
        function setUmur($parameterUmur){
            $this->umur = $parameterUmur;
        }

        function getUmur(){
            return $this->umur;
        }
    }

    $orang = new Orang();
    $orang->setUmur(10);

    echo $orang->getUmur(), "<br>";
    echo $orang->umur;