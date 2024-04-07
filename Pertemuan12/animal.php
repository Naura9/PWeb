<!--Praktikum 1 - Basic OOP-->
<?php
// // 1
// // Mendefinisikan kelas dasar Animal
// class Animal
// {
//     // Properti protected, hanya bisa diakses oleh kelas ini dan kelas turunannya
//     protected $name;

//     // Constructor untuk inisialisasi nama animal saat objek dibuat
//     public function __construct($name)
//     {
//         $this->name = $name; // Menyimpan nama yang diberikan ke properti $name
//     }

//     // Metode untuk mensimulasikan perilaku makan
//     public function eat()
//     {
//         echo $this->name . " is eating.<br>"; // Menampilkan teks bahwa hewan sedang makan
//     }

//     // Metode untuk mensimulasikan perilaku tidur
//     public function sleep()
//     {
//         echo $this->name . " is sleeping.<br>"; // Menampilkan teks bahwa hewan sedang tidur
//     }
// }

// // Kelas Cat yang merupakan turunan dari kelas Animal
// class Cat extends Animal
// {
//     // Metode khusus kelas Cat untuk mensimulasikan suara kucing
//     public function meow()
//     {
//         echo $this->name . " says meow!<br>"; // Menampilkan teks suara kucing
//     }
// }

// // Kelas Dog yang merupakan turunan dari kelas Animal
// class Dog extends Animal
// {
//     // Metode khusus kelas Dog untuk mensimulasikan suara anjing
//     public function bark()
//     {
//         echo $this->name . " says woof!<br>"; // Menampilkan teks suara anjing
//     }
// }

// // Membuat objek Cat
// $cat = new Cat("Whiskers"); // Inisialisasi objek Cat dengan nama "Whiskers"
// // Membuat objek Dog dengan perbaikan typo
// $dog = new Dog("Buddy"); // Inisialisasi objek Dog dengan nama "Buddy"

// // Memanggil metode pada objek Cat dan Dog
// $cat->eat(); // Whiskers sedang makan
// $dog->sleep(); // Buddy sedang tidur
// $cat->meow(); // Whiskers mengeluarkan suara meow
// $dog->bark(); // Buddy mengeluarkan suara woof

// 2
class animal {
    public $name; 
    protected $age; 
    private $color; 

    // Konstruktor untuk menginisialisasi properti
    public function __construct($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    // Metode untuk mendapatkan nama hewan
    public function getName()
    {
        return $this->name;
    }

    // Metode untuk mendapatkan usia hewan
    public function getAge()
    {
        return $this->age;
    }

    // Metode untuk mendapatkan warna hewan
    public function getColor()
    {
        return $this->color;
    }
}

// Membuat objek dari kelas Animal
$animal = new Animal("Dog", 3, "Brown");

// Menampilkan informasi hewan
echo "Name: " . $animal->name . "<br>"; // Properti publik dapat diakses langsung
echo "Age: " . $animal->getAge() . "<br>"; // Properti dilindungi hanya dapat diakses melalui metode
echo "Color: " . $animal->getColor() . "<br>"; // Properti pribadi tidak dapat diakses langsung

?>
