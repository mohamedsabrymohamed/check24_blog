<?php

namespace App\DB;

use App\Exceptions\CustomException;
use Exception;
use PDO;

class Database {

    protected static $instance;

    public static function getInstance() {

        if(empty(self::$instance)) {

            $db_info = array(
                "db_host" => "localhost",
                "db_port" => "3306",
                "db_user" => "root",
                "db_pass" => "asdasd",
                "db_name" => "check24_blog");

            try {
                self::$instance = new PDO("mysql:host=".$db_info['db_host'].';port='.$db_info['db_port'].';dbname='.$db_info['db_name'], $db_info['db_user'], $db_info['db_pass']);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
                self::$instance->query('SET CHARACTER SET utf8');

            } catch(CustomException $error) {

                throw new CustomException("Error Connecting DB");
            }

        }

        return self::$instance;
    }

}