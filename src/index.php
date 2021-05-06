

<?php
require('controller/controller.php');





try {
    if (empty($_GET['action'])) {
        $action = 'index';
    } else {
        $action = $_GET['action'];
    }
    switch ($action) {
        // ----------- LIST VIEWS
        case 'index':
            index();
            break;
        case 'listPosts':
            listPosts();
            break;
        case 'listGoldBook':
            listGoldBook();
            break;
        case 'listImage':
            listImage();
            break;
        case 'listVideo':
            listVideo();
            break;
        case 'listSound':
            listSound();
            break;
        // ------------ FORMS CONTENT
        case 'postForm':
            postForm();
            break;
        case 'postGoldBook':
            postGoldBook();
            break;
        case 'postImage':
            imageForm();
            break;
        case 'postVideo':
            videoForm();
            break;
        case 'postSound':
            soundForm();
            break;
        // ------------ ADD CONTENT
        case 'addPostBlog':
            if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['image_url']) && !empty($_POST['creation_date'])) {
                addPostBlog($_POST['title'], $_POST['content'], $_POST['image_url'], $_POST['creation_date']);
            } else {
                throw new Exception('Erreur : tous les champs ne sont pas remplis !');
            }
            break;
        case 'addGoldBook':
            if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['image_url']) && !empty($_POST['creation_date'])) {
                addGoldBook($_POST['title'], $_POST['content'], $_POST['image_url'], $_POST['creation_date']);
            } else {
                throw new Exception('Erreur : tous les champs ne sont pas remplis !');
            }
            break;
        case 'addImage':
            if (!empty($_POST['title']) && !empty($_POST['image_url']) && !empty($_POST['creation_date'])) {
                addImage($_POST['title'], $_POST['image_url'], $_POST['creation_date']);
            } else {
                throw new Exception('Erreur : tous les champs ne sont pas remplis !');
            }
            break;
        case 'addVideo':
            if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['url']) && !empty($_POST['creation_date'])) {
                addVideo($_POST['title'], $_POST['content'], $_POST['url'], $_POST['creation_date']);
            } else {
                throw new Exception('Erreur : tous les champs ne sont pas remplis !');
            }
            break;
        case 'addSound':
            if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['url']) && !empty($_POST['creation_date'])) {
                addSound($_POST['title'], $_POST['content'], $_POST['url'], $_POST['creation_date']);
            } else {
                throw new Exception('Erreur : tous les champs ne sont pas remplis !');
            }
            break;
        default:
            index();
    }
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
    require('view/frontend/errorView.php');
}
