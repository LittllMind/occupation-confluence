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
            AS creation_date_fr
            FROM events
            ORDER BY creation_date_fr DESC'
        );

        return $req;
    }

    public function postEvent($created, $title, $content)
    {
        $status = 'created';

        $bdd = $this->dbConnect();
        $comments = $bdd->prepare(
            'INSERT INTO billets(title, content, created, status)
            VALUES (?, ?, ?, ?, ?)'
        );

    
        $affectedLines = $comments->execute(array($title, $content, $created, $status));
    
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
