<?php
    class Orang {
        public $nama = "jhon";
        public $umur = 1;
        function setUmur($parameterUmur){
            if($parameterUmur < 13){
                throw new Exception("maaf umur anda kurang dari atau sama dengan 13 tahun");
            }
            $this->umur = $parameterUmur;
        }

        function getUmur(){
                return $this->umur;
        }
    }

    //dibawah ini adalah instance untuk kita dapat menggunakan objek orang dengan membuat variable dan mengisikan nama objek yang kita inginkan
    $orang = new Orang();

    //dibawah ini memperbarui nilai umur dengan mengisi parameterUmur pada function setUmur dengan nilai 20
    $orang->setUmur(20); 

    echo $orang->getUmur(), "<br>";

    $orang2 = new Orang();
    $orang2->setUmur(90);
    echo $orang2->getUmur(); 

    // echo "<br/>";

    $orang3 = new Orang();
    $orang3->setUmur(10);
    echo $orang3->getUmur(); 