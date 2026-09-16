<?php

$session_start();

if(!isset($_SESSION["pedidos"])){
    $_SESSION["pedidos"] = [];
}

$productos = [
    "cafe" =>[
        "nombre" => "Cafe Caliente",
        "categoria" => "bebidas",
        "precio" => 1.50,
        "disponibles" => 30
    ],
    "semitas" =>[
        "nombre" => "Semitas",
        "categoria" => "pan dulce",
        "precio" => 0.50,
        "disponibles" => 40
    ],
    "pastel" =>[
        "nombre" => "Pastel mani",
        "categoria" => "Pasteles",
        "precio" => 2.50,
        "disponibles" => 25
    ],
    "chocolota" =>[
        "nombre" => "Chocolate Caliente",
        "categoria" => "bebidas",
        "precio" => 1.50,
        "disponibles" => 30
    ],
];



?>