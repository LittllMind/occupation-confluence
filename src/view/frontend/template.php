
<!DOCTYPE html>
<html lang="fr">

  <head>
      <meta charset="UTF-8">
      <title><?= title ?></title>
      <link href="assets/css/style.css" rel="stylesheet"/>
  </head>


  <body>
    <header>
      <div class="navbar">
        <img src="assets/images/logo-occupation.webp" alt="Occupation">
        <div class="navbar-links">
          <div class="posts-list">
            <em> <a href="index.php?action=listPosts">BLOG</a>
          </div>
        </div>

      </div>
    </header>
      <?= $content ?>
  </body>
</hmtl>
