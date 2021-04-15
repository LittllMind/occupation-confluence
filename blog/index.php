

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mon premier blog</title>
    <link rel="stylesheet" href="style.css"/>
</head>


<body>
  <?php
  try {
    // On se connect a mysql
        $bdd = new PDO(
            'mysql:host=localhost;dbname=blog;charset=utf8',
            'phpLittllMind',
            'jadore18@P',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
  } catch (Exception $e) {
    // En cas d'erreurs, on affiche un message et on stop le process
        die('Erreur : ' . $e->getMessage());
  }

    $response = $bdd->query('SELECT * FROM billets ORDER BY ID ASC');

  while ($data = $response->fetch()) {
        ?>
    <div class="news">
      <h3><?php echo htmlspecialchars($data['titre']) . '-' . htmlspecialchars($data['date_creation'])?></h3>
      <p><?php echo nl2br(htmlspecialchars($data['contenu']))?></p>


      <a href="commentaires.php?billet=<?php echo $data['id'];?>">Commentaires</a>
    </div>

        <?php
  }
    ?>
</body>
