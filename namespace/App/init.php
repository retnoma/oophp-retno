<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/produk.php';
// require_once 'Produk/komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'service/User.php';


spl_autoload_register(function( $class ){
	$class = explode('\\',$class);
	$class = end($class);
	require_once 'Produk/' . $class.'.php';

	
});
spl_autoload_register(function( $class ){
	$class = explode('\\',$class);
	$class = end($class);
	require_once 'service/' . $class.'.php';

	
});

