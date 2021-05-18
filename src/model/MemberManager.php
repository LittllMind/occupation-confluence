<?php
namespace OpenClassroom\Blog\Model;

require_once("model/BddManager.php");

class MemberManager extends BddManager
{
    public function getMember($pseudo, $password, $flexCheckChecked)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->query(
            'SELECT id, password
            FROM membre
            WHERE pseudo = ?'
        );

        $req->execute(array($pseudo));
        $user = $req->fetch();


        return $user;
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
