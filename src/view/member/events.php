
<?php $title = 'Blog'; ?>

<?php ob_start(); ?>


    <div class="events">
    <?php
while ($data = $events->fetch()) {
    ?>
    <form action="index.php?action=addEvent" method="post">
                <div class="form-group">
                    <label for="created">Date</label><br />
                    <input type="date" class="form-control" id="creation_date" name="creation_date"></input>
                </div>
                <div class="form-group">
                    <label for="title">titre</label><br />
                    <input class="form-control" type="text" id="title" name="title" />
                </div>
                <div class="form-group">
                    <label for="content">Contenu</label><br />
                    <textarea class="form-control" type="text" id="content" name="content"></textarea>
                </div>
                <div>
                    <button class="btn btn-success" type="submit"> Valider </button>
                </div>
    </form>
    <?php 
        for ($i = 1; $i <= 7; $i++) {
            ?>
            
            <?php
            
}   ?>
    </div>
    
    <?php
}
    $events->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('memberTemplate.php');
