
<?php $title = 'Blog'; ?>

<?php ob_start(); ?>
<?php
while ($data = $events->fetch()) {
    ?>
    <div class="news">
        <div class="news-top">
          <strong>
            <h3>

            </h3>
          </strong>
        </div>
        <a href="index.php?action=post&amp;id=<?= $data['id'] ?>">modifier l'evennement
        </a>
        <div class="post-content">
          <?= htmlspecialchars($data['id']); ?>
          <br>
          <?= htmlspecialchars($data['title']); ?>
          <br>
          <?= htmlspecialchars($data['content']); ?>
          <br>
          <?= htmlspecialchars($data['creation_date']); ?>
          <br>
          <?= htmlspecialchars($data['modified_date']); ?>
          <br>


        </div>
        <div class="news-footer">
          <em>Créé le <?= $data['creation_date']; ?></em>
          <br>
          <em>Modifié le <?= $data['modified_date']; ?></em>

          <em>  </em>

        </div>

    </div>

    <?php
}
    $events->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('memberTemplate.php');
