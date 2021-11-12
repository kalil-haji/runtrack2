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

$requete = mysqli_query($bdd, "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = Femme") or die(mysqli_error($bdd));
$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);

var_dump($etudiants);
?>


<table>
    <thead>
        <tr>
            <th>prenom</th>
            <th>nom</th>
            <th>naissance</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($etudiants as $etudiant){
                echo '<tr><td>'.$etudiant['prenom'].'</td>';
                echo '<td>'.$etudiant['nom'].'</td>';
                echo '<td>'.$etudiant['naissance'].'</td></tr>';
            }
         ?>
    </tbody>
</table>

    

</body>
</html>