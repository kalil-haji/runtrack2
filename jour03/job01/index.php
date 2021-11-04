<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php
$array = array(200, 204, 173, 98, 171, 404, 459);
$i = 0;
while (isset($array[$i])){
    if($array[$i] % 2 == 0){
        echo "$array[$i] est pair</br>";
    }
    else{
        echo "$array[$i] est impair</br>";
    }
    $i++;
}
?>

</body>
</html>