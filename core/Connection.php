<?php
namespace Core;

use PDO;
use PDOException;

class Connection {
    public static function connect() {
        $conf = include_once('/../app/database.php');

        $host = $conf['mysql']['host'];
        $database = $conf['mysql']['database'];
        $user = $conf['mysql']['user'];
        $pass = $conf['mysql']['pass'];
        $charset = $conf['mysql']['charset'];
        $collation = $conf['mysql']['collation'];

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$database;charset=$charset;collation=$collation", "$user", "$pass");
            $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND , "SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'");
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $pdo;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
