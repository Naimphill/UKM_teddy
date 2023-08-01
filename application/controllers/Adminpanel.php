<?php
class Adminpanel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
        $this->cek_login();
    }
    public function cek_login()
    {
        if (empty($this->session->userdata('username'))) {
            redirect('Login');
        }
    }
    public function index()
    {
        // cek login
        $data['content'] = "admin/adminpanel";
        $data['ukm'] = $this->Mcrud->get_all_data('tbl_ukm')->result();
        $data['rencana'] = $this->Mcrud->get_all_data('tbl_rencana_kegiatan')->result();
        $data['kegiatan'] = $this->Mcrud->get_all_data('tbl_kegiatan')->result();
        //load view
        $this->load->view('template_admin', $data);
    }
    public function data_admin()
    {
        // cek login
        $data['content'] = "admin/data_admin";
        $data['admin'] = $this->Mcrud->get_all_data('tbl_admin')->result();
        $data['admin_ukm'] = $this->Mcrud->get_all_data('tbl_admin_ukm')->result();
        $data['ukm'] = $this->Mcrud->get_all_data('tbl_ukm')->result();
        // $data['ukm'] = $this->Mcrud->get_all_data('tbl_kategori')->result();

        //load view
        $this->load->view('template_admin', $data);
    }
    public function data_ukm()
    {
        // cek login
        $data['content'] = "admin/data_ukm";
        $data['ukm'] = $this->Mcrud->get_all_data('tbl_ukm')->result();
        // $data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();

        //load view
        $this->load->view('template_admin', $data);
    }
    public function rencana_kegiatan()
    {
        // cek login
        $data['content'] = "admin/rencana_kegiatan";
        $data['ukm'] = $this->Mcrud->get_all_data('tbl_ukm')->result();
        $data['rencana_kegiatan'] = $this->Mcrud->get_all_data('tbl_rencana_kegiatan')->result();
        $data['kegiatan'] = $this->Mcrud->get_all_data('tbl_kegiatan')->result();

        //load view
        $this->load->view('template_admin', $data);
    }
    public function kegiatan()
    {
        // cek login
        $data['content'] = "admin/kegiatan";
        $data['ukm'] = $this->Mcrud->get_all_data('tbl_ukm')->result();
        $data['rencana_kegiatan'] = $this->Mcrud->get_all_data('tbl_rencana_kegiatan')->result();
        $data['kegiatan'] = $this->Mcrud->get_all_data('tbl_kegiatan')->result();

        //load view
        $this->load->view('template_admin', $data);
    }
    public function add_ukm()
    {
        // get data
        $nm_ukm = $_POST['nm_ukm'];
        // save data
        $datainsert = array(
            'nm_ukm' => $nm_ukm
        );

        // Update data ke tabel 'tbl_seleksi'
        $this->Mcrud->insert('tbl_ukm', $datainsert);
        $this->session->set_flashdata('flash', 'Disimpan');
        redirect('Adminpanel/data_ukm');

    }
    public function edit_ukm()
    {
        // get data
        $id_ukm = $_POST['id_ukm'];
        $nm_ukm = $_POST['nm_ukm'];
        // save data
        $dataupdate = array(
            'nm_ukm' => $nm_ukm
        );

        // Update data ke tabel 'tbl_seleksi'
        $this->Mcrud->update('tbl_ukm', $dataupdate, 'id_ukm', $id_ukm);
        $this->session->set_flashdata('flash', 'Diedit');
        redirect('Adminpanel/data_ukm');
    }
    public function hapus_ukm($id)
    {
        $datawhere = array('id_ukm' => $id);
        $data['ukm'] = $this->Mcrud->hapus_data($datawhere, 'tbl_ukm');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Adminpanel/data_ukm');
    }
    public function edit_rencana()
    {
        // get data
        $id_rencana = $_POST['id_rencana'];
        $status = $_POST['status'];
        if ($status == "Diterima") {
            $id_ukm = $_POST['id_ukm'];
            $id_admin = $this->session->userdata('id_admin');
            $datainsert = array(
                'id_rencana' => $id_rencana,
                'id_ukm' => $id_ukm,
                'id_admin' => $id_admin
            );
            $this->Mcrud->insert('tbl_kegiatan', $datainsert);
        }
        // save data
        $dataupdate = array(
            'status' => $status
        );
        // Update data ke tabel 'tbl_seleksi'
        $this->Mcrud->update('tbl_rencana_kegiatan', $dataupdate, 'id_rencana', $id_rencana);
        $this->session->set_flashdata('flash', 'Diedit');
        redirect('Adminpanel/rencana_kegiatan');

    }


}