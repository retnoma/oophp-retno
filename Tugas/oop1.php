<?php 

 Class Orang {
 	public $nama = 'Agustin';
 	public $jenisKelamin;

 	public function tidur()
 	{
 		return $this->nama.' sedang tidur<br>';
 	}
 }

 $saya = new Orang;
 $saya->nama = 'Retno Melindi';
 echo $saya->tidur();

 $saya->nama = 'Sagara Miller';
 echo $saya ->tidur();