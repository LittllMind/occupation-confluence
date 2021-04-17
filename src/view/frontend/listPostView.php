<?php $title = 'Occupation confluence'; ?>

<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="fr">


<?php
while ($data = $posts->fetch()) {
    ?>
    <div class="news">
        <div class="news-top">
          <h3>
          <?= htmlspecialchars($data['title']); ?>
          </h3>
        </div>


        <p>
            <?=nl2br(htmlspecialchars($data['content']));?>

            <div class="news-footer">
              <em>le <?= $data['creation_date_fr']; ?></em>

              <em> <a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a> </em>

            </div>
        </p>
    </div>

    <?php
}
    $posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php');
