<?php 
/*
## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, 
Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$classe = [
    [
        'nome' => 'Giovanni',
        'cognome' => 'Rossi',
        'voti' => [
            'matematica' => 5, 
            'italiano' => 7, 
            'storia' => 8, 
            'inglese' => 7, 
            'scienze' => 6]
    ],
    [
        'nome' => 'Paolo',
        'cognome' => 'Bianchi',
        'voti' => [
            'matematica' => 8, 
            'italiano' => 8, 
            'storia' => 9, 
            'inglese' => 6, 
            'scienze' => 8]
    ],
    [
        'nome' => 'Mario',
        'cognome' => 'Verdi',
        'voti' => ['matematica' => 6, 
            'italiano' => 9, 
            'storia' => 7, 
            'inglese' => 9, 
            'scienze' => 5]
    ],
    [
        'nome' => 'Davide',
        'cognome' => 'Conti',
        'voti' => ['matematica' => 8, 
            'italiano' => 8, 
            'storia' => 7, 
            'inglese' => 7, 
            'scienze' => 6]
    ],
    [
        'nome' => 'Christian',
        'cognome' => 'Celeste',
        'voti' => ['matematica' => 3, 
            'italiano' => 5, 
            'storia' => 4, 
            'inglese' => 5, 
            'scienze' => 3]
    ],
    [
        'nome' => 'Luca',
        'cognome' => 'Draghi',
        'voti' => ['matematica' => 9, 
            'italiano' => 9, 
            'storia' => 10, 
            'inglese' => 9, 
            'scienze' => 9]
    ],
    [
        'nome' => 'Franco',
        'cognome' => 'Viola',
        'voti' => ['matematica' => 7, 
            'italiano' => 8, 
            'storia' => 7, 
            'inglese' => 7, 
            'scienze' => 5]
    ],
    [
        'nome' => 'Marco',
        'cognome' => 'Rosi',
        'voti' => ['matematica' => 4, 
            'italiano' => 6, 
            'storia' => 5, 
            'inglese' => 6, 
            'scienze' => 5]
    ],
    [
        'nome' => 'Andrea',
        'cognome' => 'Neri',
        'voti' => ['matematica' => 9, 
            'italiano' => 5, 
            'storia' => 6, 
            'inglese' => 5, 
            'scienze' => 8]
    ]
];

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

        
            <h1 class="text-center">Classe 1A</h1>
            <div class="container">
                <div class="row">
                <?php 
                    foreach ($classe as $alunno) {

                        $media = 0;

                        foreach ($alunno['voti'] as $voto) {

                            $media += $voto;
                        }

                        $media /= count($alunno['voti']);
                ?>

            
                
                    <div class="col-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title mb-3"><?php echo $alunno['nome'] . ' ' . $alunno['cognome'] ?></h5>
                                <ul class="list-unstyled text-capitalize">
                                    <?php 
                                        foreach ($alunno['voti'] as $materia => $voto) {
                                    ?>
                                        <li> <?php echo $materia . ' : ' . $voto ?></li>
                                    <?php } ?>
                                </ul>
                                <div class="card-text">Media voti: <?php echo $media; ?></div>
                            </div>
                        </div>
                    </div>
            
                <?php } ?>
                </div>
            </div>
</html>