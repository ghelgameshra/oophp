<?php

class Produk{
    public $judul,
            $penulis,
            $penerbit,
            $harga;

    // constructor dan nilai default variabel
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // fungsi getLabel untuk menampilkan isi variabel class Produk
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

} 

class CetakInfoProduk{
    // parameter $produk mengambil data dari variabel yang diinisialisasi dengan class Produk
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. $produk->harga)";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Lenovo");

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
echo "<br>";
echo $infoProduk1->cetak($produk2);