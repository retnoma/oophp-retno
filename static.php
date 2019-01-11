<?php 

// class contohStatic {
// 	public static $angka = 1;

// 	public static function hallo() {
// 		return 'hallo ' . self::$angka++ . " kali. ";
// 	}
// }

// echo contohStatic::$angka;
// echo "<br>";
// echo contohStatic::hallo();
// echo "<hr>";
// echo contohStatic::hallo();


class contoh {
	public static $angka = 1;

	public function hallo() {
		return "Annyeong " . self::$angka++ . "kali <br>";
	}
}

$obj = new contoh;
echo $obj->hallo();
echo $obj->hallo();
echo $obj->hallo();

echo "<hr>";

$obj2 = new contoh;
echo $obj2->hallo();
echo $obj2->hallo();
echo $obj2->hallo();




?>