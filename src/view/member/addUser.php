
<?php ob_start(); ?>

<div class="container">
  <div class="row">
    <form action="index.php?action=addUser" method="post">
        <div class="form-group">
            <label for="pseudo">pseudo</label><br />
            <input class="form-control" type="text" id="pseudo" name="pseudo" />
        </div>
        <div class="form-group">
            <label for="email">E-mail</label><br />
            <textarea class="form-control" id="email" name="email"></textarea>
        </div>
        <div class="form-group">
            <label for="password">Password</label><br />
            <textarea class="form-control" id="password" name="password"></textarea>
        </div>
        <div class="form-group">
            <label for="confirmPassword">Confirm password</label><br />
            <textarea class="form-control" id="confirmPassword" name="confirmPassword"></textarea>
        </div>
        <div>
            <button class="btn btn-success" type="submit"> Valider </button>
        </div>
    </form>
  </div>
</div>
      <?php $content = ob_get_clean(); ?>

      <?php require('memberTemplate.php');
