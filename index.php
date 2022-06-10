<?php

require_once __DIR__ . '/Classes/User.php';
require_once __DIR__ . '/Classes/RegUser.php';
require_once __DIR__ . '/Classes/Products.php';

$utente1 = new User('Lorem','Ipsum','');
var_dump($utente1);

$utente2 = new RegUser('Dolor','Sitamet','');
$utente2->setDiscount('20%');
var_dump($utente2);
$items = [
    [
        'prodImg' => './img/felix.jpg',
        'name' => 'Le Ghiottonerie',
        'brand' => 'Felix',
        'description' => 'lorem Ipsum dolor sit amet, consectetur adipiscing elit',
        'price' => '29,99'
    ],

    [
        'prodImg' => './img/cats-original.jpg',
        'name' => 'Lettiera Bests Original',
        'brand' => 'Cats Best',
        'description' => 'lorem Ipsum dolor sit amet, consectetur adipiscing elit',
        'price' => '9,99'
    ],

    [
        'prodImg' => './img/almo-nature.jpg',
        'name' => 'Cibo per gatti in scatola',
        'brand' => 'Almo Nature',
        'description' => 'lorem Ipsum dolor sit amet, consectetur adipiscing elit',
        'price' => '5,99'
    ],
    [
        'prodImg' => './img/royal-canin.jpg',
        'name' => 'Crocchette per gatti sterilizzati',
        'brand' => 'Royal Canin',
        'description' => 'lorem Ipsum dolor sit amet, consectetur adipiscing elit',
        'price' => '39,99'
    ],
    [
        'prodImg' => './img/felix-2.jpg',
        'name' => 'Le Ghiottonerie formato scorta',
        'brand' => 'Felix',
        'description' => 'lorem Ipsum dolor sit amet, consectetur adipiscing elit',
        'price' => '41,99'
    ],
    [
        'prodImg' => './img/schesir.jpg',
        'name' => 'Alimento umido per gatti in busta',
        'brand' => 'Schesir',
        'description' => 'lorem Ipsum dolor sit amet, consectetur adipiscing elit',
        'price' => '9,50'
    ],
]

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <title>Pet Store</title>
</head>

<body>

    <div class="container">


        <div class="row row-cols-3">
            <?php foreach ($items as $key => $value) {
                $items = new Products($value['prodImg'], $value['name'], $value['brand'], $value['description'], $value['price']);
            ?>
                <div class="col my-5">
                    <div class="card" style="width: 19rem;">
                        <div class="card-body">
                            <img src="<?php echo $items->prodImg ?>" class="card-img-top" alt="...">
                            <h5 class="card-title"> <?php echo $items->name ?> </h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $items->brand ?></h6>
                            <p class="card-text"><?php echo $items->description ?></p>
                            <span class="card-subtitle mb-2 mx-5 text-success fw-bold"> € <?php echo $items->price ?></span>
                            <a href="#" class="btn btn-success">Acquista</a>
                        </div>
                    </div>
                </div>


            <?php } ?>


        </div>
    </div>




</body>

</html>