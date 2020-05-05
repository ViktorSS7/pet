<?php


namespace System\Model;
use System\Database\database;

class Model
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function query($sql_statment){
        return Database::execute_sql($sql_statment);
    }

    public function getAll(string $table){
        $sql_statment = "SELECT * FROM `$table`";
        return Database::execute_sql($sql_statment);
    }

    public function getOne(int $id, string $table){
        $sql_statment = "SELECT * FROM `$table` WHERE id = $id";
        return Database::execute_sql($sql_statment);
    }

    public function getColumn(string $column_name, string $table){
        $this->db->real_escape_string($column_name);
        $sql_statment = "SELECT `$column_name` FROM `$table`";
        return Database::execute_sql($sql_statment);
    }

    public function getOneColumn(int $id, string $column_name,  string $table){
        $this->db->real_escape_string($column_name);
        $sql_statment = "SELECT $column_name FROM `$table` WHERE id = $id";
        return Database::execute_sql($sql_statment);
    }
}