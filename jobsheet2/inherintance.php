<?php
//membuat class dan atribut
class Mahasiswa{
    private $nama;
    private $nim;
    private $jurusan;

    //Pembuatan nilai awal
    public function __construct($nama, $nim, $jurusan) {

        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    // penambahan method
    public function tampilkanData() {
        return "Nama : $this->nama . <br>
                NIM : $this->nim . <br>
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
    }
}

//Pembuatan class pengguna 
class Pengguna{

    //Disini variabel bersifat protected karena yang dapat mengambil data variabel tersebut adalah class turunan dari class penggun
    protected $nama;

    //Inialisasi
    public function __construct($nama)
    {
        $this->nama = $nama;
    }
    //Pembuatan getter
    public function getNama() {
        return $this->nama;
    }
}

// Pembuatan class Dosen yang merupakan turunan dari class pengguna
class Dosen extends Pengguna{
    private $matakuliah;
    
    //Inialisasi
    public function __construct( $nama, $matakuliah)
    {
    
    //Parent disini merujuk pada variabel yang sudah ada di class pengguna
    parent::__construct($nama);
    $this->matakuliah = $matakuliah;
    }
    public function getMatakuliah(){
        return $this->matakuliah;
    }
}
//Pembuatan Objek baru
$nale = new Dosen("Nale keren","Jepang");

//Pengunaan Getter
echo $nale->getNama() . "<br>";
echo $nale->getMatakuliah()  . "<br>";
?>