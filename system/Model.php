<?php
namespace system;

class Model
{
    public $db;

    function __construct() {
        $this->db = new Db();
    }
}
