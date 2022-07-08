<?php 
/*
## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo 
di 3 caratteri,che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, 
altrimenti “Accesso negato”
 */

$name = key_exists("name", $_GET) ? $_GET["name"] : "";
$mail = key_exists("mail", $_GET) ? $_GET["mail"] : "";
$age = key_exists("age", $_GET) ? $_GET["age"] : "";

$nameValid = (strlen($name) > 3) !== false;
$mailValid = (strpos($mail, ".") !== false) && (strpos($mail, "@") !== false);
$ageValid = is_numeric($age) == true;

$valid=false;

if($nameValid && $mailValid && $ageValid){
    $valid=true;
}
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
    
    <div class="container mt-5">

        <form class="mb-5">
            <div class="mb-3">
                <label class="form-label">Nome utente</label>
                <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Mail</label>
                <input type="text" class="form-control" name="mail" value="<?php echo $mail ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Età</label>
                <input type="text" class="form-control" name="age" value="<?php echo $age ?>">
            </div>
            <button class="btn btn-primary" type="submit">Invia</button>
        </form>

        <?php if($valid){ ?>
            <div class="alert alert-success">
                Accesso riuscito
            </div>
        <?php } else { ?>
            <div class="alert alert-danger">
                Accesso negato
            </div>
        <?php } ?>
    </div>
</body>
</html>