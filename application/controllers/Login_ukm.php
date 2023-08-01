<?php
/**
 * 
 */
class Login_ukm extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mulogin');
        $this->load->model('Mcrud');
    }

    public function index()
    {
        //load data

        //load view
        $this->load->view('ukm/login');
    }
    public function aksi_login()
    {
        $this->load->model('Mulogin');
        $u = $_POST['username'];
        $p = md5($_POST['password']);
        $cek = $this->Mulogin->cek_login($u, $p)->num_rows();
        $result = $this->Mulogin->cek_login($u, $p)->result();
        if ($cek == 1) {
            foreach ($result as $sess) {
                // $sess_data['logged_in'] = 'Sudah Login';
                $sess_data['id_admin_ukm'] = $sess->id_admin_ukm;
                $sess_data['username'] = $sess->username;
                $sess_data['id_ukm'] = $sess->id_ukm;
                $this->session->set_userdata($sess_data);
            }

            redirect('Ukm');

        } else {
            $this->session->set_flashdata('flash', 'Username dan atau Password salah');
            redirect('login_ukm');
        }

    }

    public function save_register()
    {
        //post data
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        //save data
        $dataInsert = array(
            'username' => $username,
            'password' => $password,
            'level' => 'user'
        );
        $this->Mcrud->insert('tbl_user', $dataInsert);
        $this->session->set_flashdata('flash', 'Berhasil');

        redirect('login');

    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login_ukm');
    }
}
?>