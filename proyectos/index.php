<?php

$session_start();


if(!isset($_SESSION["pedidos"])){
    $_SESSION["pedidos"] = [];
}

$productos = [
    "cafe" =>[
        "nombre" => "Cafe Caliente",
        "categoria" => "bebidas",
        "precio" => 5.50,
        "disponibles" => 30
    ],
    "semitas" =>[
        "nombre" => "Semitas",
        "categoria" => "pan dulce",
        "precio" => 3.50,
        "disponibles" => 40
    ],
    "pastel" =>[
        "nombre" => "Pastel mani",
        "categoria" => "Pasteles",
        "precio" => 10.50,
        "disponibles" => 25
    ],
    "chocolota" =>[
        "nombre" => "Chocolate Caliente",
        "categoria" => "bebidas",
        "precio" => 5.50,
        "disponibles" => 30
    ],
    "desayuno" =>[
        "nombre" => "Huevos con casamiento",
        "categoria" => "alimentos",
        "precio" => 15.50,
        "disponibles" => 30
    ],
];

function calcularPago(float $total){

}
$errores = [];

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $nombre = trim($_POST["nombre"]) ?? [];
    $cantidad = trim($_POST["cantidad"]) ?? [];
    $productos = trim($_POST["producto"]) ?? [];
    
    if(empty($nombre) || empty($cantidad) ){
        $errores[] ="Facil relleno todos los campos obligatorios"; 
    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Seleccione sus alimentos</h2>

    <?php if(!empty($errores)):?>
        <div>
            <ul>
                <?php foreach($errores as $error): ?>
                    <li> <?= htmlspecialchars($error)?> </li>    
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <div>
        <form action="" METHOD = "POST">
            <LABEl>Nombre</LABEl><br>
            <input type="text" name="nombre"><br>
            
            <LABEl>Nombre</LABEl><br>
            <input type="number" name="cantidad" min="1"><br>
            
            <LABEl>Productos</LABEl><br>
            <select name="productos">
                <option value="">--- Seleccione un producto</option>
                <?php  ?>
            </select>

            <LABEl>Nombre</LABEl><br>
            <input type="text" name="nombre"><br>
            
            <LABEl>Nombre</LABEl><br>
            <input type="text" name="nombre"><br>
            
            




        </form>
    </div>
</body>
</html>