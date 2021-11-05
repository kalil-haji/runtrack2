<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php
var_dump($_GET);
$i = 0;
$nombre = 0;
foreach($_GET as $value){
    $nombre = $value;
    $i++;
}


echo $nombre."</br>";

if($nombre == 0){
    echo "";
}
else if($nombre % 2 == 0){
    echo "Nombre pair";
}
else{
    echo "Nombre impair";
}
?>

<form action="./index.php" method="get">
        <div>
            <label for="number">Nombre :</label>
            <input type="text" id="number" name="number">
        </div>
        <div class="button">
            <button type="submit">Enregistrer</button>
        </div>
    
    </form>

</body>
</html>