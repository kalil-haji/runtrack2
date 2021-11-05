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
    $e1=$str[1];
    while($e1>0){$e1--;echo ".";}echo "/";echo "\\</br>";
    $e1=$str[1]-1;
    while($e1>0){$e1--;echo ".";}echo "/";$l1=1; while($l1 >0){$l1--;echo "_";} echo "\\</br>";
    $e1=$str[1]-2;
    while($e1>0){$e1--;echo ".";}echo "/";$l1=2; while($l1 >0){$l1--;echo "_";} echo "\\</br>";
    $e1=$str[1]-3;
    while($e1>0){$e1--;echo ".";}echo "/";$l1=3; while($l1 >0){$l1--;echo "_";} echo "\\</br>";
    $e1=$str[1]-4;
    while($e1>0){$e1--;echo ".";}echo "/";$l1=4; while($l1 >0){$l1--;echo "_";} echo "\\</br>";
    $e1=$str[1]-5;
    while($e1>0){$e1--;echo ".";}echo "/";$l1=5; while($l1 >0){$l1--;echo "_";} echo "\\</br>";
    $e1=$str[1]-5;
    while($e1>0){$e1--;echo ".";}echo "|";$l1=5; while($l1 >0){$l1--;echo "_";} echo "|</br>";
    $e1=$str[1]-5;
    while($e1>0){$e1--;echo ".";}echo "|";$l1=5; while($l1 >0){$l1--;echo "_";} echo "|</br>";
    $e1=$str[1]-5;
    while($e1>0){$e1--;echo ".";}echo "|";$l1=5; while($l1 >0){$l1--;echo "_";} echo "|</br>";
    $e1=$str[1]-5;
    while($e1>0){$e1--;echo ".";}echo "|";$l1=5; while($l1 >0){$l1--;echo "_";} echo "|</br>";
    $e1=$str[1]-5;
    while($e1>0){$e1--;echo ".";}echo "|";$l1=5; while($l1 >0){$l1--;echo "_";} echo "|</br>";
    
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