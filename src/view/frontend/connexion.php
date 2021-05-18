<?php
// setcookie('pseudo', '');
// setcookie('password', '');
// if (isset($_COOKIE['pseudo'])) {
//     if (isset($_COOKIE['password'])) {
//         header('location: connexion-bdd.php');
//     }
// };
?>
<?php $title = 'Occupation Confluence'; ?>

<?php ob_start(); ?>

  <div class="container">
    <div class="row">
      <form action="index.php?action=memberConnexion" methode="post">
        <div class="form-group">
          <label for="pseudo">Pseudo</label>
          <input type="text" class="form-control" id="pseudo" name="pseudo"
          aria-describedby="pseudoHelp"
          placeholder="Enter Pseudo"
          required="true">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password"
          aria-describedby="paswordAlert"
          placeholder="Password"
          required="true">
        </div>
        <!-- Checked checkbox -->
        <!-- <div class="form-check">
          <input
          class="form-check-input"
          type="checkbox"
          value=""
          name="stayConnect"
          id="flexCheckChecked"
          checked
          /> -->
          <!-- <label class="form-check-label" for="flexCheckChecked">
            Stay connect
          </label> -->
        </div>
      <button type="submit" class="btn btn-success">Connexion</button>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
