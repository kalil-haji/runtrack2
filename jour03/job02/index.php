<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php
$str = 'Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.';

$i = 0;

while (isset($str[$i])){
    if($i % 2 == 0){
    echo $str[$i];
    }
    $i++;
}
?>

</body>
</html>