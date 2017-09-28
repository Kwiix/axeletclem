
<?php
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>El title</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php get_header() ?>


    <ul>

      <?php foreach ($prenoms as $value): ?>



      <li><?php echo $value;?></li>
      <?php endforeach; ?>

    </ul>
  </body>
</html>
