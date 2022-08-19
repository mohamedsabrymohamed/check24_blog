<?php

namespace App\DB;

use App\Exceptions\CustomException;
use App\Helpers\SanitizeData;
use Exception;
use PDO;

class Database {

    /**
     * @var
     */
    protected static $instance;

    /**
     * @return PDO
     * @throws CustomException
     */
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

    /**
     * @param String $query
     * @return array|false
     * @throws CustomException
     */
    public static function executeSelectQuery (String $query)
    {
        try {
            $db = Database::getInstance();

            $sqlQuery = $query;
            $result = $db->prepare($sqlQuery);

            $result->execute();

            return $result->fetchAll(PDO::FETCH_ASSOC);

        } catch(CustomException $error) {
            throw new CustomException("Error Executing Query");
        }
    }

    /**
     * @param String $tableName
     * @param array $data
     * @return void
     * @throws CustomException
     */
    private static function executeInsertQuery(String $tableName, array $data)
    {
        if(count($data)>0)
        {
            $keyString = "";
            $valueString = "";
            $parameters = "";

            $i = 0;
            foreach($data as $key=>$value)
            {
                $i++;
                if($i!=1)
                {
                    $keyString .= ", ";
                    $valueString .= ", ";
                    $parameters .= ", ";
                }
                $keyString .= "`".$key."`";
                $parameters .= "?";
                if(!isset($value))
                {
                    $valueString .= "NULL";
                }
                else
                {
                   $sanitize = new SanitizeData();
                    $valueString .= "'".$sanitize->cleanData($value)."'";
                }


        }
            try {
                $db = Database::getInstance();
                $sqlQuery = "INSERT INTO " .$tableName . "( ".$keyString." ) values( " . $parameters . " )";
                $insert = $db->prepare($valueString);
                $insert->execute($sqlQuery);

            } catch(CustomException $error) {
                throw new CustomException("Error Executing Query");
            }
        }
    }

    /**
     * @param String $tableName
     * @param String $currentPage
     * @return bool
     * @throws CustomException
     */
    public static function selectQueryPaginated(String $tableName, String $currentPage)
    {
        try {
        $limit = 3;
        $query = "SELECT count(*) FROM " .$tableName;
        $db = Database::getInstance();
        $countResult = $db->query($query);
        $totalResults = $countResult->fetchColumn();
        $totalPages = ceil($totalResults/$limit);

        if (!isset($currentPage)) {
            $page = 1;
        } else{
            $page = $currentPage;
        }


        $startingLimit = ($page-1)*$limit;
        $returnQuery  = "SELECT * FROM " . $tableName . " ORDER BY id DESC LIMIT ?,?";
        $result = $db->prepare($returnQuery);
        return $result->execute([$startingLimit, $limit]);
        } catch(CustomException $error) {
            throw new CustomException("Error Executing Query");
        }
    }

}