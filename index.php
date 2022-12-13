<?php
include_once __DIR__ . '/Models/Prodotto.php';
include_once __DIR__ . '/Models/Cibo.php';
include_once __DIR__ . '/Models/Gioco.php';
include_once __DIR__ . '/Models/Cuccia.php';


$categoryCane = new Categoria('Cane', 'dog.png');
// var_dump($categoryCane);

$categoryGatto = new Categoria('Gatto', 'cat.png');
// var_dump($categoryGatto);

// $product = new Prodotto('Mangime Cane', 'imgcane.png', 25.55, $categoryCane);
// var_dump($product);

$ciboCane = new Cibo('Croccantini Happy Dog', 'dogfood.jpg', 25.55, $categoryCane, 10, ['Maiale - ', 'Pollo - ', 'Vitello '], '2022-12-30');
// var_dump($ciboCane);

$ciboGatto = new Cibo('Croccantini', 'cat-food.png', -5, $categoryGatto, 5, ['Salmone - ', 'Verdure - ', 'Fibre - ', 'Molluschi'], '2022-10-25');
// var_dump($ciboGatto);

$giocoCane = new Gioco('Osso di gomma', 'dog-toy.jpg', 10.20, $categoryCane, 'L 30 x P 9 x H 4.5', ['Plastica - ', 'Caucciù ']);
// var_dump($giocoCane);

$giocoGatto = new Gioco('Cannetta con topo', 'cat-toy.jpg', 3.20, $categoryGatto, '50', ['Plastica - ', 'Gomma - ', 'Tessuto']);
// var_dump($giocoGatto);

$cucciaCane = new Cuccia('Casetta di legno', 'cuccia-cane.jpg', 35.99, $categoryCane, 'Outdoor', 'L 132 x P 85 x H 86', ['Legno di abete rosso - ', 'Bitume - ', 'Ferro ']);
// var_dump($cucciaCane);

$cucciaGatto = new Cuccia('Tiragraffi Modern Living Havana', 'cuccia-gatto.jpg', 120.50, $categoryGatto, 'Indoor', 'Big', ['Velcro - ', 'Legno - ', 'Plastica - ', 'Sisal - ', 'Imbottito']);
// var_dump($cucciaGatto);


include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/main.php';
include __DIR__ . '/partials/footer.php';


?>

