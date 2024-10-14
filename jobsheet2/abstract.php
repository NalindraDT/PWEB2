<?php

//Pembuatan abstarct class Pengguna
abstract class Pengguna{

    //disini atribuut bersifat protected
    protected $nama;

    //pembuatan consturct
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    //pembuatan method
    abstract public function aksesFitur ();
}

//Pembuatan class Dosen yang merupkan turunan dari class pengguna
class Dosen extends Pengguna {

    //disini atribut bersifat private
    private $matakuliah;

    //Pembuatan public function consturct
    public function __construct($nama,$matakuliah){

        //Parent disini merujuk pada class pengguna karena variabel nama merupakan turunan dari class pengguna
        parent:: __construct($nama);
        $this->matakuliah = $matakuliah;
    }
    
    //Pembuatan method aksesFitur
    public function aksesFitur() {
        return "Halo nama saya"." ". $this->nama . " "."<br>saya merupakan dosen pengajar matkul"." ". $this->matakuliah .", "."<br>disini saya dapat mengkases data dosen dan mahasiswa.";
    }

}

//pembuatan class mahasiswa yang merupakan turunan dari class pengguna
class Mahasiswa extends Pengguna {
    private $nim;
    private $jurusan;

    //Pembuatan fungsi construct
    public function __construct($nama,$nim,$jurusan){
        parent::__construct($nama);
        $this->nim = $nim;
        $this->jurusan =$jurusan;
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

    //Pembuatan fungsi aksesFitur
    public function aksesFitur() {
        return "Halo nama saya"." ". $this->getNama() ." "."<br>saya merupakan mahasiswa PNC dengan NIM"." ". $this->getNim() ." "."<br>dari jurusan" ." ". $this->getJurusan() .", "."disini saya dapat mengkases data mahasiswa saja" ;
    }
    
}

 //Pembuatan objek baru
$nale = new Dosen ("Uzumaki Ujang", "Tenaga Nuklir");
echo $nale->aksesFitur() . "<br>";
echo "<br>";

//Pembuatan objek baru
$nale1 = new Mahasiswa ("kosong", "kosong", "kosong");
//penggunaan setter
$nale1->setNama("Emiya Nalindra");
$nale1->setNim("230202070");
$nale1->setJurusan("Teknik Informatika");

echo $nale1->aksesFitur();
?>