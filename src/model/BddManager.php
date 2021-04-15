<?php
namespace OpenClassroom\Blog\Model;

use \PDO;

class BddManager
{
    protected function dbConnect()
    {
        $bdd = new PDO(
            'mysql:host=localhost;dbname=blog;charset=utf8',
            'phpLittllMind',
            'jadore18@P',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
        return $bdd;
    }
}
