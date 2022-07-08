<?php
/*## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa 
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

$match = [
    [
        "local" => "Virtus Segafredo Bologna",
        "host" => "Bertram Derthona Basket Tortona",
        "localscore" => rand(55,80),
        "hostscore" => rand(55,80)
    ],
    [
        "local" => "AX Armani Exchange Milano",
        "host" => "Vanoli Basket Cremona",
        "localscore" => rand(55,80),
        "hostscore" => rand(55,80)
    ],
    [
        "local" => "Germani Brescia",
        "host" => "Umana Reyer Venezia",
        "localscore" => rand(55,80),
        "hostscore" => rand(55,80)
    ],
    [
        "local" => "Banco di Sardegna Sassari",
        "host" => "Unahotels Reggio Emilia",
        "localscore" => rand(55,80),
        "hostscore" => rand(55,80)
    ],
    [
        "local" => "Fortitudo Kigili Bologna",
        "host" => "Carpegna Prosciutto Pesaro",
        "localscore" => rand(55,80),
        "hostscore" => rand(55,80)
    ],
    [
        "local" => "Allianz Pallacanestro Trieste",
        "host" => "Openjobmetis Varese",
        "localscore" => rand(55,80),
        "hostscore" => rand(55,80)
    ],
    [
        "local" => "Happy Casa Brindisi",
        "host" => "Nutribullet Treviso Basket",
        "localscore" => rand(55,80),
        "hostscore" => rand(55,80)
    ],
    [
        "local" => "GeVi Napoli",
        "host" => "Dolomiti Energia Trentino",
        "localscore" => rand(55,80),
        "hostscore" => rand(55,80)
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous'/>
</head>
<body>

    <div class="container mt-3">
        <h1 class="text-uppercase text-center mb-2">13ª giornata</h1>
        <div class="row row-cols-3">

            <?php
                for ($i = 0; $i < count($match); $i++) {
                    $matchCorrente = $match[$i];
                    
                    //poichè la partita non può finire in pareggio
                    if($matchCorrente["localscore"] === $matchCorrente["hostscore"]){
                        $matchCorrente["localscore"] = $matchCorrente["localscore"] + 1;
                    }
            ?>

            <div class="col">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="card-text"><strong><?php echo $matchCorrente["local"]?></strong> : <?php echo $matchCorrente["localscore"] ?></div>
                        <div class="card-text"><strong><?php echo $matchCorrente["host"]?></strong> : <?php echo $matchCorrente["hostscore"] ?></div>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>

</body>
</html>