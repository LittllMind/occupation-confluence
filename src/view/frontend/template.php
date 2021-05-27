<!DOCTYPE html>
<html lang="fr">

  <head>
      <meta charset="UTF-8">
      <title><?= $title ?></title>
      <?php $style="assets/css/style.css"; ?>
      <link  rel="stylesheet" type="text/css" href="view/frontend/template.css"/>
      <!-- <link  rel="stylesheet" type="text/css" href="<?php $style ?>"/> -->
      <!-- <link  rel="stylesheet" type="text/css" href="assets/css/style.css"/> -->
      <!-- <link href="assets/css/styles.php" rel="stylesheet" type="text/css" media="all" /> -->
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
        <div class="navbar-button">
            <button type="button" name="button" class="btn"> <a href="index.php?action=index">MANIFEST</a>  </button>
            <button type="button" name="button" class="btn"> <a href="index.php?action=listPosts">MEDIAS</a>  </button>
            <button type="button" name="button" class="btn"> <a href="index.php?action=listSound">WEBRADIO</a>  </button>
            <button type="button" name="button" class="btn"> <a href="index.php?action=listVideo">VIDEOS</a>  </button>
            <button type="button" name="button" class="btn"> <a href="index.php?action=listImage">GALERIE</a>  </button>
            <a href="http://instagram.com/occupationoperaconfluence?igshid=1apak4gnteq71" tssarget="_blank" class="btn-social btn-instagram"><i class="fa fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UC9KJ1P51PpecIQuTXeH4pRg" target="_blank" class="btn-social btn-youtube"><i class="fa fa-youtube"></i></a>
            <a href="http://www.facebook.com/occupationoperaconfluence/" target="_blank" class="btn-social btn-facebook"><i class="fa fa-facebook"></i></a>
            <a href="index.php?action=listGoldBook"><img style="height: 70%; padding: 1%" id="goldenBook" src="assets/images/book.svg" alt="Livre d'or"></a>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <?= $content ?>
        </div>
      </div>

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
