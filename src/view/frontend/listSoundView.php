
<?php $title = 'Web radio'; ?>

<?php ob_start(); ?>
<?php
while ($data = $sound->fetch()) {
    ?>
    <div class="news">
        <div class="news-top">
          <h3>
            <?= htmlspecialchars($data['title']); ?>

          </h3>
        </div>
        <!-- <a href="index.php?action=post&amp;id=<?= $data['id'] ?>"> -->

        <iframe width="700"
                height="315"
                scrolling="no"
                frameborder="no"
                allow="autoplay"
                src="<?= $data['url']?>">
        </iframe>
        <div class="post-content">

          <p>
              <?=nl2br(htmlspecialchars($data['content']));?>
          </p>

        </div>
        <div class="news-footer">
          <em>le <?= $data['creation_date_fr']; ?></em>

          <em>  </em>

        </div>

    </div>

    <?php
}
    $sound->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php');
