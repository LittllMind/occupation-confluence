
<!DOCTYPE html>
<html lang="fr">

  <head>
      <meta charset="UTF-8">
      <title><?= $title ?></title>
      <link href="assets/css/style.css" rel="stylesheet"/>
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
        <div class="navbar-links">
          <div class="posts-list">
             <a href="index.php?action=listPosts">BLOG</a>
             <a href="index.php?action=postForm">Add Blog Post</a>
          </div>
        </div>

      </div>
      <?= $content ?>
  </body>
</hmtl>
