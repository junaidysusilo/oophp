<?php

// require_once 'Produk/infoProduk.php';
// require_once 'Produk/produk.php';
// require_once 'Produk/komik.php';
// require_once 'Produk/game.php';
// require_once 'Produk/cetakInfoProduk.php';

spl_autoload_register(function ($class) {
    // App\Produk\User = ["App", "Produk", "User"3]
    $class = explode('\\', $class);
    $class = end($class);
    require_once 'App/Produk/' . $class . '.php';
});

spl_autoload_register(function ($class) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once 'App/Service/' . $class . '.php';
});
