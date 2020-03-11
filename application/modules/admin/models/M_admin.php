<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    

    // Config User
    public function get_autonumber(){
    $data = $this->db->query("select get_id_user() as id")->row_array();
    return $data['id'];
    }

    public function get_role(){
        return  $this->db->get('user_role')->result_array();
    }

    public function get_user()
    {
        return $this->db->get('v-userr')->result_array();
    }

    public function delet_user($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('user');
    }


}