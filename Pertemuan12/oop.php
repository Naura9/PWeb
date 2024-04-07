<!--Praktikum 1 - Basic OOP-->
<?php
// 1
// // Mendefinisikan kelas Car
// class Car
// {
//     public $brand; // Properti untuk menyimpan merek mobil

//     // Metode untuk memulai mesin
//     public function startEngine()
//     {
//         echo "Mesin dihidupkan!\n"; // Menampilkan pesan ketika mesin dihidupkan
//     }
// }

// // Membuat objek car1 dari kelas Car
// $car1 = new Car();
// $car1->brand = "Toyota"; // Menetapkan merek Toyota ke car1

// // Membuat objek car2 dari kelas Car
// $car2 = new Car();
// $car2->brand = "Honda"; // Menetapkan merek Honda ke car2

// $car1->startEngine(); // Memulai mesin untuk car1
// echo $car2->brand; // Menampilkan merek dari car2

// 2
// class Car
// {
//     private $model; // atribut untuk menyimpan model mobil secara privat
//     private $color; // atribut untuk menyimpan warna mobil secara privat

//     // Konstruktor untuk menginisialisasi model dan warna mobil
//     public function __construct($model, $color)
//     {
//         $this->model = $model; // Menetapkan nilai atribut $model dengan nilai dari parameter konstruktor
//         $this->color = $color; // Menetapkan nilai atribut $color dengan nilai dari parameter konstruktor
//     }

//     // Metode untuk mendapatkan model mobil
//     public function getModel()
//     {
//         return $this->model; // Mengembalikan nilai atribut $model
//     }

//     // Metode untuk mendapatkan warna mobil
//     public function getColor()
//     {
//         return $this->color; // Mengembalikan nilai atribut $color
//     }

//     // Metode untuk mengubah warna mobil
//     public function setColor($color)
//     {
//         $this->color = $color; // Mengatur nilai atribut $color dengan nilai baru
//     }
// }

// // Membuat objek dari kelas Car dengan model "Toyota" dan warna "Blue"
// $car = new Car("Toyota", "Blue");

// // Menampilkan model mobil menggunakan metode getModel()
// echo "Model: " . $car->getModel() . "<br>";

// // Menampilkan warna mobil menggunakan metode getColor()
// echo "Color: " . $car->getColor() . "<br>";

// // Mengubah warna mobil menjadi "Red" menggunakan metode setColor()
// $car->setColor("Red");

// // Menampilkan warna mobil yang telah diperbarui
// echo "Updated Color: " . $car->getColor() . "<br>";

// 3
class Car {
    private $brand; // Atribut privat untuk merepresentasikan merek mobil

    // Konstruktor untuk menginisialisasi merek mobil
    public function __construct($brand)
    {
        $this->brand = $brand; // Inisialisasi atribut $brand dengan nilai dari parameter konstruktor
    }

    // Metode untuk mendapatkan merek mobil
    public function getBrand()
    {
        return $this->brand; // Mengembalikan nilai atribut $brand
    }

    // Metode khusus yang dipanggil ketika objek dihancurkan
    public function __destruct() {
        echo "The car is destroyed. <br>"; // Menampilkan pesan ketika objek dihancurkan
    }
}

// Membuat objek dari kelas Car dengan merek "Toyota"
$car = new Car("Toyota");
// Menampilkan merek mobil menggunakan metode getBrand()
echo "Brand: " . $car->getBrand() . "<br>";

?>


