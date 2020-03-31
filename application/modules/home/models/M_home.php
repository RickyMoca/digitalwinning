<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

    /* ------------------------------------------------------------------------------
    *  # Absen cepat
    * ---------------------------------------------------------------------------- */

    public function dataabsen()
    {
        $id = $this->session->userdata('id');
        $this->db->where(array('id_user' => $id, 'date' => tglsajahdb()));
        $result = $this->db->get('absensi')->row_array();
        return $result;
    }



    public function absenklik()
    {
        $id = $this->session->userdata('id');
        $this->db->where(array('id_user' => $id, 'date' => tglsajahdb()));
        $result = $this->db->get('absensi')->row_array();

        if ($result['status'] <= '0') {
            // Jalankan fungsi insert
            $data = array(
                'id_user' => $id,
                'date' => tglsajahdb(),
                'jam_masuk' => wkt_now(),
                'status' => '1'
            );

            $this->db->insert('absensi', $data);
            $mesaage = 'Trimakasih udah absen masuk hari ini';
            info_message($mesaage);
        } else {
            // Jalankan Fungsi Update
            $this->db->where('id', $result['id']);
            $this->db->update('absensi', array('jam_pulang' => wkt_now()));
            $mesaage = 'Absen pulang kamu udah aku simpen yahh, selamat istirahat';
            info_message($mesaage);
        }
    }
}
