<?php
namespace OpenClassroom\Blog\Model;

use \PDO;

class BddManager
{


    //--------------D E V E L O P P E M E N T----------


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


    //-----------   P R O D U C T I O N ---------------

    // protected function dbConnect()
    // {
    //     $bdd = new PDO(
    //         'mysql:host=occupadlittllmin.mysql.db;dbname=occupadlittllmin;charset=utf8',
    //         'occupadlittllmin',
    //         'jadore18O',
    //         array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    //     );
    //     return $bdd;
    // }
}
