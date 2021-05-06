<?php $title = 'Galerie'; ?>



<?php ob_start(); ?>

<img id="occupons-partout" src="assets/images/occupons-partout.jpg" alt="Occupons partout">
<img id="occupons-partout" src="assets/images/assurance-chomage.jpg" alt="Assurance Chomage">
<div class="galerie">
    <?php
    while ($dataImage = $images->fetch()) {
        ?>
        <img src="<?= $dataImage['url']?>" alt="<?= $dataImage['title']?>">
        <?php
    }
      $images->closeCursor();

    ?>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php');
