<?php  

Class OrangTua{
	public $nama = 'Agustin';
	public $jeniskelamin = 'perempuan';

	public function tidur(){
		return "{$this->nama} sedang tidur<br>";
	
	}
}
Class AnakOrang extends OrangTua{
	
public function biodata(){
		return "Nama : {$this ->nama} <br>".
			"=========================<p>";
	}
}

$anak = new AnakOrang;
$anak->nama = "Retno Melindi Agustin";
$anak->jeniskelamin = "Perempuan";
echo $anak->biodata();
echo $anak->tidur();