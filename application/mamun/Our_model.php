<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_model extends CI_Model {

    public $Id;
    public function InsertData($table, $data){

        if($this->db->insert($table, $data)){

            $this->Id = $this->db->insert_id();

            return true;
        }
        return false;
    }

}