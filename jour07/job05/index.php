<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php



echo occurrences("test de rrrrrr", 'r');
function occurrences($str, $char){
$r = 0;
$i = 0;
    while(isset($str[$i])){
        if ($str[$i] == $char){
            $r++;
        }
        $i++;
    }
    
    return ($r);
}
?>
<form action="./index.php" method="post">
        <div class="button">
            <button type="submit">Enregistrer</button>
        </div>
    </form>

<table>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td><strong>t</strong></td>
            <td><strong>t</strong></td>
            <td><strong>t</strong></td>
        </tr>
        <tr>
            <td><strong>t</strong></td>
            <td><strong>t</strong></td>
            <td><strong>t</strong></td>
        </tr>
       
        
    </table>

</body>
</html>