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

$requete = mysqli_query($bdd, "SELECT * FROM salles ORDER BY capacite") or die(mysqli_error($bdd));
$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);

var_dump($etudiants);
?>


<table>
    <thead>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>id_etage</th>
            <th>capacite</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($etudiants as $etudiant){
                echo '<tr><td>'.$etudiant['id'].'</td>';
                echo '<td>'.$etudiant['nom'].'</td>';
                echo '<td>'.$etudiant['id_etage'].'</td>';
                echo '<td>'.$etudiant['capacite'].'</td></tr>';
            }
         ?>
    </tbody>
</table>

    

</body>
</html>