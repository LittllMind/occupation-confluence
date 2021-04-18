
<!DOCTYPE html>
<html lang="fr">

  <head>
      <meta charset="UTF-8">
      <title><?= $title ?></title>
      <link href="style.css" rel="stylesheet"/>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap-reboot.min.css"
      integrity="sha512-YmRhY1UctqTkuyEizDjgJcnn0Knu5tdpv09KUI003L5tjfn2YGxhujqXEFE7fqFgRlqU/jeTI+K7fFurBnRAhg=="
      crossorigin="anonymous" />
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
  </head>


  <body>


      <div class="navbar">
        <img src="assets/images/logo-occupation.webp" alt="Occupation">
        <div class="container">
          <div class="row">
            <br/><br/>
            <div class="col-md-12">


    </div>


</div>
</div>

        <div class="navbar-links">
          <div class="posts-list">
             <button type="button" name="button" class="btn"> <a href="index.php?action=index">HOME</a>  </button>
             <button type="button" name="button" class="btn"> <a href="index.php?action=listPosts">BLOG</a>  </button>
             <button type="button" name="button" class="btn"> <a href="index.php?action=listPosts">GALERIE</a>  </button>

             <!-- <a href="index.php?action=postForm">Add Blog Post</a> -->

          </div>
        </div>

      </div>
      <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-facebook"><i class="fa fa-facebook"></i></a>
      <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-instagram"><i class="fa fa-instagram"></i></a>
      <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-twitter"><i class="fa fa-twitter"></i></a>
      <?= $content ?>
      <footer>

      </footer>
  </body>
</hmtl>
