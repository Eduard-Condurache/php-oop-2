<?php

include_once __DIR__ . '/classes/Category.php';
include_once __DIR__ . '/classes/Products.php';
include_once __DIR__ . '/classes/Food.php';
include_once __DIR__ . '/classes/Toys.php';
include_once __DIR__ . '/classes/Medicinals.php';


$dog = new Category(
    'Cani',
    'fa-solid fa-tag'
);

$cat = new Category(
    'Gatti', 
    'fa-solid fa-tag'
);

// PRODUCTS FOR CATS

$cat_food1 = new Food(
    'Purina One Gatto',
    '5.99',
    'Disponibile alla consegna',
    'https://arcaplanet.vtexassets.com/arquivos/ids/276531/MAIN.jpg?v=638034242465370000',
    'Cibo secco',
    $cat
);

$cat_toy1 = new Toys(
    'Gioco gatto cannetta',
    '3.49',
    'Disponibile alla consegna',
    'https://arcaplanet.vtexassets.com/arquivos/ids/209730/YES--Gioco-Gatto-Cannetta-Bird.jpg?v=637413991001700000',
    'Gomma naturale',
    $cat
);


$cat_medicine1 = new Medicinals(
    'Frontline Combo',
    '36.99',
    'Disponibile alla consegna',
    'https://arcaplanet.vtexassets.com/arquivos/ids/288881/Pack-Combo-Gatto-6.jpg?v=638271647823500000',
    '6 pipette',
    $cat
);

// PRODUCTS FOR DOGS.

$dog_food1 = new Food(
    'Monge Natural',
    '41.99',
    'Disponibile alla consegna',
    'https://arcaplanet.vtexassets.com/arquivos/ids/301605/monge-natural-superpremium-adult-all-breeds-con-salmone-10069078--1-.jpg?v=638518936103200000',
    'Cibo secco',
    $dog
);

$dog_toy1 = new Toys(
    'Palla per cane',
    '6.79',
    'Disponibile alla consegna',
    'https://arcaplanet.vtexassets.com/arquivos/ids/218035/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-palla-gioco-con-impronte-in-gomma-naturale-tric83.jpg?v=637454594710630000',
    'Gomma naturale',
    $dog
);


$dog_medicine1 = new Medicinals(
    'Sereste Collare',
    '34.99',
    'Disponibile alla consegna',
    'https://arcaplanet.vtexassets.com/arquivos/ids/269684/seresto-antiparassitario-cane-grande.jpg?v=637831870401100000',
    '70cm',
    $dog
);

$productsArr = [
    $cat_food1,
    $cat_toy1,
    $cat_medicine1,
    $dog_food1,
    $dog_toy1,
    $dog_medicine1,
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($productsArr as $product) :?>
                <div class="col-12 col-sm-6 col-md-4 my-3">
                    <div class="card">
                        <div class="card-body">
                            <img 
                                class="card-img-top px-4" 
                                src="<?php echo $product->getImg(); ?>" 
                                alt="<?php echo $product->getTitle(); ?>">

                            <h4>
                                <?php echo $product->getTitle(); ?>
                            </h4>

                            <h6>
                                <?php echo $product->getDescription(); ?>
                            </h6>

                            <h6>
                                €<?php echo $product->getPrice(); ?>
                            </h6>
                            

                            <div>
                                <i class="<?php echo $product->getCategory()->icon; ?>"></i>
                                <span><?php echo $product->getCategory()->name; ?></span>
                            </div>


                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>
</body>
</html>