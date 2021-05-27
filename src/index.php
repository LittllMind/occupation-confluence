

<?php
require('controller/controller.php');





try {
    if (empty($_GET['action'])) {
        $action = 'index';
    } else {
        $action = $_GET['action'];
    }
    switch ($action) {
        // ----------- U S E R S ---------
        case 'index':
            index();
            break;
        case 'login':
            login();
            break;
        case 'memberConnexion':
            if (isset($_POST['stayConnect'])) {
                $stayConnect = 'on';
            } else {
                $stayConnect = 'off';
            }
            if (!empty($_POST['mail']) && !empty($_POST['password']) && !empty($stayConnect)) {
                  memberConnexion($_POST['mail'], $_POST['password'], $stayConnect);
            } else {
                    echo $_POST['mail']; echo $_POST['password']; echo $_POST['stayConnect'];
                    $errorMessage = 'Tous les champs ne sont pas remplis';
                    throw new Exception('tous les champs ne sont pas remplis !');
            }
            break;
        case 'deconnexion':
            deconnexion();
            break;

        // ----------- LIST VIEWS
        case 'listEvents':
            listEvents();
            break;
        case 'listUser':
            listUser();
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
        case 'userForm':
            userForm();
            break;
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
        case 'addUser':
            if (!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmPassword'])) {
                addUser($_POST['pseudo'], $_POST['email'], $_POST['password'], $_POST['confirmPassword']);
            } else {
                $errorMessage = 'Tous les champs ne sont pas remplis';
                throw new Exception('Erreur : tous les champs ne sont pas remplis !');
            }
            break;
        case 'addPostBlog':
            if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['image_url']) && !empty($_POST['creation_date'])) {
                addPostBlog($_POST['title'], $_POST['content'], $_POST['image_url'], $_POST['creation_date']);
            } else {
                $errorMessage = 'Tous les champs ne sont pas remplis';
                throw new Exception('Erreur : tous les champs ne sont pas remplis !');
            }
            break;
        case 'addGoldBook':
            if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['image_url']) && !empty($_POST['creation_date'])) {
                addGoldBook($_POST['title'], $_POST['content'], $_POST['image_url'], $_POST['creation_date']);
            } else {
                $errorMessage = 'Tous les champs ne sont pas remplis';
                throw new Exception('Erreur : tous les champs ne sont pas remplis !');
            }
            break;
        case 'addImage':
            if (!empty($_POST['title']) && !empty($_POST['image_url']) && !empty($_POST['creation_date'])) {
                addImage($_POST['title'], $_POST['image_url'], $_POST['creation_date']);
            } else {
                $errorMessage = 'Tous les champs ne sont pas remplis';
                throw new Exception('Erreur : tous les champs ne sont pas remplis !');
            }
            break;
        case 'addVideo':
            if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['url']) && !empty($_POST['creation_date'])) {
                addVideo($_POST['title'], $_POST['content'], $_POST['url'], $_POST['creation_date']);
            } else {
                $errorMessage = 'Tous les champs ne sont pas remplis';
                throw new Exception('Erreur : tous les champs ne sont pas remplis !');
            }
            break;
        case 'addSound':
            if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['url']) && !empty($_POST['creation_date'])) {
                addSound($_POST['title'], $_POST['content'], $_POST['url'], $_POST['creation_date']);
            } else {
                $errorMessage = 'Tous les champs ne sont pas remplis';
                throw new Exception('Erreur : tous les champs ne sont pas remplis !');
            }
            break;
        case 'addEvent':
            if (!empty($_POST['created']) && !empty($_POST['title']) && !empty($_POST['content'])) {
                addEvent($_POST['created'], $_POST['title'], $_POST['content']);
            } else {
                echo $_POST['created'];
                echo $_POST['title'];
                echo $_POST['content'];

                $errorMessage = 'Tous les champs ne sont pas remplis';
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
