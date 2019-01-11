<?php 

// define('NAMA', 'Retno Melindi Agustin');
// echo NAMA;

// echo "<br>";

// const UMUR = 16;
// echo UMUR;


// class Coba {
// 	const NAMA = 'Retno Meelindi Agustin';
// }

// echo Coba::NAMA;



// echo __FILE__;


// function Coba() {
// 	return __FUNCTION__;
// }

// echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;







 ?>