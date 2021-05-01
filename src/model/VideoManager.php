<?php
namespace OpenClassroom\Blog\Model;

require_once("model/BddManager.php");

class VideoManager extends BddManager
{
    public function getVideos()
    {
        $bdd = $this->dbConnect();
        $req = $bdd->query(
            'SELECT id, title, content, url, DATE_FORMAT(creation_date, \'%d/%m/%Y\')
            AS creation_date_fr
            FROM video
            ORDER BY creation_date DESC'
        );

        return $req;
    }

    public function getVideo($videoId)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare(
            'SELECT id, title, content, url, DATE_FORMAT(creation_date, \'%d/%m/%Y\')
            AS creation_date_fr
            FROM video
            WHERE id = ?'
        );
        $req->execute(array($videoId));
        $video = $req->fetch();

        return $video;
    }

    public function postVideo($title, $content, $url, $creation_date)
    {
        $bdd = $this->dbConnect();
        $comments = $bdd->prepare(
            'INSERT INTO video(title, content, url, creation_date)
            VALUES (?, ?, ?, ?)'
        );

        $affectedLines = $comments->execute(array($title, $content, $url, $creation_date));

        return $affectedLines;
    }
}
