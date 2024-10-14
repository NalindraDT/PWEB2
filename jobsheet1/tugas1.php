<?php
class Dosen{
    //Atribut
    public $nama;
    public $nip;
    public $matakuliah;

    //Construct
    public function __construct($nama, $nip, $matakuliah)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matakuliah = $matakuliah;
    }
    //Penambahan metode
    public function tampilkanDosen(){
        return "Nama = $this->nama<br>
                NIP  = $this->nip<br>
                Matakuliah = $this->matakuliah";
    }
}
    //instanisasi
    $dosen1 = new Dosen("Danur", "1234567890", "Matdis");
    echo $dosen1->tampilkanDosen();
    ?>
