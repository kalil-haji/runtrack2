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
$tab = array('');
foreach($_POST as $value){
    $tab[$i] = $value;
    $i++;
}

$str = "";
$str = $tab[0];
echo $str;

    if($tab[1] == 'gras'){
        function gras($str){
        $i = 0;
        while (isset($str[$i])){
            if($str[$i] == 'A' || $str[$i] == 'B' || $str[$i] == 'C' || $str[$i] == 'D' || $str[$i] == 'E' || $str[$i] == 'F' || $str[$i] == 'G' || $str[$i] == 'H' || $str[$i] == 'I' || $str[$i] == 'J' || $str[$i] == 'K' || $str[$i] == 'L' || $str[$i] == 'M' || $str[$i] == 'N' || $str[$i] == 'O' || $str[$i] == 'P' || $str[$i] == 'Q' || $str[$i] == 'R' || $str[$i] == 'S' || $str[$i] == 'T' || $str[$i] == 'U' || $str[$i] == 'V' || $str[$i] == 'W' || $str[$i] == 'X' || $str[$i] == 'Y' || $str[$i] == 'Z'){
                if($str[$i+1] != ' '){
                    echo "<b>$str[$i]<b>";
                    //boucle qui met en gras avant la maj et apres derniere lettre
                }
            }
            $i++;
        }
    }
}
    else if($tab[1] == 'cesar'){

    }
    else if($tab[1] == 'plateforme'){
        function plateforme($str){
            $i=0;
            while (isset($str[$i])){
                if($str[$i] == 'm' && $str[$i+1] == 'e' && $str[$i+2] == ' '){
                    $str[$i+1] = 'e_';
                }
                $i++;
            }
        }
    }
    echo $str;
    echo plateforme($str);
?>

<form action="./index.php" method="post">
        <div>
            <label for="str">str :</label>
            <input type="text" id="str" name="str">
        </div>
        <div>
        <label for="fonction">Choisissez une fonction:</label>

<select name="fonction" id="fonction">
    <option value=""></option>
    <option value="gras">Gras</option>
    <option value="cesar">Cesar</option>
    <option value="plateforme">Plateforme</option>
</select>
        </div>
        <div class="button">
            <button type="submit">Enregistrer</button>
        </div>
    
    </form>

</body>
</html>