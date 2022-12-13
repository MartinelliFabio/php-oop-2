<?php
include_once __DIR__ . '/Models/Prodotto.php';
include_once __DIR__ . '/Models/Cibo.php';
include_once __DIR__ . '/Models/Gioco.php';
include_once __DIR__ . '/Models/Cuccia.php';




$categoryCane = new Categoria('Cane');
var_dump($categoryCane);

$categoryGatto = new Categoria('Gatto');
var_dump($categoryGatto);

// $product = new Prodotto('Mangime Cane', 'imgcane.png', 25.55, $categoryCane);
// var_dump($product);

$ciboCane = new Cibo('Scatoletta', 'imgcane.png', 25.55, $categoryCane, '01/01/2023', 10, ['Maiale', 'Pollo', 'Vitello']);
var_dump($ciboCane);

$ciboGatto = new Cibo('Croccantini', 'imggatto.png', 20.10, $categoryGatto, '01/01/2023', 5, ['Verdure', 'Pesce']);
var_dump($ciboCane);

$giocoCane = new Gioco('Pallina di gomma', 'imgpallina.png', 10.20, $categoryCane, '10x10', ['gomma']);
var_dump($giocoCane);

$cucciaCane = new Cuccia('Casetta di legno', 'imgcasetta.png', 35.99, $categoryCane, 'Outdoor', 'large', ['legno', 'ferro']);
var_dump($cucciaCane);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@3.2.41/dist/vue.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Php - Oop 2</title>
</head>
<body>


</body>
</html>