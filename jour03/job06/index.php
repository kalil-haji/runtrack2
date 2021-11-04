<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php
$str = "Les choses que l'on possede finissent par nous posseder.";

$i = 0;

while (isset($str[$i])){
    $i++;
}
echo "$i</br>";
$i--;
echo "$i</br>";

while ($i != -1){
    echo $str[$i];
    $i--;
}
?>

</body>
</html>