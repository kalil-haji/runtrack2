<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php
$bdd = mysqli_connect('localhost', 'root', '', 'jour08');
mysqli_set_charset($bdd, 'utf8');

$requete = mysqli_query($bdd, "SELECT nom, capacite FROM salles");
$salles = mysqli_fetch_all($requete,MYSQLI_ASSOC);

var_dump($salles);
?>


<table>
    <thead>
        <tr>
            <th>nom</th>
            <th>capacite</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($salles as $salle){
                echo '<tr><td>'.$salle['nom'].'</td>';
                echo '<td>'.$salle['capacite'].'</td></tr>';
            }
         ?>
    </tbody>
</table>

    

</body>
</html>