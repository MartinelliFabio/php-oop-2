<?php
include_once __DIR__ . './Models/Prodotto.php';

$categoryCane = new Categoria('Cane');
var_dump($categoryCane);

$categoryGatto = new Categoria('Gatto');
var_dump($categoryGatto);

$product = new Prodotto('Mangime Cane', 'imgcane.png', 25.55, $categoryCane);
var_dump($product);


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