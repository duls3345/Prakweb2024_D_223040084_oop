<?php 

class Produk {
    public $judul ,
           $penulis ,
           $penerbit,
           $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis,  $this->penerbit";
    }      
}


class CetakInfoProduk {
    public function cetak( Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()},(Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto","Masashi Kishimoto","Shoen Jump", 30000);
$produk2 = new Produk("Uncherted","Neil Drucmann","Sony Cumputer", 250000);

echo "Komic : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";


$infoproduk1 = new CetakInfoProduk();
echo $infoproduk1->cetak($produk1);
