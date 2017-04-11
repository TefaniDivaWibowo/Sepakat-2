<?php

Class Model_kerjasama extends CI_Model {
        function __construct(){
                $this->load->database();
        }

        function tambah_kerjasama($data){
                $this->db->insert('kerjasama', $data);
        }
}
?>