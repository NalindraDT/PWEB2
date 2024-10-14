# PWEB 2

## Object Oriented Programming


### PENGERTIAN OOP
<div align='justify'>
Penggunaan kelas dan objek adalah inti dari pemrograman berorientasi objek
(OOP). Dalam PHP, kelas digunakan untuk mendefinisikan struktur dan perilaku objek,
sedangkan objek adalah instansiasi dari kelas tersebut. Dengan memanfaatkan kelas
dan objek, kode dapat diorganisir dengan lebih baik, lebih mudah dipelihara, dan dapat
digunakan kembali.
<br>

## Pertemuan 1 dan 2 Konsep Kelas dan Objek dalam PHP

### + Class(kelas)
- Struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki
oleh objek.
- Atribut atau properties adalah variabel yang menyimpan data untuk objek.
- Metode adalah fungsi yang ditentukan dalam kelas yang dapat dipanggil oleh Objek
### + Objek

- Instansiasi dari kelas.
- Memiliki akses ke atribut dan metode yang didefinisikan dalam kelas.

### + Atribut dan Metode

- Atribut: Menyimpan data atau keadaan dari objek.
- Metode: Operasi atau fungsi yang dilakukan oleh objek.
<hr>

### 1. Membuat class(kelas) dan atribut

``` php

class Dosen{
    //Atribut
    public $nama;
    public $nip;
    public $matakuliah;
}
```
Dalam potongan coding diatas dapat disimpulkan bahwa programmer menjadikan 'Dosen' sebagai nama class dengan atribut $nama , $nip, $matakuliah. Dalam kasus ini atribut bersifat public yang berarti atribut tersebut dapat di akses dari mana saja.

### 2. Penginialisasian method (Construct)
``` php
 public function __construct($nama, $nip, $matakuliah)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matakuliah = $matakuliah;
    }
```
Perintah ' __construct ' memiliki fungsi sebagai nilai awal dari hasil pengeksekusian objek. Dalam pembuatan construct dapat menggunakan 2 metode yaitu metode dinamis dan non dinamis.
- Dinamis : construct memiliki parameter dan hasilnya dapat berubah rubah saat eksekusi objek. Seperti potongan coding diatas

- Non Dinamis : construct tidak memiliki parameter dan hasilnya tidak dapat diuba saat eksekusi objek

contoh metode Non Dinamis :
``` php
 public function __construct()
    {
        $this->nama = "Nale";
        $this->nip = "230202012";
        $this->matakuliah = "MTK";
    }
```
Dalam potongan koding diatas pada saat pengeksekusian, hasilnya tidak akan berubah karena isi dari atribut atribut sudah di inialisasi dari awal

### 3. Pembuatan method/function
``` php
//Penambahan metode
    public function tampilkanDosen(){
        return "Nama = $this->nama<br>
                NIP  = $this->nip<br>
                Matakuliah = $this->matakuliah";
    }
```
Function atau method merupakan operasi atau fungsi yang dilakukan oleh objek

### 4. Pembuatan objek baru

``` php
    //instanisasi
    $dosen1 = new Dosen("Danur", "1234567890", "Matdis");
    echo $dosen1->tampilkanDosen();
    ?>
```
Perintah "new Dosen" diartikan bahwa kita akan membuat objek baru dengan isi "Danur", "1234567890", "Matdis"

### HASIL CODING FULL
``` php
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
```

###  5. OUTPUT
<img src='img/1.png'>
</div>