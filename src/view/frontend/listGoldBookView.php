
<?php $title = 'Blog'; ?>

<?php ob_start(); ?>
<?php

while ($data = $posts->fetch()) {
    ?>
    <div class="news">
        <div class="news-top">
          <strong>
            <h3>
              <?= htmlspecialchars($data['title']); ?>

            </h3>
          </strong>
        </div>
        <a href="index.php?action=post&amp;id=<?= $data['id'] ?>">
        </a>
        <div class="news-content">

          <p>
              <?=$data['content'];?>
          </p>

        </div>
        <div class="news-footer">
          <!-- <em><?= htmlspecialchars($data['title']); ?></em> -->
        </div>
    </div>

    <?php
}
    $posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php');
