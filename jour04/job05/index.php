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

if($str[0] == "John" && $str[1] == "Rambo"){
    echo "C'est pas ma guerre";
}
else if($str[0] != "John" || $str[1] != "Rambo"){
    echo "Votre pire cauchemar";
}
?>

<form action="./index.php" method="post">
        <div>
            <label for="username">Username :</label>
            <input type="text" id="username" name="user_username">
        </div>
        <div>
            <label for="password">Password :</label>
            <input type="text" id="password" name="user_password">
        </div>
        <div class="button">
            <button type="submit">Enregistrer</button>
        </div>
    
    </form>

</body>
</html>