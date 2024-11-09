<?php 
    interface ProsesDataBase{
        public function simpan($pesan);
    }

    class DbMysql implements ProsesDataBase{
        public function simpan($pesan){
            return "Data berhasil disimpan ke data base Mysql : " . $pesan;
        }
    }

    class DbMongo implements ProsesDataBase{
        public function simpan($pesan){
            return "Data berhasil disimpan ke data base Mongo : " . $pesan;
        }
    }

    class konten{
        protected $prosesDataBase;

        public function __construct(ProsesDataBase $ProsesDataBase){
            $this->prosesDataBase = $ProsesDataBase;
        }

        public function kontenBaru(){
            $konten = "simpan konten baru";

            return $this->prosesDataBase->simpan($konten);
        }
    }

    $konten = new konten(new DbMongo);

    echo $konten->kontenBaru();