<?php
//membuat class dan atribut
class Mahasiswa extends Pengguna {
    private $nim;
    private $jurusan;

    //Pembuatan nilai awal
    public function __construct($nama, $nim, $jurusan) {

        //Parent disini merujuk pada atribut yang diturunkan oleh main class
        parent::__construct($nama);
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    // penambahan method
    public function tampilkanData() {
        return "Nama : $this->nama <br>
                NIM : $this->nim <br>
                Jurusan : $this->jurusan";
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
    }//Pembuatan method 
    public function aksesFitur(){
        echo "Data dapat diakses mahasiswsa";
    }
}

//pembuatan class pengguna
class Pengguna {

    //disini variable nama bersifat protected karena variabel ini akan memiliki turunan yang nantinya akan mengambil variabel nama
    protected $nama;

    //inialisasi
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    //Pembuatan getter
    public function getNama() {
        return $this->nama;
    }

    //pembuatan method
    public function aksesFitur(){
        echo "";
    }
}

//Pembuatn class dosen yang merupakan turunan dari pengguna
class Dosen extends Pengguna{
    private $matakuliah;
    
    //inialisasi
    public function __construct( $nama, $matakuliah)
    {
    
    //Parent disini merujuk pada atribut yang diturunkan oleh main class
    parent::__construct($nama);
    $this->matakuliah = $matakuliah;
    }
    //Pembuatan method matkul
    public function getMatakuliah(){
        return $this->matakuliah;
    }
    //pembuatan method
    public function aksesFitur(){
        echo "Data dapat diakses dosen";
    }
}

//pembuatan objek baru
$nale = new Dosen("Nale keren","Jepang");

echo $nale->getNama() . "<br>";
echo $nale->getMatakuliah()  . "<br>";

//pemanggilan fungsi
$nale->aksesFitur() . "<br>";
echo "<br>";
echo "<br>";

//pembuatan objek baru
$nale1 = new Mahasiswa("Nale", 2302020203, "MJJJ <br>") ;
echo $nale1->tampilkanData() . "<br";
echo "<br>";

//pemanggilan fungsi
$nale1->aksesFitur();
?>