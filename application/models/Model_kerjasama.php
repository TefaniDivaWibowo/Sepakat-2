<?php

Class Model_kerjasama extends CI_Model {
        function __construct(){
                $this->load->database();
        }

        function tambah_kerjasama($data){
                $this->db->insert('kerjasama', $data);
        }

        function get_kerjasama_manufaktur($id){
            $query = $this->db
                ->select('*')
                ->from('kerjasama')
                ->join('bahan_baku','bahan_baku.id_bahan_baku = kerjasama.id_bahan_baku')
                ->where('kerjasama.id_manufaktur',$id)
                ->where('konfirmasi', 0)
                ->where('pengirim', 'Bahan Baku')
                ->get();

            return $query->result_array();
        }

        function get_kerjasama_bahanbaku($id){
            $query = $this->db
                ->select('*')
                ->from('kerjasama')
                ->join('manufaktur','manufaktur.id_manufaktur = kerjasama.id_manufaktur')
                ->where('kerjasama.id_bahan_baku',$id)
                ->where('konfirmasi', 0)
                ->where('pengirim', 'Manufaktur')
                ->get();

            return $query->result_array();
        }

        function terima_manufaktur($id, $id2,$request){
            $query = $this->db
                ->where('id_bahan_baku',$id)
                ->where('id_manufaktur',$id2)
                ->update('kerjasama',$request);
            return $query;
        }

        function tolak_manufaktur($id, $id2){
            $query = $this->db
                ->where('id_bahan_baku',$id)
                ->where('id_manufaktur',$id2)
                ->delete('kerjasama');
            return $query;
        }

        function terima_bahanbaku($id, $id2, $request){
            $query = $this->db
                ->where('id_manufaktur',$id)
                ->where('id_bahan_baku',$id2)
                ->update('kerjasama',$request);
            return $query;
        }

        function tolak_bahanbaku($id, $id2){
            $query = $this->db
                ->where('id_manufaktur',$id)
                ->where('id_bahan_baku',$id2)
                ->delete('kerjasama');
            return $query;
        }
}
?>
