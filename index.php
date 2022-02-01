<?php 
require_once __DIR__ . '/classes/shop.php';
require_once __DIR__ . '/classes/utente.php';
require_once __DIR__ . '/classes/prodotto.php';


    $shop = [
        new Shop (
                "nome" => "Trony",
                "indirizzo" => "Via_mulas",
                "telefono" => "3479875622",
                "website" => "Troni.it",
                "orario" => "16-21",
                "mail" => "trony@gmail.com"
        )
        ,
        new Shop (
            "nome" => "Unieuro",
            "indirizzo" => "Via_mulas",
            "telefono" => "3479875777",
            "website" => "Unieuro.it",
            "orario" => "16-21",
            "mail" => "Unieuro@gmail.com"
        )
    ]
    );

    $prodotto = [
        new Prodotti("mause",24,257),
        new Prodotti("fender",300, 50),
        new Prodotti("playStation4",180,200)
    ];

    $utenti = [
        new Utente("Giorgio","Monne","3475584933","giorgio@gmail.com",false,"1234123423453456","21-22"),
        new Utente("Gloria","Fara","7465875686","gloria@gmail.com",false,"1234123423453456","20-22"),
    ];





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>
<body>

    <h1>Shop</h1>

    <?php foreach($prodotto as $oggetto) { ?>

        <h2>  <?php echo $oggetto->nome?> </h2>
        <h2>  <?php echo $oggetto->prezzo?> </h2>
        <h2>  <?php echo $oggetto->disponibilità?> </h2>

        <br>        

    <?php } ?>

    <br>

    <?php foreach($shop as $negozio) { ?>

    <h2>  <?php echo $negozio->nome?> </h2>
    <h2>  <?php echo $negozio->indirizzo?> </h2>
    <h2>  <?php echo $negozio->telefono?> </h2>
    <h2>  <?php echo $negozio->website?> </h2>
    <h2>  <?php echo $negozio->orario?> </h2>
    <h2>  <?php echo $negozio->mail?> </h2>
    

    <br>        

    <?php } ?>
    
</body>
</html>