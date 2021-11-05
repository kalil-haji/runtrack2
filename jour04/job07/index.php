<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php
var_dump($_POST);
$i = 0;
$str = array('');
foreach($_POST as $value){
    $str[$i] = $value;
    $i++;
}

$i = 0;
if($str[0] == "10" && $str[1] == "5"){
    $e1=5;
    for($h=0; $h<5; $h++){
        $e1-=$e1;while($e1>0){echo "e";$e1--;}
        
        echo "/";
        
        for($l1=0; $l1<$h; $l1++){ echo "_";}
        echo "\\</br>";
    }
    
}
else if($str[0] == "20" && $str[1] == "10"){
    echo "maison grande";
}

?>

<form action="./index.php" method="post">
        <div>
            <label for="width">Largeur :</label>
            <input type="text" id="width" name="width">
        </div>
        <div>
            <label for="height">Hauteur :</label>
            <input type="text" id="height" name="height">
        </div>
        <div class="button">
            <button type="submit">Enregistrer</button>
        </div>
    
    </form>

</body>
</html>