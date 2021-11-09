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
$k = array('');
foreach($_POST as $value){
    $k[$i] = $value;
    $i++;
}
session_start();
if($k[0] == 'reset'){
    unset($_SESSION["nbvisites"]);
}



if(isset($_SESSION["nbvisites"])){
    $_SESSION["nbvisites"]++;
}
else{
    
    $_SESSION["nbvisites"] = 0;
}

echo $_SESSION["nbvisites"];

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="submit" name="reset" value="reset">
    
    </form>

</body>
</html>