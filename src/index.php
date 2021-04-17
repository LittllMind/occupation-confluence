

<?php
require('controller/controller.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        } elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            } else {
                throw new Exception('Erreur : aucun identifiant de billet envoyé');
            }
        } elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                    // header('Location: index.php?action=post&id=' . $_GET['id']);
                } else {
                    throw new Exception('Erreur : tous les champs ne sont pas remplis !');
                }
            } else {
                throw new Exception('Erreur : aucun identifiant de billet envoyé !');
            }
        } elseif ($_GET['action'] == 'postForm') {
            postForm();
        } elseif ($_GET['action'] == 'addPostBlog') {
            if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['image_url'])) {
                addPostBlog($_POST['title'], $_POST['content'], $_POST['image_url']);
            } else {
                throw new Exception('Erreur : tous les champs ne sont pas remplis !');
            }
        }
    } else {
        index();
    }
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
    require('view/frontend/errorView.php');
}
