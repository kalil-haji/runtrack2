<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

$i = 0;
$v = 0;
$c = 0;
$e = 0;

while (isset($str[$i])){
    if($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u' || $str[$i] == 'y' || 
    $str[$i] == 'A' || $str[$i] == 'E' || $str[$i] == 'I' || $str[$i] == 'O' || $str[$i] == 'U' || $str[$i] == 'Y'){
            $v++;
    }
    else if($str[$i] == ' '){
        $e++;
    }
    else{
        $c++;
    }
    $i++;
}

?>

<table>
        <tr>
            <th>Voyelle</th>
            <th>consonne</th>
        </tr>
        <tr>
            <td><strong><?php echo "$v</br>";?></strong></td>
            <td><strong><?php echo "$c</br>";?></strong></td>
        </tr>
       
        
    </table>

</body>
</html>