
<?php
session_start();
if (isset($_SESSION['mail'])) {
    $mailErrorMessage = $_SESSION['mail'];
    $_SESSION['mail'] = '';
} else {
    $mailErrorMessage = '';
}

if (isset($_SESSION['pseudo'])) {
    $pseudoErrorMessage = $_SESSION['pseudo'];
    $_SESSION['pseudo'] = '';
} else {
    $pseudoErrorMessage = '';
}

if (isset($_SESSION['password'])) {
    $passwordErrorMessage = $_SESSION['password'];
    $_SESSION['password'];
} else {
    $passwordErrorMessage = '';
}
?>
<?php ob_start(); ?>

<!--
  <div class="container">
    <div class="row">
      <form action="index.php?action=addUser.php" method="post">
        <div class="form-group">
          <label for="pseudo">Pseudo</label>
          <input type="text" class="form-control" id="pseudo" name="pseudo"
          aria-describedby="pseudoHelp"
          placeholder="Enter Pseudo"
          required="true">
          <small id="pseudoHelp" class="form-text text-muted">
            <?php echo '<br>' . ' ' . $pseudoErrorMessage ?>
          </small>
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email"
          aria-describedby="emailHelp"
          placeholder="Enter email"
          required="true">
          <small id="emailHelp" class="form-text text-muted">
            We'll never share your email with anyone else.<?php echo '<br>' .  $mailErrorMessage ?>
          </small>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password"
          aria-describedby="paswordAlert"
          placeholder="Password"
          required="true">
          <small id="passwordAlert" class="form-text text-muted">
            <?php echo '<br>' . ' ' . $passwordErrorMessage ?>
          </small>
        </div>
        <div class="form-group">
          <label for="confirmPassword">Confirm password</label>
          <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
          placeholder="Confirm password"
          required="true">
        </div>
        <button type="submit" class="btn btn-primary">Inscription</button>
      </form>
  </div>
</div> -->

<div class="container">
  <div class="row">
    <form action="index.php?action=addUser" method="post">
        <div class="form-group">
            <label for="pseudo">pseudo</label><br />
            <input class="form-control" type="text" id="pseudo" name="pseudo" />
        </div>
        <div class="form-group">
            <label for="email">E-mail</label><br />
            <textarea class="form-control" id="email" name="email"></textarea>
        </div>
        <div class="form-group">
            <label for="password">Password</label><br />
            <textarea class="form-control" id="password" name="password"></textarea>
        </div>
        <div class="form-group">
            <label for="confirmPassword">Confirm password</label><br />
            <textarea class="form-control" id="confirmPassword" name="confirmPassword"></textarea>
        </div>
        <div>
            <button class="btn btn-success" type="submit"> Valider </button>
        </div>
    </form>
  </div>
</div>
      <?php $content = ob_get_clean(); ?>

      <?php require('memberTemplate.php');
