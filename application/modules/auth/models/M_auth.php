<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{


    public function signIn()
    {
        $username = $this->input->post('email');
        $password = $this->input->post('password');
        $cek = $this->db->get_where('user', ['email' => $username])->row_array();

        if ($cek) { //Cek Usernya jika ada ..

            if ($cek['is_active'] == 1) {    // cek keaktivan akun

                if (password_verify($password, $cek['password'])) { //   cek Passwordnya
                    $data = [
                        'email' => $cek['email'],
                        'role_id' => $cek['role_id'],
                        'name' => $cek['name'],
                        'id' => $cek['id'],
                        'date_created' => $cek['date_created']
                    ];
                    $this->session->set_userdata($data);
                    $mesaage = 'Welcome Back';
                    info_message($mesaage);
                    // cek Hak akses lalu arahkan sesuai aksesnya
                    if ($cek['role_id'] == 1) {
                        redirect('home');
                    } else if ($cek['role_id'] == 2) {
                        redirect('home');
                    } else if ($cek['role_id'] == 3) {

                        redirect('todo');
                    }
                } else {
                    // Password salah arahkan ke login lagi    
                    $mesaage = 'Sorry, Your password not match';
                    danger_message($mesaage);
                    redirect('auth');
                }
            } else {
                // Jika akun tidak aktived
                $mesaage = 'Sorry, Your accout not actived';
                danger_message($mesaage);
                redirect('auth');
            }
        } else {
            // Jika akun tidak ada di db
            $mesaage = 'Sorry, Your accout not register';
            danger_message($mesaage);
            redirect('auth');
        }
    }
}
