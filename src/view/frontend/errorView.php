<?php ob_start(); ?>
<p><a href="index.php?action=index">HOME</a></p>

<div class="news">
    <h3>
        <?= $errorMessage ?>
    </h3>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
