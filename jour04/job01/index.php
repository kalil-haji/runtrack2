<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php
var_dump($_GET);
$i = 0;
foreach($_GET as $value){
    echo $value."</br>";
    $i++;
}

echo "Nombre d'arguments GET : $i";
?>

<form action="./index.php" method="get">
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

</body>
</html>