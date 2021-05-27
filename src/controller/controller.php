<?php
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/ImageManager.php');
require_once('model/VideoManager.php');
require_once('model/SoundManager.php');
require_once('model/GoldBookManager.php');
require_once('model/MemberManager.php');
require_once('model/EventsManager.php');

use \OpenClassroom\Blog\Model\PostManager;
use \OpenClassroom\Blog\Model\CommentManager;
use \OpenClassroom\Blog\Model\ImageManager;
use \OpenClassroom\Blog\Model\VideoManager;
use \OpenClassroom\Blog\Model\SoundManager;
use \OpenClassroom\Blog\Model\GoldBookManager;
use \OpenClassroom\Blog\Model\MemberManager;
use \OpenClassroom\Blog\Model\EventsManager;

function index()
{
    $title = 'Occupation Opéra Confluence';
    require('view/frontend/acceuil.php');
}

function login()
{
    // if (isset($_COOKIE['pseudo'])) {
    //     $stayConnect = 'on';
    //     memberConnexion($_COOKIE['mail'], $_COOKIE['password'], $stayConnect);
    // } else {
    //     $title = 'Connexion';
    //     require('view/frontend/connexion.php');
    // }
        require('view/frontend/connexion.php');
}

function memberConnexion($mail, $password, $stayConnect)
{
    $memberManager = new MemberManager();
    $user = $memberManager->getMember($mail);

    $isPasswordCorrect = password_verify($password, $user['password']);
    $correctPassword = isset($isPasswordCorrect);

    if ($isPasswordCorrect) {
        echo $mail;
        echo '<br>';
        echo $password;
        echo '<br>';
        echo $stayConnect;
        echo '<br>';
        echo $user['id'];
        echo '<br>';
        echo $user['pseudo'];
        echo '<br>';
        echo $user['password'];
        echo '<br>';
        echo $user['mail'];
        echo '<br>';
        echo $user['registration_date'];
        echo '<br>';
        echo '$isPasswordCorrect : ' . $isPasswordCorrect;
        echo '<br>';
        echo 'correctPassword' . $correctPassword;
        echo '<br>';
        echo $user['user_status'];

        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['pseudo'] = $user['pseudo'];
        $_SESSION['user_status'] = $user['user_status'];

        setcookie('pseudo', $user['pseudo'], time() + 365*24*3600, null, null, false, true);
        setcookie('mail', $mail, time() + 365*24*3600, null, null, false, true);
        setcookie('password', $user['password'], time() + 365*24*3600, null, null, false, true);
        setcookie('user_status', $user['user_status'], time() + 365*24*3600, null, null, false, true);
        echo $_COOKIE['mail'] . '<br>';
        echo $_COOKIE['pseudo'] . '<br>';
        echo $_COOKIE['password'] . '<br>';
        echo $_COOKIE['user_status'] . '<br>';





        $eventsManager = new EventsManager();
        $events = $eventsManager->getEvents();

        require('view/member/events.php');
    } else {
        $errorMessage = 'Mauvais identifiant ou mot de passe';
        throw new Exception('Mauvais identifiant ou mot de passe');
        header('Location: index.php?action=login');
    }
}

function deconnexion()
{
    setcookie('pseudo', '');
    setcookie('password', '');
    setcookie('user_status', '');
    header('Location: index.php?action=index');

}

function listEvents()
{
    $eventManager = new EventsManager();
    $events = $eventManager->getEvents();


    require('view/member/events.php');
}

// ------------------------ LIST VIEW

function listUser()
{
    $memberManager = new MemberManager();
    $users = $memberManager->getUsers();

    require('view/member/users.php');
}

function listPosts()
{
    $postManager = new PostManager();
    $posts = $postManager->getPosts();

    $title = 'Occupation Opéra Confluence';

    require('view/frontend/listPostView.php');
}

function listGoldBook()
{
    $goldBookManager = new GoldBookManager();
    $posts = $goldBookManager->getGoldBooks();

    $title = 'Le livre d\'or';

    require('view/frontend/listGoldBookView.php');
}


function listImage()
{
    $imageManager = new ImageManager();
    $images = $imageManager->getImages();

    require('view/frontend/listImageView.php');
}

function listVideo()
{
    $videoManager = new VideoManager();
    $videos = $videoManager->getVideos();

    $title = 'Occupation Confluence';

    require('view/frontend/listVideoView.php');
}

function listSound()
{
    $soundManager = new SoundManager();
    $sound = $soundManager->getSounds();

    $title = 'Occupation Confluence';

    require('view/frontend/listSoundView.php');
}


// ------------------------ FORM CONTENT
function userForm()
{
    $title = 'Add User';
    require('view/member/addUser.php');
}

function postForm()
{
    require('view/frontend/addBlogPost.php');
}

function postGoldBook()
{
    require('view/frontend/addGoldBook.php');
}

function imageForm()
{
    require('view/frontend/addImage.php');
}

function videoForm()
{
    require('view/frontend/addVideo.php');
}

function soundForm()
{
    require('view/frontend/addSound.php');
}


// ------------------------ ID VIEW
function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}
// ------------------------ ADD CONTENT


function addUser($pseudo, $email, $password, $confirmPassword)
{
    $memberManager = new MemberManager();

    if ($password == $confirmPassword) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $newMember = $memberManager->postUser($pseudo, $email, $password_hash);
        header('Location: index.php?action=listEvents');
    } else {
      if ($affectedLines === false) {
          throw new Exception('Impossible d\'ajouter l\'utilisateur !');
      } else {
          header('Location: index.php?action=userForm');
      }
    }



}

function addPostBlog($title, $content, $image_url, $creation_date)
{
    $postManager = new PostManager();

    $affectedLines = $postManager->postBlog($title, $content, $image_url, $creation_date);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le post !');
    } else {
        header('Location: index.php');
    }
}

function addGoldBook($title, $content, $image_url, $creation_date)
{
    $goldBookManager = new GoldBookManager();

    $affectedLines = $goldBookManager->postGoldBook($title, $content, $image_url, $creation_date);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le post !');
    } else {
        header('Location: index.php');
    }
}


function addImage($title, $image_url, $creation_date)
{
    $imageManager = new ImageManager();

    $affectedLines = $imageManager->postImage($title, $image_url, $creation_date);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter l\'image !');
    } else {
        header('Location: index.php');
    }
}

function addVideo($title, $content, $url, $creation_date)
{
    $videoManager = new VideoManager();

    $affectedLines = $videoManager->postVideo($title, $content, $url, $creation_date);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter la vidéo !');
    } else {
        header('Location: index.php');
    }
}

function addSound($title, $content, $url, $creation_date)
{
    $soundManager = new SoundManager();

    $affectedLines = $soundManager->postSound($title, $content, $url, $creation_date);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter la vidéo !');
    } else {
        header('Location: index.php');
    }
}


















// function addComment($postId, $author, $comment)
// {
//     $commentManager = new CommentManager();
//     $affectedLines = $commentManager->postComment($postId, $author, $comment);
//     if ($affectedLines === false) {
//         throw new Exception('Impossible d\'ajouter le commentaire !');
//     } else {
//         header('Location: index.php?action=post&id=' . $postId);
//     }
// }


//
//
// if (isset($_GET['id']) && $_GET['id'] > 0) {
//     $post = getPost($_GET['id']);
//     $comments = getComments($_GET['id']);
//     require('postView.php');
// } else {
//     echo 'Erreur : aucun identifiant de billet envoyé !';
// }
