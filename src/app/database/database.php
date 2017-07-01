<?php

//include_once .....
//new name_class

//database::fetch_topics();
//----------------------
//include_one .....
// $database = new database
// $database->fetch_topics();

/**
 * Created by PhpStorm.
 * User: Tijs
 * Date: 9-5-2017
 * Time: 12:38
 */
class database
{
    private static $conn;

    public function __construct()
    {
        $dbHost = 'localhost';
        $database = 'android_forum';
        $user = 'root';
        $password = '';

        try {
            self::$conn = new PDO("mysql:host=$dbHost;dbname=$database",$user, $password);
            // set the PDO error mode to exception
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public static function execute($query){
        $select = self::$conn->prepare($query);
        $select->execute();
        return $select->fetchALL();
    }

    public static function execute_without_fetch($query){
        $select = self::$conn->prepare($query);
        $select->execute();

    }

    public static function fetch_topics(){
        return self::execute("SELECT * FROM threads");
    }

    public static function user($id){
        return self::execute("Select * From users");
    }
}