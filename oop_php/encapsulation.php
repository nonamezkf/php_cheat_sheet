<?php
    class Orang {
        public $nama = "jhon";
        private $umur = 1;
        public function setUmur($parameterUmur){
            if($parameterUmur < 13){
                throw new Exception("maaf umur anda kurang dari atau sama dengan 13 tahun");
            }
            $this->umur = $parameterUmur;
        }

        public function getUmur(){
                return $this->umur;
        }

        private function jurusan(){

        }

        protected function tglLahir(){
            
        }
    }

    //dibawah ini adalah instance untuk kita dapat menggunakan objek orang dengan membuat variable dan mengisikan nama objek yang kita inginkan
    $orang = new Orang();

    //dibawah ini memperbarui nilai umur dengan mengisi parameterUmur pada function setUmur dengan nilai 20
    $orang->setUmur(20);
    
    // $orang->umur = 20;

    echo $orang->getUmur(), "<br>";