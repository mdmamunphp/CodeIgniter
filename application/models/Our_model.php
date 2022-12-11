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

    
    // public function UpdateData($table, $data, $where){

    //     $this->db->where($where);
    //     if($this->db->update($table)){}
    // }
        public function view($select, $table, $where = null, $order =null, $limit = null, $join = null, $group_by = null){

            $this->db->select($select);
            $this->db->from($table);
            if($join){
                foreach($join as $key => $value){ 
                    $this->db->join($key, $value);

                }
            }
            if($where){
                $this->db->where($where);
            }
            if($order){
                $this->db->order_by($order[0], $order[1]);
            }
            if($group_by){

                $this->db->group_by($group_by);
            }
            if($limit = null){
                $this->db->group_by($limit[0], $limit[1]);
            }
           
           
            return $this->db->get()->result();

        }


        public function UpdateData($table, $data, $where){
            $this->db->where($where);
            if($this->db->update($table, $data)){           
               return true;
            }
            return false;
         }
   
         public function DeleteData($table, $where){        
            if($this->db->delete($table, $where)){           
               return true;
            }
            return false;
         }
}