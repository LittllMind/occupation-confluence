
<?php $title = 'Videos'; ?>

<?php ob_start(); ?>


<a  id="youtubeNational"
    href="https://www.youtube.com/channel/UCL_ICNPmZGhk4xnqj0bOFew"
    target="_blank" class="btn-social btn-youtube">
    <i class="fa fa-youtube"> Coordination Nationale</i>
</a>

<?php
while ($data = $videos->fetch()) {
    ?>
    <div class="news">
        <div class="news-top">
          <h3>
            <?= htmlspecialchars($data['title']); ?>

          </h3>
        </div>
        <a href="index.php?action=post&amp;id=<?= $data['id'] ?>">

        <iframe id="lbry-iframe"
                width="560"
                height="315"
                src="<?= $data['url']?>"
                allowfullscreen>
        </iframe>
        </a>
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
    $videos->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php');
