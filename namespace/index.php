<?php 

require_once 'App/init.php';

// $produk1 = new komik("Naruto", "Masashi kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "sony computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\service\User as serviceUser;
use App\Produk\User as ProdukUSer ;

new serviceUser();
echo"<br>";
new  ProdukUser();
