<?php
class Model_register extends CI_Model {

        public function add_user($data)
        {
                $this->db->insert('user', $data);
        }

        public function add_man($data_us)
        {
               $this->db->insert('manufaktur', $data_us);
        }

        public function add_ban($data_us)
        {
               $this->db->insert('bahan_baku', $data_us);
        }

    function changeActiveState($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    function update_kon($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}