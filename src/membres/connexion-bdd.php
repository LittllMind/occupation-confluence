<h3>connexion-bdd.php</h3>
<?php


//--------------D E V E L O P P E M E N T----------

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

//-----------   P R O D U C T I O N ---------------

// try {
//   // On se connecte a mysql
//     $bdd = new PDO(
//         'mysql:host=occupadlittllmin.mysql.db;dbname=occupadlittllmin;charset=utf8',
//         'occupadlittllmin',
//         'jadore18O',
//         array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
//     );
// } catch (Exception $e) {
//   // En cas d'erreurs, on affiche un message et on arrete tout
//     die('Erreur : ' . $e->getMessage());
// }



if (isset($_COOKIE['pseudo'])) {
    if (isset($_COOKIE['password'])) {
        $pseudo = $_COOKIE['pseudo'];
        $password = $_COOKIE['password'];

        $req = $bdd->prepare('SELECT id, password FROM membre WHERE pseudo = :pseudo');
        $req->execute(array('pseudo' => $pseudo));
        $user = $req->fetch();
        $req->closeCursor();

        if ($user['password'] == $password) {
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['pseudo'] = $pseudo;
            header('location: index.php');
        }
    }
} else {
    $pseudo = htmlspecialchars($_GET['pseudo']);
    $password = htmlspecialchars($_GET['password']);


    $stayConnect = isset($_GET['stayConnect']);

    $req = $bdd->prepare('SELECT id, password FROM membre WHERE pseudo = :pseudo');
    $req->execute(array('pseudo' => $pseudo));
    $user = $req->fetch();
    $req->closeCursor();

    $isPasswordCorrect = password_verify($password, $user['password']);
    $correctPassword = isset($isPasswordCorrect);

    if (!$user) {
        echo 'Mauvais identifiant ou mot de passe';
    } else {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['pseudo'] = $pseudo;
            echo 'Vous etes connecté <br>';
            if ($stayConnect === true) {
                setcookie('pseudo', $pseudo, time() + 365*24*3600, null, null, false, true);
                setcookie('password', $user['password'], time() + 365*24*3600, null, null, false, true);
                echo $_COOKIE['pseudo'] . '<br>';
                echo $_COOKIE['password'] . '<br>';
            }
            header('location: index.php');
        } else {
            echo 'Mauvais identifiant ou mot de passe';
        }
    }
}
