<?php

namespace System\Database;


use Exception;
use mysqli;

class database
{

    private static $db;
    private $connection;

    private function __construct() {
        $this->connection = new MySQLi(HOST, USER, PASSWORD, NAME_DB);
    }

    function __destruct() {
        $this->connection->close();
    }

    public static function getConnection() {
        if (self::$db == null) {
            self::$db = new Database();
        }
        return self::$db->connection;
    }

    public static function execute_sql($sql_statement){
        $db = Database::getConnection();
        $query_result = [];
        try {
            $result = $db->query($sql_statement);
            while ($row = $result->fetch_assoc()) {
                array_push($query_result, $row);
            }
            $result->free();
            return $query_result;
        } catch (Exception $exception){
            return $exception->getMessage();
        }
    }

}