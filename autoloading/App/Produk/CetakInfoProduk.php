<?php

class CetakInfoProduk{
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;
    }


    // parameter $produk mengambil data dari variabel yang diinisialisasi dengan class Produk
    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";

        foreach($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
        }


        return $str;
    }
}