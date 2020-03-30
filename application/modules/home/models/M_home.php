<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

    /* ------------------------------------------------------------------------------
    *  # Absen cepat
    * ---------------------------------------------------------------------------- */

    public function absenklik()
    {

        $id = $this->session->userdata('id');
        $this->db->where(array('id_user' => $id, 'date' => tglsajahdb()));
        $result = $this->db->get('absensi')->row_array();

        if ($result == 0) {

            $data = array(
                'id_user' => $id,
                'date' => tglsajahdb(),
                'jam_masuk' => wkt_now(),
                'status' => '1'
            );

            $this->db->insert('absensi', $data);
            $mesaage = 'data berhasil di update';
            info_message($mesaage);
        } else {
            $mesaage = 'Kamu udah absen hari ini !';
            info_message($mesaage);
        }

        // $this->db->where(array('id_user' => $id, 'date' => tglsajahdb()));
        // $result = $this->db->get('absensi')->row_array();

        // if ($result == 'null') {
        //     $data = array(
        //         'id_user' => $id,
        //         'date' => tglsajahdb(),
        //         'jam_masuk' => wkt_now(),
        //         'status' => '1'
        //     );

        //     $this->db->insert('absensi', $data);
        //     $mesaage = 'data berhasil di update';
        //     info_message($mesaage);
        // } else {
        //     $data = array(
        //         'status' => '1',
        //         'date_completed' => tgl_now()

        //     );
        //     $mesaage = 'Todo has been chgange to Completed';
        //     info_message($mesaage);
        // }
    }
}
