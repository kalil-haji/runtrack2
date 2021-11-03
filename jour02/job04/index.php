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

while($var <= 100){

if($var % 3 == 0 && $var % 5 == 0){
    echo "FizzBuzz</br>";
}

else if($var % 3 == 0){
    echo "Fizz</br>";
}

else if($var % 5 == 0){
    echo "Buzz</br>";
}

else{
    echo $var."</br>";
    
}
$var += 1;
}
?>

</body>
</html>