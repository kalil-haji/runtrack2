<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php

setcookie('nbvisites', 0, time()+3600);
echo $_COOKIE['nbvisites'];


if(isset($_COOKIE['nbvisites'])){
    $_COOKIE['nbvisites'] = $_COOKIE['nbvisites'] +1;
}
else{
    
    $_COOKIE['nbvisites'] = 0;
}

echo $_COOKIE['nbvisites'];

?>

</body>
</html>