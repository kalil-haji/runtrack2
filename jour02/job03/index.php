<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php
$var = 0;

while($var <= 100){
if($var >= 0 && $var <= 20){
    echo "<i>$var</i></br>";
}

else if($var >= 25 && $var <= 50){
    if($var == 42){
        echo "La Plateforme_</br>";
    }
    else{
    echo '<u>'.$var.'</u></br>';
    }
}

else{
    echo $var."</br>";
    
}
$var += 1;
}
?>

</body>
</html>