

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

// try {
//     if (isset($_GET['action'])) {
//         if ($_GET['action'] == 'listPosts') {
//             listPosts();
//         } elseif ($_GET['action'] == 'post') {
//             if (isset($_GET['id']) && $_GET['id'] > 0) {
//                 post();
//             } else {
//                 throw new Exception('Erreur : aucun identifiant de billet envoyé');
//             }
//         } elseif ($_GET['action'] == 'addComment') {
//             if (isset($_GET['id']) && $_GET['id'] > 0) {
//                 if (!empty($_POST['author']) && !empty($_POST['comment'])) {
//                     addComment($_GET['id'], $_POST['author'], $_POST['comment']);
//                     // header('Location: index.php?action=post&id=' . $_GET['id']);
//                 } else {
//                     throw new Exception('Erreur : tous les champs ne sont pas remplis !');
//                 }
//             } else {
//                 throw new Exception('Erreur : aucun identifiant de billet envoyé !');
//             }
//         } elseif ($_GET['action'] == 'postForm') {
//             postForm();
//         } elseif ($_GET['action'] == 'addPostBlog') {
//             if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['image_url']) && !empty($_POST['creation_date'])) {
//                 addPostBlog($_POST['title'], $_POST['content'], $_POST['image_url'], $_POST['creation_date']);
//             } else {
//                 throw new Exception('Erreur : tous les champs ne sont pas remplis !');
//             }
//         } elseif ($_GET['action'] == 'index') {
//             index();
//         } elseif ($_GET['action'] == 'galerie') {
//             galerie();
//         } elseif ($_GET['action'] == 'listVideo') {
//             listVideo();
//         } elseif ($_GET['action'] == 'postImage') {
//             imageForm();
//         } elseif ($_GET['action'] == 'addImage') {
//             if (!empty($_POST['title']) && !empty($_POST['image_url']) && !empty($_POST['creation_date'])) {
//                 addImage($_POST['title'], $_POST['image_url'], $_POST['creation_date']);
//             } else {
//                 throw new Exception('Erreur : tous les champs ne sont pas remplis !');
//             }
//         }
//     } else {
//         index();
//     }
// } catch (Exception $e) {
//     echo 'Erreur : ' . $e->getMessage();
//     require('view/frontend/errorView.php');
// }
