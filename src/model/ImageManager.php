<?php
namespace OpenClassroom\Blog\Model;

require_once("model/BddManager.php");

class ImageManager extends BddManager
{
    public function getImages()
    {
        $bdd = $this->dbConnect();
        $req = $bdd->query(
            'SELECT id, title, url, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\')
            AS creation_date
            FROM galerie
            ORDER BY creation_date DESC'
        );

        return $req;
    }



    public function postImage($title, $image_url, $creation_date)
    {
        $bdd = $this->dbConnect();
        $comments = $bdd->prepare(
            'INSERT INTO galerie(title, url, creation_date)
            VALUES (?, ?, ?)'
        );

        $affectedLines = $comments->execute(array($title, $image_url, $creation_date));

        return $affectedLines;
    }
}
