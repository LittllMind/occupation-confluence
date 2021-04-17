
<?php ob_start(); ?>

<form action="index.php?action=addPostBlog" method="post">
    <div>
        <label for="title">titre</label><br />
        <input type="text" id="title" name="title" />
    </div>
    <div>
        <label for="content">Contenu</label><br />
        <textarea id="content" name="content"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
