<?php
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/ImageManager.php');

use \OpenClassroom\Blog\Model\PostManager;
use \OpenClassroom\Blog\Model\CommentManager;
use \OpenClassroom\Blog\Model\ImageManager;

function index()
{
    require('view/frontend/acceuil.php');
}

function galerie()
{
    $postManager = new PostManager();
    $posts = $postManager->getPosts();

    $imageManager = new ImageManager();
    $images = $imageManager->getImages();

    require('view/frontend/galerie.php');
}

function listPosts()
{
    $postManager = new PostManager();
    $posts = $postManager->getPosts();

    $title = 'Occupation Confluence';

    require('view/frontend/listPostView.php');
}

function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function postForm()
{
    require('view/frontend/addBlogPost.php');
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

function imageForm()
{
    require('view/frontend/addImage.php');
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

//
//
// if (isset($_GET['id']) && $_GET['id'] > 0) {
//     $post = getPost($_GET['id']);
//     $comments = getComments($_GET['id']);
//     require('postView.php');
// } else {
//     echo 'Erreur : aucun identifiant de billet envoyé !';
// }
