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

$requete = mysqli_query($bdd, "SELECT MAX(id) FROM etudiants") or die(mysqli_error($bdd));
$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);

var_dump($etudiants);
?>


<table>
    <thead>
        <tr>
            <th>nb_etudiants</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($etudiants as $etudiant){
                echo '<tr><td>'.$etudiant['MAX(id)'].'</td></tr>';
            }
         ?>
    </tbody>
</table>

    

</body>
</html>