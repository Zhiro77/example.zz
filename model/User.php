<?php
namespace model;
class User extends Model
{
    protected $db;
    function __construct()
    {
        $this->db = new Db();
    }
}

?>