<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 05-02-18
 * Time: 19:45
 */

class Db {

    protected $con;

    public function __construct()
    {
        $user = 'root';
        $password = 'root';
        $db = 'autoverhuur';
        $host = '127.0.0.1';
        $port = 3306;

        try {
            $this->con = new PDO('mysql:host='.$host.';port='.$port.';dbname='.$db, $user, $password);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    }

    function getCon() {
        return $this->con;

    }

}