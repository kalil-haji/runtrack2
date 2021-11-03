<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php
$var = 0;

while($var <= 1337){
if($var == 42){
    echo '<b><u>42</u></b>'."</br>";
}

else{
    echo $var."</br>";
    
}
$var += 1;
}
?>

</body>
</html>