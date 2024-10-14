<?php

//Definisi kelas
class Mahasiswa{
    //Atribut atau properties
    public $nama;
    public $nim;
    public $jurusan;

    //Constructor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //Metode atau Function
    public function tampilkanData() {
        return 
        "Nama saya adalah $this->nama, <br> 
        NIM $this->nim, <br>
        Saya dari jurusan $this->jurusan.";
    }
    public function updateJurusan($jurusan1) {
        $this->jurusan = $jurusan1;
    }
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }
}
    //Instansiasi

    echo "Sebelum diubah<br>";
    $mahasiswa1 = new Mahasiswa ("Nalindra", "230202070", "Teknik Informatika");
    echo $mahasiswa1->tampilkanData();
    $mahasiswa1->updateJurusan("Teknik Mesin");
    echo "<br>";
    $mahasiswa1->setNim("2302020891");
    echo "<br>";
    echo "Sesudah diubah<br>";
    echo $mahasiswa1->tampilkanData();


    ?>
