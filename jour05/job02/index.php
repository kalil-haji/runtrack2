<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php


bonjour(false);
function bonjour($jour){
    if($jour == true){
        echo "Bonjour";
    }
    else{
        echo "Bonsoir";
    }
}
?>

</body>
</html>