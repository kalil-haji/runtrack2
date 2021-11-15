<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php



echo bubblesort(array('bttet', 'abtet'), true);
function bubblesort($tab, $croissant){
    $i = 0;
    $tab2 = array('');
    $str = '';
    $r = 0;
    while (isset($tab[$i])){
        $str = $tab[$i];
        if ($str[0] == 'a'){
            $tab2[$r] = $tab[$i]; 
            $r++;
        }
        else if ($str[0] == 'b'){
            $tab2[$r] = $tab[$i]; 
            $r++;
        }
        else if ($str[0] == 'c'){
            $tab2[$r] = $tab[$i]; 
            $r++;
        }
        $i++;
    }
    return (var_dump($tab2));
}
?>

</body>
</html>