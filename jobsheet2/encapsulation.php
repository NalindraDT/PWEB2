<?php
//membuat class dan atribut
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;

    //Pembuatan nilai awal
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }//getter
    public function getNama() {
        return $this->nama;
    }//setter
    public function setNama($nama) {
        $this->nama = $nama;
    }//getter
    public function getNim() {
        return $this->nim;
    }//setter
    public function setNim($nim) {
        $this->nim = $nim;
    }//getter
    public function getJurusan() {
        return $this->jurusan;
    }//setter
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

}
//Membuat Objek baru
$nale = new Mahasiswa ("kosong", "kosong", "kosong");

//penggunaan setter
$nale->setNama("Nale tamvan");
$nale->setNim("230202070");
$nale->setJurusan("Teknik Informatika");

//pengunaan geter
echo "Nama :" . $nale->getNama() . "<br>"; 
echo "NIM :" . $nale->getNim()  . "<br>"; 
echo "Jurusan :" . $nale->getJurusan(); 

?>