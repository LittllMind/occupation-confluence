<?php
namespace OpenClassroom\Blog\Model;

require_once("model/BddManager.php");

class MemberManager extends BddManager
{
  // ------------------------ GET

    public function getMember($mail)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare(
            'SELECT id, password, pseudo, mail, user_status, registration_date
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
            AS registration_date
            FROM membre
            ORDER BY registration_date DESC'
        );

        return $req;
    }

  // ------------------------ POST


    public function postUser($pseudo, $email, $password)
    {
        $userStatus = 'admin';
        $bdd = $this->dbConnect();
        $user = $bdd->prepare(
            'INSERT INTO membre(pseudo, mail, password, user_status)
            VALUES (?, ?, ?, ?)'
        );

        $affectedLines = $user->execute(array($pseudo, $email, $password, $userStatus));

        return $affectedLines;
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

}
