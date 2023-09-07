<?php
class Warek extends CI_Controller
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
        } elseif ($this->session->userdata('level') == 'Direktur') {
            redirect('Direktur');
        } elseif ($this->session->userdata('level') == 'Kemahasiswaan') {
            redirect('Adminpanel');
        }
    }
    public function index()
    {
        // cek login
        $data['content'] = "admin/warek";
        $data['ukm'] = $this->Mcrud->get_all_data('tbl_ukm')->result();
        $data['rencana'] = $this->Mcrud->get_all_data('tbl_rencana_kegiatan')->result();
        $data['kegiatan'] = $this->Mcrud->get_all_data('tbl_kegiatan')->result();
        $data['persetujuan'] = $this->Mcrud->get_all_data('tbl_persetujuan')->result();
        //load view
        $this->load->view('template_direktur', $data);
    }
    public function rencana_kegiatan()
    {
        // cek login
        $data['content'] = "admin/ren_kegiatan_direk";
        $data['ukm'] = $this->Mcrud->get_all_data('tbl_ukm')->result();
        $data['rencana_kegiatan'] = $this->Mcrud->get_all_data('tbl_rencana_kegiatan')->result();
        $data['kegiatan'] = $this->Mcrud->get_all_data('tbl_kegiatan')->result();
        $data['persetujuan'] = $this->Mcrud->get_all_data('tbl_persetujuan')->result();

        //load view
        $this->load->view('template_direktur', $data);
    }
    public function edit_rencana()
    {
        // get data
        $id_rencana = $_POST['id_rencana'];
        $status = $_POST['status'];
        $keterangan = $_POST['keterangan'];
        $id_persetujuan = $_POST['id_persetujuan'];
        if (empty($status)) {
            $this->session->set_flashdata('flash-tolak', 'Data Status Harus diisi');
            redirect('Warek/rencana_kegiatan');
        }
        if ($status == "Diterima Warek") {
            $id_ukm = $_POST['id_ukm'];
            $id_admin = $this->session->userdata('id_admin');
            $allert = 'Diterima';
            $datainsert = array(
                'id_rencana' => $id_rencana,
                'id_ukm' => $id_ukm,
                'id_admin' => $id_admin
            );
            $this->Mcrud->insert('tbl_kegiatan', $datainsert);
            $dataupdate = array(
                'status' => 'Diterima'
            );
            $this->Mcrud->update('tbl_rencana_kegiatan', $dataupdate, 'id_rencana', $id_rencana);
            $data_update = array(
                'status' => $status,
                'keterangan' => $keterangan
            );
            $this->Mcrud->update('tbl_persetujuan', $data_update, 'id_persetujuan', $id_persetujuan);
        } elseif ($status == "Ditolak Warek") {
            if (empty($keterangan)) {
                $this->session->set_flashdata('flash-tolak', 'Keterangan Tolak Harus Diisi');
                redirect('Warek/rencana_kegiatan');
            }
            $dataupdate = array(
                'status' => 'Ditolak',
                'ket_tolak' => $keterangan
            );
            $this->Mcrud->update('tbl_rencana_kegiatan', $dataupdate, 'id_rencana', $id_rencana);
            $data_update = array(
                'status' => $status,
                'keterangan' => $keterangan
            );
            $this->Mcrud->update('tbl_persetujuan', $data_update, 'id_persetujuan', $id_persetujuan);
            $allert = 'Ditolak';
        }

        $this->session->set_flashdata('flash', $allert);
        redirect('Warek/rencana_kegiatan');
    }

}