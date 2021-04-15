<?php
namespace OpenClassroom\Blog\Model;

require_once("model/BddManager.php");

class CommentManager extends BddManager
{
    public function getComments($postId)
    {
        $bdd = $this->dbConnect();
        $comments = $bdd->prepare(
            'SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\')
            AS comment_date_fr
            FROM commentaires
            WHERE post_id = ?
            ORDER BY comment_date DESC'
        );
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $bdd = $this->dbConnect();
        $comments = $bdd->prepare(
            'INSERT INTO commentaires(post_id, author, comment, comment_date)
            VALUES (?, ?, ?, NOW())'
        );

        $affectedLines = $comments->execute(array($postId, $author, $comment));

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
