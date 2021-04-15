

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Commentaires</title>
    <link rel="stylesheet" href="style.css"/>
</head>


<body>
  <?php
  try {
    // On se connect a mysql
        $bdd = new PDO(
            'mysql:host=sql110.epizy.com;dbname=epiz_28390610_blog;charset=utf8',
            'epiz_28390610',
            '3yfurPH8IiwjKF',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
  } catch (Exception $e) {
    // En cas d'erreurs, on affiche un message et on stop le process
        die('Erreur : ' . $e->getMessage());
  }
    $billet = $_GET['billet'];
    $req = $bdd->prepare('SELECT titre, contenu, date_creation FROM billetS WHERE id = ?');
    $req -> execute(array(1));
    $data = $req->fetch();
    ?>
    <div class="news">
      <h3><?php echo htmlspecialchars($data['titre']) . '-' . htmlspecialchars($data['date_creation'])?></h3>
      <p><?php echo nl2br(htmlspecialchars($data['contenu']))?></p>
    </div>

    <?php
    $req->closeCursor();
        $req = $bdd->prepare('SELECT auteur, commentaire FROM commentaires WHERE id_billet = ?');
        $req -> execute(array($_GET['billet']));
        $data = $req->fetch();

    while ($data = $req->fetch()) {
        ?>
        <div class="commentaire">
          <h4><?php echo htmlspecialchars($data['auteur']); ?></h4>
          <p><?php echo nl2br(htmlspecialchars($data['commentaire'])); ?></p>
        </div>
        <?php
    }
    ?>
    <a href="index.php">Retour au billets</a>
</body>
