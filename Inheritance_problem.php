<?php 

class produk {
	public $judul,
		   $penulis,
		   $penerbit, 
		   $harga,
		   $jmlHalaman,
		   $waktumain,
		   $tipe;


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktumain = 0, $tipe ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktumain = $waktumain;
		$this->tipe = $tipe;
	}
	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap() {
		// komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
		if( $this->tipe == "komik" ) {
			$str .= " - {$this->jmlHalaman} halaman.";
		} else if( $this->tipe == "Game" ) {
			$str .= " - {$this->waktumain} jam.";
		}
		return $str;
	}

	
}


class CetakInfoProduk {
	public function cetak( produk $produk ) {
		$str = "{$produk->judul}| {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new produk("Naruto", "Masashi kishimoto", "Shonen Jump", 30000, 100, 0, "komik");
$produk2 = new produk("Uncharted", "Neil Druckmann", "sony computer", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();








 ?>