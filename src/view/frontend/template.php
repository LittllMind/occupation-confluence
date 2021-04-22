
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
              <button type="button" name="button" class="btn"> <a href="index.php?action=galerie">GALERIE</a>  </button>




             <!-- <a href="index.php?action=postForm">Add Blog Post</a> -->

          </div>
        </div>

      </div>
      <div class="lien-radio">
        <button type="button" name="button"><a href="https://occupationconfluence.radiostream321.com" tssarget="_blank">Radio Confluence</a>  </button>
        <audio preload="auto" controls style="width:100%; height:50px;" src="https://freeuk23.listen2myradio.com/live.mp3?typeportmount=s1_20400_stream_968232956"> </audio>
      </div>

      <?= $content ?>
      <footer>
        <div class="footer">
          <h4>Occupation de l'Opéra Confluence</h4>
          <p>Nous occuperons les lieux aussi longtemps que necessaire et pour ce faire, nous avons besoin de l'aide de tous !</p>
          <strong>
            <p>Des assemblées générales seront organisées les <br>
                Mercredi, Vendredi, Dimanche à 14h30.
            </p>
          </strong>
          <h4>Ce que nous défendons, nous le défendons pour tous.tes</h4>
        </div>

      </footer>
  </body>
</hmtl>
