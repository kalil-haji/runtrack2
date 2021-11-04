<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php
$str = "Dans l'espace, personne ne vous entend crier";

$i = 0;

while (isset($str[$i])){
    $i++;
}
echo $i;
?>

</body>
</html>