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
$tab = array('');
foreach($_POST as $value){
    $tab[$i] = $value;
    $i++;
}


    if($tab[0] == 'style1'){
        ?>
        <link rel="stylesheet" href="style1.css">
        <?php
}
    else if($tab[0] == 'style2'){
        ?>
        <link rel="stylesheet" href="style2.css">
        <?php
    }
    else if($tab[0] == 'style3'){
        ?>
        <link rel="stylesheet" href="style3.css">
        <?php
    }
    
    
?>

<form action="./index.php" method="post">
        <div>
        <label for="style">Style :</label>

<select name="style" id="style">
    <option value=""></option>
    <option value="style1">Style 1</option>
    <option value="style2">Style 2</option>
    <option value="style3">Style 3</option>
</select>
        </div>
        <div class="button">
            <button type="submit">Submit</button>
        </div>
    
    </form>

</body>
</html>