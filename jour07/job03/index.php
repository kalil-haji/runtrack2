<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php
session_start();


var_dump($_POST);
$i = 0;
$_SESSION['prenom'] = array_fill(5, 6, '');
foreach($_POST as $value){
    $_SESSION['prenom'][$i] = $value;
    $i++;
}



var_dump($_SESSION['prenom']);


?>

<form action="./index.php" method="post">
        <div>
            <label for="prenom">Prenom :</label>
            <input type="text" id="prenom" name="user_username">
        </div>
        <div class="button">
            <button type="submit">Enregistrer</button>
        </div>
    
    </form>

</body>
</html>