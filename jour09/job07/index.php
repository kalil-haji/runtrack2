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

$requete = mysqli_query($bdd, "SELECT SUM(superficie) FROM etage") or die(mysqli_error($bdd));
$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);

var_dump($etudiants);
?>


<table>
    <thead>
        <tr>
            <th>superficie_totale</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($etudiants as $etudiant){
                echo '<tr><td>'.$etudiant['SUM(superficie)'].'</td></tr>';
            }
         ?>
    </tbody>
</table>

    

</body>
</html>