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
$str = array('', '', '', '', '', '', '', '', '');
foreach($_POST as $value){
    $str[$i] = $value;
    $i++;
}



echo "Nombre d'arguments POST : $i";
?>

<form action="./index.php" method="post">
        <div>
            <label for="titre">Titre :</label>
            <input type="text" id="titre" name="user_titre">
        </div>
        <div>
            <label for="categorie">Catégorie :</label>
            <input type="text" id="categorie" name="user_categorie">
        </div>
        <div>
            <label for="date">Date :</label>
            <input type="text" id="date" name="user_date">
        </div>
        <div>
            <label for="msg">Descritpion :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Enregistrer</button>
        </div>
    
    </form>

    <table>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td><strong><?php echo "Titre";?></strong></td>
            <td><strong><?php echo $str[0];?></strong></td>
        </tr>
        <tr>
            <td><strong><?php echo "Catégorie";?></strong></td>
            <td><strong><?php echo $str[1];?></strong></td>
        </tr>
        <tr>
            <td><strong><?php echo "Date";?></strong></td>
            <td><strong><?php echo $str[2];?></strong></td>
        </tr>
        <tr>
            <td><strong><?php echo "Descritpion";?></strong></td>
            <td><strong><?php echo $str[3];?></strong></td>
        </tr>
       
        
    </table>

</body>
</html>