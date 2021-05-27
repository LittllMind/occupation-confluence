
<?php $title = 'Évennements'; ?>

<?php ob_start(); ?>


<div class="container">
  <div class="row">
    Index !
    <br>
    Vous etes Connectés !
    <br>
    <?php
     echo 'pseudo : ' . $_COOKIE['pseudo'] . '<br>';
     echo 'status : ' . $_COOKIE['user_status'] . '<br>';
    ?>
    <a href="index.php?action=deconnexion">Deconnexion</a>
  </div>
</div>
<?php
while ($data = $users->fetch()) {
    ?>

    <div class="news">
        <div>

          <strong>
            <h3>
              <?= htmlspecialchars($data['id']); ?>
              <?= htmlspecialchars($data['pseudo']); ?>

            </h3>
          </strong>
        </div>
        </a>
        <div class="post-content">

          <p>
              <?=$data['password'];?>
          </p>

        </div>
        <div class="news-footer">
          <em>le <?= $data['registration_date']; ?></em>


        </div>

    </div>

    <?php
}
    $users->closeCursor();
?>

<?php $content = ob_get_clean(); ?>

<?php require('memberTemplate.php');
