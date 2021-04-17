<?php
namespace OpenClassroom\Blog\Model;

require_once("model/BddManager.php");

class PostManager extends BddManager
{
    public function getPosts()
    {
        $bdd = $this->dbConnect();
        $req = $bdd->query(
            'SELECT id, title, content, image_url, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\')
            AS creation_date_fr
            FROM billets
            ORDER BY creation_date
            DESC LIMIT 0, 5'
        );

        return $req;
    }

    public function getPost($postId)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare(
            'SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\')
            AS creation_date_fr
            FROM billets
            WHERE id = ?'
        );
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    public function postBlog($title, $content, $image_url)
    {
        $bdd = $this->dbConnect();
        $comments = $bdd->prepare(
            'INSERT INTO billets(title, content, image_url, creation_date)
            VALUES (?, ?, ?, NOW())'
        );

        $affectedLines = $comments->execute(array($title, $content, $image_url));

        return $affectedLines;
    }
    // private function dbConnect()
    // {
    //       $bdd = new PDO(
    //           'mysql:host=localhost;dbname=blog;charset=utf8',
    //           'phpLittllMind',
    //           'jadore18@P',
    //           array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    //       );
    //       return $bdd;
    // }
}
