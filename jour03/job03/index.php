<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>


<?php
$str = "I'm sorry Dave I'm afraid I can't do that";

$i = 0;

while (isset($str[$i])){
    if($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u' || $str[$i] == 'y' || 
    $str[$i] == 'A' || $str[$i] == 'E' || $str[$i] == 'I' || $str[$i] == 'O' || $str[$i] == 'U' || $str[$i] == 'Y'){
            echo $str[$i];
    }
    $i++;
}
?>
</br>
        
<?php
$str = "I'm sorry Dave I'm afraid I can't do that";

$i = 0;

while (isset($str[$i])){
    if($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u' || $str[$i] == 'y' || 
    $str[$i] == 'A' || $str[$i] == 'E' || $str[$i] == 'I' || $str[$i] == 'O' || $str[$i] == 'U' || $str[$i] == 'Y'|| $str[$i] == ' '){
            echo $str[$i];
    }
    $i++;
}
?>

</body>
</html>