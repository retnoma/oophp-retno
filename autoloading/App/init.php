<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/produk.php';
// require_once 'Produk/komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';


spl_autoload_register(function( $class ){
	require_once 'Produk/' . $class.'.php';
});
