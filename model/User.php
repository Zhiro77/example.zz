<?php
namespace model;

use system\Model;

class User extends Model
{
    public function model($query) {

        return $this->db->query_run($query); 
    }
}

?>
