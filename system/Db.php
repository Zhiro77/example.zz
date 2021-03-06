<?php
namespace system;

use config\DbConfig;
use mysqli;

class Db
{
    private $connection;
    public $data = array();

    function __construct()
    {
        $this->connection = new mysqli(DbConfig::DB_HOST, DbConfig::DB_USERNAME, DbConfig::DB_PASSWORD, DbConfig::DB_NAME);

        if($this->connection->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->connection->connect_error;
            exit();
        }
    }

    public function query_run($query) {
        if ($result = $this->connection->query($query)) {
            if (!(gettype($result)=='boolean') && $result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    array_push($this->data, (object)$row);
                }
            }else{
                return $result;
            }
            return $this->data;
        }
        return "Error: %s\n". $this->connection->error;
    }
}
