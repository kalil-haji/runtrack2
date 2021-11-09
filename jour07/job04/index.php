<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php




echo calcule(5, '*', 1);
function calcule($a, $operation, $b){
    if($operation == '-'){
        return ($a - $b);
    }
    else if($operation == '+'){
        return ($a + $b);
    }
    else if($operation == '*'){
        return ($a * $b);
    }
    else if($operation == '/'){
        return ($a / $b);
    }
    else if($operation == '%'){
        return ($a % $b);
    }
    return (0);
}
?>

</body>
</html>