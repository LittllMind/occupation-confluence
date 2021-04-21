<?php
namespace OpenClassroom\Blog\Model;

use \PDO;

class BddManager
{

    // Developpement

    // protected function dbConnect()
    // {
    //     $bdd = new PDO(
    //         'mysql:host=localhost;dbname=blog;charset=utf8',
    //         'phpLittllMind',
    //         'jadore18@P',
    //         array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    //     );
    //     return $bdd;
    // }

    // Prod
    protected function dbConnect()
    {
        $bdd = new PDO(
            'mysql:host=sql110.epizy.com;dbname=epiz_28390610_blog;charset=utf8',
            'epiz_28390610',
            '3yfurPH8IiwjKF',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
        return $bdd;
    }
}
