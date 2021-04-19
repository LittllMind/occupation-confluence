<?php $title = 'Occupation confluence'; ?>

<?php ob_start(); ?>
<?php
while ($data = $posts->fetch()) {
    ?>
    <div class="news">
        <div class="news-top">
          <h3>
          <?= htmlspecialchars($data['title']); ?>
          </h3>
        </div>
        <img src="<?= $data['image_url']?>" alt="image">
        <div class="post-content">

          <p>
              <?=nl2br(htmlspecialchars($data['content']));?>
          </p>

        </div>
        <div class="news-footer">
          <em>le <?= $data['creation_date_fr']; ?></em>

          <!-- <em> <a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a> </em> -->

        </div>

    </div>

    <?php
}
    $posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php');
