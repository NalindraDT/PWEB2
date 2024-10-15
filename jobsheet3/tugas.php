<?php

//Pembuatan class person
class Person {
    protected $nama;
    protected $umur;

    //inisialisasi
    public function __construct($nama, $umur){
        $this->nama=$nama;
        $this->umur=$umur;
    }
    //getter
    public function getNama() {
    return $this->nama;
    }//setter
    public function setNama($nama) {
    $this->nama = $nama;
    }
    //getter
    public function getUmur() {
        return $this->umur;
    }//setter
    public function setUmur($umur) {
    $this->umur = $umur;
    }
    //Pembuatan method getRole di class person
    public function getRole()
    {
        return " ";
    }
}
//Pembuatan class dosen dimana class dosen merupakan turunan atau subclass dari class person
class Dosen extends Person {
    private $nidn;
    public $jabatan;

    //Pembuatan method construct
    public function __construct($nama, $umur, $nidn, $jabatan){
        parent ::__construct($nama, $umur,);
        $this->nidn=$nidn;
        $this->jabatan=$jabatan;
    }
    //getter
    public function getNidn() {
        return $this->nidn;
    }//setter
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }//getter
    public function getRole()
    {
        return "Nama saya " . $this->nama . ", saya berumur " . $this->umur . " tahun. <br>" . "Saya merupakan " . $this->jabatan . " dari PNC <br>" . "NIDN saya: " . $this->nidn ;
    }
}

//Pembuatan class mahasiswa dimana class mahasiswa merupakan turunan atau subclass dari class person
class Mahasiswa extends Person {
    private $nim;
    public $ipk;

    ////Pembuatan method construct
    public function __construct($nama, $umur, $nim, $ipk){
        parent ::__construct($nama, $umur);
        $this->nim=$nim;
        $this->ipk=$ipk;
    }
    public function getNim() {
        return $this->nim;
    }//setter
    public function setNim($nim) {
        $this->nim = $nim;
    }
    //Pembuatan method getRole
    public function getRole()
    {
        return "Nama saya " . $this->nama . ", saya berumur " . $this->umur . " tahun. <br>" . "Saya merupakan mahasiswa PNC dengan nim " . $this->nim . "<br>saya memiliki IPK: ". $this->ipk ;
    }
}

//Pembuatan abstract class jurnal
abstract class Jurnal{

    //pembuatan abstart method
    abstract public function InfoJurnal();
}

//Pembuatan class JurnalDosen yang merupakan turunan dari class Jurnal
class JurnalDosen extends Jurnal{

    //Hasil overriding
    public function InfoJurnal(){
        return "Anda memasuki Jurnal dosen, anda pasti dosen";
    }
}
//Pembuatan class JurnalMahasiswa yang merupakan turunan dari class Jurnal
class JurnalMahasiswa extends Jurnal{

    ///Hasil overriding
    public function InfoJurnal(){
        return "Anda memasuki Jurnal mahasiswa, anda pasti mahasiswa";
    }
}

//Instansiasi
$nale = new Dosen("Komeng", 30 , 2020202, "Direktur" );
$nale1 = new Mahasiswa("Nale", 19 , 230202070, 3.8 );
$jurnal1 = new JurnalDosen;
$jurnal2 = new JurnalMahasiswa;

//Penggunaan setter dan getter
$nale->setNama("Kuroko");
$nale->setUmur(28);
$nale->setNidn(101010);

$nale1->setNama("Nale");
$nale1->setUmur(20);
$nale1->setNim(230202070);

echo "Nama saya " . $nale->getNama() . "<br>";
echo " saya berumur " . $nale->getUmur() . "<br>";
echo " NIDN saya: " . $nale->getNidn() . "<br>";

echo "<br>";

echo "Nama saya " . $nale1->getNama() . "<br>";
echo " saya berumur " . $nale1->getUmur() . "<br>";
echo " saya merupakan mahasiswa PNC dengan nim " . $nale1->getNim() . "<br>";

echo "<br>";

//instansiasi
echo $jurnal1->InfoJurnal() . "<br>";
echo $jurnal2->InfoJurnal();


