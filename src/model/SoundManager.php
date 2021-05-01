<?php
namespace OpenClassroom\Blog\Model;

require_once("model/BddManager.php");

class SoundManager extends BddManager
{
    public function getSounds()
    {
        $bdd = $this->dbConnect();
        $req = $bdd->query(
            'SELECT id, title, content, url, DATE_FORMAT(creation_date, \'%d/%m/%Y\')
            AS creation_date_fr
            FROM sound
            ORDER BY creation_date DESC'
        );

        return $req;
    }

    public function getSound($soundId)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare(
            'SELECT id, title, content, url, DATE_FORMAT(creation_date, \'%d/%m/%Y\')
            AS creation_date_fr
            FROM sound
            WHERE id = ?'
        );
        $req->execute(array($videoId));
        $sound = $req->fetch();

        return $sound;
    }

    public function postSound($title, $content, $url, $creation_date)
    {
        $bdd = $this->dbConnect();
        $comments = $bdd->prepare(
            'INSERT INTO sound(title, content, url, creation_date)
            VALUES (?, ?, ?, ?)'
        );

        $affectedLines = $comments->execute(array($title, $content, $url, $creation_date));

        return $affectedLines;
    }
}
