<?php

class DB
{
    public $conn;
    protected $servername = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $dbname = 'baseaccount';

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    }

    public function find_one($model, $col, $value)
    {
        $sql = "select * from $model where $col = '$value'";
        $res = $this->execute($sql);
        return $res->fetch_assoc();
    }

    public function get_all($model)
    {
        $sql = "select * from $model";
        return $this->execute($sql);
    }

    public function execute($sql)
    {
        return $this->conn->query($sql);
    }
}
