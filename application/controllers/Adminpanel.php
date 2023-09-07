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
        } elseif ($this->session->userdata('level') == 'Warek') {
            redirect('Warek');
        } elseif ($this->session->userdata('level') == 'Direktur') {
            redirect('Direktur');
        }
    }
    public function index()
    {
        // cek login
        $data['content'] = "admin/adminpanel";
        $data['ukm'] = $this->Mcrud->get_all_data('tbl_ukm')->result();
        $data['rencana'] = $this->Mcrud->get_all_data('tbl_rencana_kegiatan')->result();
        $data['kegiatan'] = $this->Mcrud->get_all_data('tbl_kegiatan')->result();
        $data['persetujuan'] = $this->Mcrud->get_all_data('tbl_persetujuan')->result();
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
        $data['persetujuan'] = $this->Mcrud->get_all_data('tbl_persetujuan')->result();

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
        $data['persetujuan'] = $this->Mcrud->get_all_data('tbl_persetujuan')->result();

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
    // public function hapus_ukm($id)
    // {
    //     $datawhere = array('id_ukm' => $id);
    //     $data['ukm'] = $this->Mcrud->hapus_data($datawhere, 'tbl_ukm');
    //     $this->session->set_flashdata('flash', 'Dihapus');
    //     redirect('Adminpanel/data_ukm');
    // }
    public function hapus_ukm($id)
    {
        try {
            $datawhere = array('id_ukm' => $id);
            $data['ukm'] = $this->Mcrud->hapus_data($datawhere, 'tbl_ukm');

            if ($data['ukm']) {
                $this->session->set_flashdata('flash', 'Data UKM berhasil dihapus.');
            } else {
                // Jika data tidak berhasil dihapus
                $this->session->set_flashdata('flash-error', 'Data UKM masih digunakan di Admin UKM');
            }
        } catch (Exception $e) {
            // Jika terjadi exception atau error lainnya
            $this->session->set_flashdata('flash-error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        redirect('Adminpanel/data_ukm');
    }

    public function edit_rencana()
    {
        // get data
        $id_rencana = $_POST['id_rencana'];
        $status = $_POST['status'];

        if ($status == "Diproses") {
            $dataupdate = array(
                'status' => $status
            );
            $this->Mcrud->update('tbl_rencana_kegiatan', $dataupdate, 'id_rencana', $id_rencana);
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('Adminpanel/rencana_kegiatan');
        } else {
            $ket_tolak = $_POST['ket_tolak'];
            if (empty($ket_tolak)) {
                $this->session->set_flashdata('flash-tolak', 'Keterangan Tolak Harus Diisi');
                redirect('Adminpanel/rencana_kegiatan');
            }
            $dataupdate = array(
                'status' => $status,
                'ket_tolak' => $ket_tolak
            );
            $this->Mcrud->update('tbl_rencana_kegiatan', $dataupdate, 'id_rencana', $id_rencana);
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('Adminpanel/rencana_kegiatan');
        }
    }
    public function hapus_rencana($id)
    {
        try {
            // Mengambil data persetujuan berdasarkan id_rencana
            $query = $this->db->get_where('tbl_persetujuan', array('id_rencana' => $id));
            $result = $query->row();

            if ($result) {
                // Menghapus data persetujuan
                $this->Mcrud->hapus_data(array('id_persetujuan' => $result->id_persetujuan), 'tbl_persetujuan');
            }
            // Menghapus data rencana
            $datawhere = array('id_rencana' => $id);
            $this->Mcrud->hapus_data($datawhere, 'tbl_rencana_kegiatan');

            $this->session->set_flashdata('flash', 'Menghapus Data Rencana.');
        } catch (Exception $e) {
            $this->session->set_flashdata('flash-error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        redirect('Adminpanel/rencana_kegiatan');
    }

    public function add_admin_ukm()
    {
        // get data
        $id_ukm = $_POST['id_ukm'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        // save data
        $datainsert = array(
            'id_ukm' => $id_ukm,
            'username' => $username,
            'password' => $password
        );

        // Update data ke tabel 'tbl_seleksi'
        $this->Mcrud->insert('tbl_admin_ukm', $datainsert);
        $this->session->set_flashdata('flash', 'Disimpan');
        redirect('Adminpanel/data_admin');
    }
    public function hapus_admin_ukm($id)
    {
        $datawhere = array('id_admin_ukm' => $id);
        $data['admin_ukm'] = $this->Mcrud->hapus_data($datawhere, 'tbl_admin_ukm');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Adminpanel/data_admin');
    }
    public function add_admin()
    {
        // get data
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $level = $_POST['level'];
        // save data
        $datainsert = array(
            'username' => $username,
            'password' => $password,
            'level' => $level
        );

        // Update data ke tabel 'tbl_seleksi'
        $this->Mcrud->insert('tbl_admin', $datainsert);
        $this->session->set_flashdata('flash', 'Disimpan');
        redirect('Adminpanel/data_admin');
    }
    public function hapus_admin($id)
    {
        $datawhere = array('id_admin' => $id);
        $data['admin'] = $this->Mcrud->hapus_data($datawhere, 'tbl_admin');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Adminpanel/data_admin');
    }


}