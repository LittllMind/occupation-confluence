
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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="icon" type="image/webp" sizes="16x16" href="assets/images/logo-occupation.webp">

  </head>


  <body>


      <div class="navbar">

        <img src="assets/images/logo-occupation.webp" alt="Occupation">


        <div class="navbar-links">
          <div class="posts-list">
              <button type="button" name="button" class="btn"> <a href="index.php?action=index">HOME</a>  </button>
              <a href="http://www.facebook.com/occupationoperaconfluence/" target="_blank" class="btn-social btn-facebook"><i class="fa fa-facebook"></i></a>
              <button type="button" name="button" class="btn"> <a href="index.php?action=listPosts">BLOG</a>  </button>
              <button type="button" name="button" class="btn"> <a href="index.php?action=listVideo">VIDEOS</a>  </button>
              <a href="http://instagram.com/occupationoperaconfluence?igshid=1apak4gnteq71" tssarget="_blank" class="btn-social btn-instagram"><i class="fa fa-instagram"></i></a>
              <button type="button" name="button" class="btn"> <a href="index.php?action=listImage">GALERIE</a>  </button>

          </div>
        </div>

      </div>
      <div class="lien-radio">

        <iframe width="100%"
                height="300"
                scrolling="no"
                frameborder="no"
                allow="autoplay"
                src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1035839134&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true">
        </iframe>
        <!-- <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
          <a  href="https://soundcloud.com/user-373812886"
              title="occupationoperaconfluence"
              target="_blank"
              style="color: #cccccc; text-decoration: none;">
              occupationoperaconfluence
          </a> ·
          <a  href="https://soundcloud.com/user-373812886/la-graine-collectif-confluence-mael-aurelien-feat-phillipe-marion-chris"
                title="La Graine Collectif Confluence Mael Aurélien Feat Phillipe Marion Chris."
                target="_blank"
                style="color: #cccccc; text-decoration: none;">La Graine Collectif Confluence Mael Aurélien Feat Phillipe Marion Chris.
          </a>
        </div> -->
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 col-xl-12">
            <?= $content ?>

          </div>
        </div>

      </div>


      <footer>
        <div class="footer">
          <h4>Occupation de l'Opéra Confluence</h4>
          <p>Nous occuperons les lieux aussi longtemps que necessaire et pour ce faire, nous avons besoin de l'aide de tous !</p>
          <strong>
            <p>Des assemblées générales sont organisées les <br>
                Mercredi, Vendredi, Dimanche à 14h30.
            </p>
          </strong>
          <h4>Ce que nous défendons, nous le défendons pour tous.tes</h4>
        </div>

      </footer>
  </body>
</hmtl>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?= $title ?></title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="style.css" rel="stylesheet"/>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
  <div class="navbar">
    <img src="assets/images/logo-occupation.webp" alt="Occupation">


<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
    <div class="container-fluid">
        <a href="index.php?action=index" class="navbar-brand mr-3">HOME</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active">Home</a>

                <a href="index.php?action=listPosts" class="nav-item nav-link">Blog</a>
                <a href="index.php?action=listVideo" class="nav-item nav-link">Video</a>
                <a href="index.php?action=listImage" class="nav-item nav-link">Galerie</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="http://www.facebook.com/occupationoperaconfluence/" target="_blank" class="btn-social btn-facebook"><i class="fa fa-facebook"></i></a>
                <a href="http://instagram.com/occupationoperaconfluence?igshid=1apak4gnteq71" tssarget="_blank" class="btn-social btn-instagram"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
</nav>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-10 col-xl-12">
                  <?= $content ?>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
            <h2>CSS</h2>
            <p>CSS is used for describing the presentation of web pages. CSS can save a lot of time and effort. Our CSS tutorials will help you to learn the essentials of latest CSS3, so that you can control the style and layout of your website.</p>
            <p><a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
            <h2>JavaScript</h2>
            <p>JavaScript is the most popular and widely used client-side scripting language. Our JavaScript tutorials will provide in-depth knowledge of the JavaScript including ES6 features, so that you can create interactive websites.</p>
            <p><a href="https://www.tutorialrepublic.com/javascript-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
            <h2>Bootstrap</h2>
            <p>Bootstrap is a powerful front-end framework for faster and easier web development. Our Bootstrap tutorials will help you to learn all the features of latest Bootstrap 4 framework so that you can easily create responsive websites.</p>
            <p><a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
            <h2>PHP</h2>
            <p>PHP is the most popular server-side scripting language for creating dynamic web pages. Our PHP tutorials will help you to learn all the features of latest PHP7 scripting language so that you can easily create dynamic websites.</p>
            <p><a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
            <h2>SQL</h2>
            <p>SQL is a standard language designed for managing data in relational database management system. Our SQL tutorials will help you to learn the fundamentals of the SQL language so that you can efficiently manage your databases.</p>
            <p><a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
            <h2>References</h2>
            <p>Our references section outlines all the standard HTML5 tags and CSS3 properties along with other useful references such as color names and values, character entities, web safe fonts, language codes, HTTP messages, and more.</p>
            <p><a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
            <h2>FAQ</h2>
            <p>Our Frequently Asked Questions (FAQ) section is an extensive collection of FAQs that provides quick and working solution of common questions and queries related to web design and development with live demo.</p>
            <p><a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
        </div>
    </div>
    <hr>
    <footer>
        <div class="row">
            <div class="col-md-6">
                <p>Copyright © 2019 Tutorial Republic</p>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="#" class="text-dark">Terms of Use</a>
                <span class="text-muted mx-2">|</span>
                <a href="#" class="text-dark">Privacy Policy</a>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
