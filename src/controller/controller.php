<?php
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/ImageManager.php');
require_once('model/VideoManager.php');
require_once('model/SoundManager.php');

use \OpenClassroom\Blog\Model\PostManager;
use \OpenClassroom\Blog\Model\CommentManager;
use \OpenClassroom\Blog\Model\ImageManager;
use \OpenClassroom\Blog\Model\VideoManager;
use \OpenClassroom\Blog\Model\SoundManager;

function index()
{
    $title = 'Occupation Opéra Confluence';
    require('view/frontend/acceuil.php');
}

// ------------------------ LIST VIEW

function listPosts()
{
    $postManager = new PostManager();
    $posts = $postManager->getPosts();

    $title = 'Occupation Opéra Confluence';

    require('view/frontend/listPostView.php');
}

function listImage()
{
    $postManager = new PostManager();
    $posts = $postManager->getPosts();

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

function postForm()
{
    require('view/frontend/addBlogPost.php');
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
