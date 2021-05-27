<?php
// setcookie('pseudo', '');
// setcookie('password', '');
// if (isset($_COOKIE['pseudo'])) {
//     if (isset($_COOKIE['password'])) {
//         header('location: connexion-bdd.php');
//     }
// };
?>
<?php $title = 'Occupation Confluence'; ?>

<?php ob_start(); ?>


      <div class="container">
        <div class="row">
          <form action="index.php?action=memberConnexion" method="post">
            <div class="form-group">
              <label for="mail">Mail</label>
              <input  type="text"
                      class="form-control"
                      id="mail"
                      name="mail"
                      aria-describedby="mailHelp"
                      placeholder="Enter Mail"
                      required="true">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input  type="password"
                      class="form-control"
                      id="password"
                      name="password"
                      aria-describedby="paswordAlert"
                      placeholder="Password"
                      required="true">
            </div>
            <div class="form-check">
              <input
              class="form-check-input"
              type="checkbox"
              value="stayConnect"
              name="stayConnectOn"
              id="stayConnect"
              checked
              />
              <label class="form-check-label" for="stayConnect">
                Stay connect
              </label>
            </div>
              <div>
                  <button class="btn btn-success" type="submit"> Connexion </button>
              </div>
          </form>
        </div>
      </div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
