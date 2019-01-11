<?php 

abstract class produk {
	private $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $diskon = 0;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {

		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

	}

	public function setjudul( $judul ) {
		$this->judul = $judul;
	}

	public function getjudul() {
		return $this->judul;
	}

	public function setpenulis( $penulis ) {
		$this->penulis = $penulis;
	}

	public function getpenulis() {
		return $this->penulis;
	}

	public function setpenerbit( $penerbit ) {
		$this->penerbit = $penerbit;
	}

	public function getpenerbit() {
		return $this->penerbit;
	}

	public function setdiskon( $diskon ) {
		$this->diskon = $diskon;
	}

	public function getdiskon() {
		return $this->diskon;
	}

	public function setharga( $harga ) {
		$this->harga = $harga;
	}

	public function getharga() {
		return $this->harga - ( $this->harga * $this->diskon / 100 );
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	abstract public function getInfoProduk();

	public function getInfo() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

		return $str;
	}

	
}



class komik extends produk {
	public $jmlHalaman;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {

		parent::__construct( $judul, $penulis, $penerbit, $harga );
		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfoProduk() {
		$str = "komik :" . $this->getInfo() . " - {$this->jmlHalaman} halaman.";
	return $str;
	}

}



class Game extends produk {
	public $waktumain;

	public function __construct(  $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0 ) {

		parent::__construct( $judul, $penulis, $penerbit, $harga );
		$this->waktumain = $waktumain;
	}

	public function getInfoProduk() {
		$str = "Game :" . $this->getInfo() . " - {$this->waktumain} jam.";
	return $str;
	}

}



class CetakInfoProduk {
	public $daftarProduk = array();

	public function tambahProduk( produk $produk ) {
		$this->daftarProduk[] = $produk;
	}

	public function cetak() {
		$str = "DAFTAR PRODUK : <br>";

		foreach( $this->daftarProduk as $p ) {
			$str .= "- {$p->getInfoProduk()} <br>";
		}

		return $str;
	}
}



$produk1 = new komik("Naruto", "Masashi kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "sony computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();










 ?>