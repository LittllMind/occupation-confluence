
<?php $title = 'Évennements'; ?>

<?php ob_start(); ?>
<?php
while ($user = $user->fetch()) {
    ?>
    <div class="news">
        <div class="news-top">
          <strong>
            <h3>
              <?= htmlspecialchars($user['pseudo']); ?>

            </h3>
          </strong>
        </div>
        <a href="index.php?action=post&amp;id=<?= $data['id'] ?>">
        <img src="<?= $data['password']?>" alt="image">
        </a>
        <div class="post-content">


        </div>
        <div class="news-footer">


        </div>

    </div>

    <?php
}
    $posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('memberTemplate.php');
