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

$requete = mysqli_query($bdd, "SELECT * FROM etudiants WHERE prenom LIKE 'T%'") or die(mysqli_error($bdd));
$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);

var_dump($etudiants);
?>


<table>
    <thead>
        <tr>
            <th>id</th>
            <th>prenom</th>
            <th>nom</th>
            <th>naissance</th>
            <th>sexe</th>
            <th>email</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($etudiants as $etudiant){
                echo '<tr><td>'.$etudiant['id'].'</td>';
                echo '<td>'.$etudiant['prenom'].'</td>';
                echo '<td>'.$etudiant['nom'].'</td>';
                echo '<td>'.$etudiant['naissance'].'</td>';
                echo '<td>'.$etudiant['sexe'].'</td>';
                echo '<td>'.$etudiant['email'].'</td></tr>';
            }
         ?>
    </tbody>
</table>

    

</body>
</html>