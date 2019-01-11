<?php 

// jumlah produk
// komik
// game

class produk {
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}


}


// $produk1 = new produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);


// $produk2 = new produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahproperty = "hahahha";
// var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "sony computer";
$produk4->harga = 250000;

echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "game : " . $produk4->getLabel();



 ?>