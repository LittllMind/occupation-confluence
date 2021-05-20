
<?php $title = 'Évennements'; ?>

<?php ob_start(); ?>


<?php
while ($data = $users->fetch()) {
    ?>
    <div class="news">
        <div class="news-top">

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
    $posts->closeCursor();
?>

<?php $content = ob_get_clean(); ?>

<?php require('../frontend/template.php');
