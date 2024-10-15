<?php

//Pembuatan class person
class Person1{

    //disini variabel nama bersifat protected karena //variabel ini akan dipanggil diturunkan ke sbu class
    protected $name; 

    //inisialisasi
    public function __construct($name)
    {
        $this->name = $name;
    }

    //disini function getName akan diturunkan kepada class Student dan Teacher
    public function getName()
    { 
        return $this->name;
    }
}

//pembuatan class student yang merupakan turunan dari class person
class Student extends Person1{

    //disini variabel student bersifat private karena variabel ini hanya akan digunakan di class ini
    private $studentID;

    //inisialisasi
    public function __construct( $name, $studentID)
    {
        //parent disini merujuk pada variabel nama di main class
        parent::__construct($name);
        $this->studentID=$studentID;
    }

    //setter
    public function setStudentID($studentID)
    {
        $this->studentID=$studentID;
    }
    //getter
    public function getStudentID()
    {
        return $this->studentID;
    }
    //setter
    public function setName($name)
    {
        $this->name = $name;
    }
    //Polymorphism
    public function getName()
    {
        return "halo " . "Nama saya " . $this->name . " ". "  Dengan ID " . $this->studentID;
    }
}

//pembuatan class student yang merupakan turunan dari class person
class Teacher extends Person1{

    //disini variabel teacherid bersifat private karena variabel ini hanya akan digunakan di class ini
    private $teacherID;

    //inisialisasi
    public function __construct( $name, $teacherID)
    {
        //parent disini merujuk pada variabel nama di main class
        parent::__construct($name);
        $this->teacherID=$teacherID;
    }

    //Polymorphism
    public function getName()
    {
        return "halo " . "Nama saya" . " " . $this->name . " ". "  Dengan ID " . $this->teacherID;
    }
}

//Mmembuat class yang bersifat abstarct
abstract class Course{
    
    //membuat fungsing bersifat abstract
    abstract public function getCourseDetails();

}

class OnlineCourse{

    //Memanggil function dari class courese
    public function getCourseDetails()
    {
        return "Selamat datang di course online";
    }
}

class OfflineCourse{

    //Memanggil function dari class courese
    public function getCourseDetails()
    {
        return "Selamat datang di course offline";
    }
    }

//instansiasi
$nale1= new OnlineCourse();
echo $nale1->getCourseDetails() . "<br>";
echo "<br>";

$nale2= new OfflineCourse();
echo $nale2->getCourseDetails() . "<br>";

?>