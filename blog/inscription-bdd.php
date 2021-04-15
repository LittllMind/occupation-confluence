<p>Début</p>
<?php
try {
  // On se connecte a mysql
    $bdd = new PDO(
        'mysql:host=localhost;dbname=blog;charset=utf8',
        'phpLittllMind',
        'jadore18@P',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
} catch (Exception $e) {
  // En cas d'erreurs, on affiche un message et on arrete tout
    die('Erreur : ' . $e->getMessage());
}

  $pseudo;
  $pseudo = htmlspecialchars($_GET['pseudo']);
  $mail = htmlspecialchars($_GET['email']);
  $password = htmlspecialchars($_GET['password']);
  $confirmPassword = htmlspecialchars($_GET['confirmPassword']);

  echo $pseudo . '<br>';
  echo $mail . '<br>';
  echo $password . '<br>';
  echo $confirmPassword . '<br>';
  // Verification du password
if ($password == $confirmPassword) {
  // Hachage du password
    $password_hache = password_hash($password, PASSWORD_DEFAULT);
  // On ajoute une entrée dans la table membre
    $req = $bdd->prepare('INSERT INTO membre(pseudo, mail, password)
              VALUES(:pseudo, :mail, :password)');

    $req->execute(array(
      'pseudo' => $pseudo,
      'mail' => $mail,
      'password' => $password_hache
    ));
    header('location: index.php');
} else {
    header('location: inscription.php');
}
