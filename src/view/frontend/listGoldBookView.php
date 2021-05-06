
<?php $title = 'Blog'; ?>

<?php ob_start(); ?>
<?php
while ($data = $posts->fetch()) {
    ?>
    <div class="gold-book">
        <div class="gold-book-top">
          <!-- <strong>
            <h3>


            </h3>
          </strong> -->
        </div>
        <a href="index.php?action=post&amp;id=<?= $data['id'] ?>">
        </a>
        <div class="gold-book-content">

          <p>
              <?=$data['content'];?>
          </p>

        </div>
        <div class="gold-book-footer">
          <em><?= htmlspecialchars($data['title']); ?></em>
        </div>
    </div>

    <?php
}
    $posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php');
