<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php
$ville = 'Marseille';
$habitants = 14974;
$zero = 0.50;
$nombre = 250;

$shop = array( array("Type"=>"chaîne de caractères", "Nom"=>"ville", "Valeur"=>"Marseille"),
               array("Type"=>"entier", "Nom"=>"habitants" , "Valeur"=>14974),
               array("Type"=>"nombre à virgule flottante", "Nom"=>"zero" , "Valeur"=>0.50)
             ); 
?>
<?php if (count($shop) > 0): ?>
<table>
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($shop))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($shop as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>


</body>
</html>