
<?php $style="member/member.css" ?>
<!DOCTYPE html>
<html lang="fr">

  <head>
      <meta charset="UTF-8">
      <title><?= $title ?></title>
      <link  rel="stylesheet" type="text/css" href="member.css"/>
      <!-- <link  rel="stylesheet" type="text/css" href="<?php $style ?>"/> -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap-grid.min.css"
      integrity="sha512-QTQigm89ZvHzwoJ/NgJPghQPegLIwnXuOXWEdAjjOvpE9uaBGeI05+auj0RjYVr86gtMaBJRKi8hWZVsrVe/Ug=="
      crossorigin="anonymous" />
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css"
      integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g=="
      crossorigin="anonymous" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="icon" type="image/webp" sizes="16x16" href="assets/images/logo-occupation.webp">

  </head>


  <body>

      <div class="navbar">
        <picture>
          <source srcset="assets/images/logo-occupation.webp" type="image/webp" style:"width: 50%">
          <source srcset="assets/images/logo-occupation.jpg" type="image/jpg"  style:"padding: auto">
          <img src="assets/images/logo-occupation.jpg">
        </picture>

      </div>

      <div class="navbar-links">
        <div class="posts-list">
            <button type="button" name="button" class="btn"> <a href="index.php?action=index">ACCEUIL</a>  </button>
            <button type="button" name="button" class="btn"> <a href="index.php?action=listEvents">ACTIONS</a>  </button>
            <button type="button" name="button" class="btn"> <a href="index.php?action=chat">CHAT</a>  </button>
            <button type="button" name="button" class="btn"> <a href="index.php?action=listUser">USERS</a>  </button>
            <?php
            if (isset($_COOKIE['user_status']) && $_COOKIE['user_status'] == 'admin') {
                echo'<button type="button" name="button" class="btn"> <a href="index.php?action=userForm">ADD USER</a>  </button>';
            } else {
            }

            ?>
      </div>


      </div>
          <div class="navbar-links">
            <div class="post-list">
              <button type="button" name="button" class="btn"> <a href=""><?php $_COOKIE['pseudo'] ?></a>  </button>
              <button type="button" name="button" class="btn"> <a href=""><?php $_COOKIE['user_status'] ?></a>  </button>
              <button type="button" name="button" class="btn"> <a href="index.php?action=deconnexion">DECONNEXION</a>  </button>
            </div>
          </div>

          <?= $content ?>

      <footer>
        <div class="footer">
          <img id="occupation-opera-confluence-QR" src="assets/images/occupation-confluence-QR.png" alt="Occupons partout">

          <h4>Occupation de l'Opéra Confluence</h4>
          <p>Nous occuperons les lieux aussi longtemps que necessaire et pour ce faire, nous avons besoin de l'aide de tous !</p>
          <strong>
            <p>Des assemblées générales sont organisées les <br>
                Mercredis, Vendredis, Dimanches à 14h30.
            </p>
          </strong>
          <h4>Ce que nous défendons, nous le défendons pour tous.tes</h4>
        </div>

      </footer>
  </body>
</hmtl>
