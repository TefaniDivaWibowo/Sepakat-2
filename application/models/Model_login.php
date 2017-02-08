<?php
class Model_login extends CI_Model {

        public function select($where, $table)
        {
                $query = $this->db->select('*') 
                         ->from($table)
                         ->where($where)
                         ->get();
                return $query->row_array();
        }

        public function selectAll($table)
        {
                $query = $this->db->select('*')
                         ->from($table)
                         ->get();
                return $query->result_array();
        }

}