<?php $title = 'Galerie'; ?>

<?php ob_start(); ?>
<div class="galerie">
    <?php
    while ($dataImage = $images->fetch()) {
        ?>
        <img src="<?= $dataImage['url']?>" alt="<?= $dataImage['title']?>">
        <?php
    }
      $images->closeCursor();

    while ($data = $posts->fetch()) {
        ?>
      <img src="<?= $data['image_url']?>" alt="image">
        <?php
    }
      $posts->closeCursor();


    ?>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php');
