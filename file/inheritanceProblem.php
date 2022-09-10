<?php

class Produk{
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jumlahHalaman,
            $waktuMain,
            $tipe;

    // constructor dan nilai default variabel
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0, $tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    // fungsi getLabel untuk menampilkan isi variabel class Produk
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        if($this->tipe == "Komik"){
            $str .= "  - {$this->jumlahHalaman} halaman.";
        } else if($this->tipe == "Game"){
            $str .= "  ~ {$this->waktuMain} jam.";
        }

        return $str;
    }

} 

class CetakInfoProduk{
    // parameter $produk mengambil data dari variabel yang diinisialisasi dengan class Produk
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. $produk->harga)";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();