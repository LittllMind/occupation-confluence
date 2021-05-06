<?php
namespace OpenClassroom\Blog\Model;

require_once("model/BddManager.php");

class GoldBookManager extends BddManager
{
    public function getGoldBooks()
    {
        $bdd = $this->dbConnect();
        $req = $bdd->query(
            'SELECT id, title, content, image_url, DATE_FORMAT(creation_date, \'%d/%m/%Y\')
            AS creation_date_fr
            FROM goldBook
            ORDER BY creation_date DESC'
        );

        return $req;
    }

    public function getGoldBook($goldBook)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare(
            'SELECT id, title, content, image_url, DATE_FORMAT(creation_date, \'%d/%m/%Y\')
            AS creation_date_fr
            FROM goldBook
            WHERE id = ?'
        );
        $req->execute(array($goldBook));
        $goldBook = $req->fetch();

        return $goldBook;
    }

    public function postGoldBook($title, $content, $image_url, $creation_date)
    {
        $bdd = $this->dbConnect();
        $goldBook = $bdd->prepare(
            'INSERT INTO goldBook(title, content, image_url, creation_date)
            VALUES (?, ?, ?, ?)'
        );

        $affectedLines = $goldBook->execute(array($title, $content, $image_url, $creation_date));

        return $affectedLines;
    }
}
