<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>

<div class="news">
  <div class="news-top">
    <h3>
      <p><a href="index.php?action=listPosts">Retour au Posts</a></p>

        <?= htmlspecialchars($post['title']) ?>
        <em>le <?= $post['creation_date_fr'] ?></em>
    </h3>
  </div>
    <a href="<?= $post['image_url']?>">
    <img src="<?= $post['image_url']?>" alt="image">
    </a>
    <p>
        <?= nl2br(htmlspecialchars($post['content'])) ?>
    </p>
</div>

<!-- <h2>Commentaires</h2>

<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
    <div>
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <div>
        <label for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

<?php
while ($comment = $comments->fetch()) {
    ?>
    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
    <?php
}
?> -->
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
