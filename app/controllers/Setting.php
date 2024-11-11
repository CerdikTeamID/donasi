<?php

class Setting extends Controller {
	public function __construct(){
		$this->db = new database;
	}
	public function index()
    {
        
        $data['judul'] = 'Setting';
        $data['pnr'] = $this->model('Amil_model')->getAllAmil();
		// $data['nama'] = $this->model('User_model')->getUser();
		$this->view('home_index/header', $data);
		$this->view('home_index/setting', $data);
		$this->view('home_index/footer'); 
    }

    public function change_password()
    {
        $id['id_user'] = $_SESSION['id_user'];
        $old_password = $this->input->post('old_password');
        $password = $this->input->post('new_password');
        $confirm_password = $this->input->post('confirm_password');

        try {
            $cekPasswordOld = $this->AdminModel->cekData('user', $id);
            if (password_verify($old_password, $cekPasswordOld['password'])) {
                if ($confirm_password == $password) {
                    $data = [
                        'password' => password_hash($password, PASSWORD_DEFAULT),
                    ];
                    $this->AdminModel->updateData('user', $data, $id);
                    $this->session->set_flashdata('success', 'Password Berhasil Diupdate!, Silahkan Logout Akun Anda dan Login Kembali!');
                    redirect("Donasi/Settings");
                } else {
                    $this->session->set_flashdata('error', 'Password Tidak Sama!');
                    redirect("Donasi/Settings");
                }
            } else {
                $this->session->set_flashdata('error', 'Password Lama Anda Salah!');
                redirect("Donasi/Settings");
            }
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Password Gagal Diupdate!');
            redirect("Donasi/Settings");
        }
    }
}
