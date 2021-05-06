<?php $title = 'Ajouter un post'; ?>

<?php ob_start(); ?>

<div class="container">
  <div class="row">
    <form action="index.php?action=addGoldBook" method="post">
        <div class="form-group">
            <label for="title">Nom</label><br />
            <input class="form-control" type="text" id="title" name="title" />
        </div>
        <div class="form-group">
            <label for="content">Contenu</label><br />
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>
        <div class="form-group">
            <label for="image_url">image Url</label><br />
            <textarea class="form-control" id="image_url" name="image_url"></textarea>
        </div>
        <div class="form-group">
            <label for="creation_date">Date</label><br />
            <input type="date" class="form-control" id="creation_date" name="creation_date"></input>
        </div>
        <div>
            <button class="btn btn-success" type="submit"> Valider </button>
        </div>
    </form>
  </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
