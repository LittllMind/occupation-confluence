
<?php $title = 'Blog'; ?>

<?php ob_start(); ?>
<?php
while ($data = $events->fetch()) {
    ?>

    <div class="event-form">
      <div class="event-form-top">
        <form action="index.php?action=addEvent" method="post">
            <div class="form-group">
                <label for="title">Titre de l'evenement</label><br />
                <input class="form-control" type="text" id="title" name="title" />
            </div>
            <div class="form-group">
                <label for="content">Description</label><br />
                <textarea class="form-control" id="content" name="content"></textarea>
            </div>
            <div class="form-group">
                <label for="date">Date prévue</label><br />
                <input class="form-control" type="date" id="date" name="date"></input>
            </div>
            <div>
                <button class="btn btn-success" type="submit"> Valider </button>
            </div>
        </form>
        <div class="event-form-footer">
          <em>Créé le <?= $data['creation_date']; ?></em>
          <em>Modifié le <?= $data['modified_date']; ?></em>
        </div>
      </div>
    </div>

    <div class="event">
        <div class="event-top">
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
        </div>

        <div class="event-footer">
          <em>Créé le <?= $data['creation_date']; ?></em>
          <em>Modifié le <?= $data['modified_date']; ?></em>
        </div>
    </div>

    <?php
}
    $events->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('memberTemplate.php');
