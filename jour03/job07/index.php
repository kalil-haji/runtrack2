<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$i = 0;
/*
while (isset($str[$i])){
    if($i == 59){
        echo $str[0];
    }
    else{
    echo $str[$i+1];
    }
    $i++;
}

echo "$str</br>";
*/

$j = 0;
$str1 = "";
while (isset($str[$j])){
    if($j < 59){
        $str1[$j] = $str[$j+1];
    }
    else{
        $str1[59] = "C";
    }
$j++;
}
echo "$str</br>";
echo $str1;
?>

</body>
</html>