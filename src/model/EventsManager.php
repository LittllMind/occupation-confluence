<?php
namespace OpenClassroom\Blog\Model;

require_once("model/BddManager.php");

class EventsManager extends BddManager
{
    public function getEvents()
    {
        $bdd = $this->dbConnect();
        $req = $bdd->query(
            'SELECT id, title, content, DATE_FORMAT(created, \'%d/%m/%Y\')
            AS creation_date,
            DATE_FORMAT(modified, \'%d/%m/%Y\')
            AS modified_date
            FROM events
            ORDER BY creation_date DESC'
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
