<?php
namespace OpenClassroom\Blog\Model;

require_once("model/BddManager.php");

class MemberManager extends BddManager
{
    public function getMember($mail)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare(
            'SELECT id, password, pseudo, mail, registration_date
            FROM membre
            WHERE mail = ?'
        );

        $req->execute(array($mail));
        $user = $req->fetch();


        return $user;
    }

    public function getUsers()
    {
        $bdd = $this->dbConnect();
        $req = $bdd->query(
            'SELECT id, pseudo, password, mail, DATE_FORMAT(registration_date, \'%d/%m/%Y\')
            AS registration_date_fr
            FROM membre
            ORDER BY registration_date DESC'
        );

        return $req;
    }
    //
    // public function getPost($postId)
    // {
    //     $bdd = $this->dbConnect();
    //     $req = $bdd->prepare(
    //         'SELECT id, title, content, image_url, DATE_FORMAT(creation_date, \'%d/%m/%Y\')
    //         AS creation_date_fr
    //         FROM billets
    //         WHERE id = ?'
    //     );
    //     $req->execute(array($postId));
    //     $post = $req->fetch();
    //
    //     return $post;
    // }
    //
    // public function postBlog($title, $content, $image_url, $creation_date)
    // {
    //     $bdd = $this->dbConnect();
    //     $comments = $bdd->prepare(
    //         'INSERT INTO billets(title, content, image_url, creation_date)
    //         VALUES (?, ?, ?, ?)'
    //     );
    //
    //     $affectedLines = $comments->execute(array($title, $content, $image_url, $creation_date));
    //
    //     return $affectedLines;
    // }
}
