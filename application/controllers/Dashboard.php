<?php
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
    }
    public function index()
    {
        // cek login
        $data['ukm'] = $this->Mcrud->get_all_data('tbl_ukm')->result();
        $data['rencana'] = $this->Mcrud->get_all_data('tbl_rencana_kegiatan')->result();
        $data['kegiatan'] = $this->Mcrud->get_all_data('tbl_kegiatan')->result();
        //load view
        $this->load->view('dashboard', $data);
    }
    public function info_ukm()
    {
        $id_ukm = $this->session->userdata('id_ukm');
        $datawhere = array('id_ukm' => $id_ukm);
        $data['content'] = "ukm/index";
        $data['ukm'] = $this->Mcrud->get_by_id('tbl_ukm', $datawhere)->row_object();
        // cek login
        $data['content'] = "ukm/info_ukm";
        $data['data_ukm'] = $this->Mcrud->get_all_data('tbl_ukm')->result();
        $data['rencana'] = $this->Mcrud->get_all_data('tbl_rencana_kegiatan')->result();
        $data['kegiatan'] = $this->Mcrud->get_all_data('tbl_kegiatan')->result();

        //load view
        $this->load->view('template_ukm', $data);
    }
    public function rencana_kegiatan()
    {
        $id_ukm = $this->session->userdata('id_ukm');
        $datawhere = array('id_ukm' => $id_ukm);
        $data['content'] = "ukm/index";
        $data['ukm'] = $this->Mcrud->get_by_id('tbl_ukm', $datawhere)->row_object();
        // cek login
        $data['content'] = "ukm/rencana_kegiatan";
        $data['data_ukm'] = $this->Mcrud->get_all_data('tbl_ukm')->result();
        $data['rencana_kegiatan'] = $this->Mcrud->get_all_data('tbl_rencana_kegiatan')->result();
        $data['kegiatan'] = $this->Mcrud->get_all_data('tbl_kegiatan')->result();

        //load view
        $this->load->view('template_ukm', $data);
    }
    public function kegiatan()
    {
        $id_ukm = $this->session->userdata('id_ukm');
        $datawhere = array('id_ukm' => $id_ukm);
        $data['content'] = "ukm/index";
        $data['ukm'] = $this->Mcrud->get_by_id('tbl_ukm', $datawhere)->row_object();
        // cek login
        $data['content'] = "ukm/kegiatan";
        $data['data_ukm'] = $this->Mcrud->get_all_data('tbl_ukm')->result();
        $data['rencana_kegiatan'] = $this->Mcrud->get_all_data('tbl_rencana_kegiatan')->result();
        $data['kegiatan'] = $this->Mcrud->get_all_data('tbl_kegiatan')->result();

        //load view
        $this->load->view('template_ukm', $data);
    }
    public function add_rencana()
    {
        // get data
        $id_ukm = $_POST['id_ukm'];
        $judul = $_POST['judul'];
        $waktu = $_POST['waktu'];
        $tempat = $_POST['tempat'];
        $deskripsi = $_POST['deskripsi'];
        $tgl_kirim = date("Y-m-d H:i:s");
        $status = "Menunggu";
        // save data

        //setting file foto
        $data_file = $_FILES['file'];
        $config['file_name'] = time() . $data_file['name'];
        $config['upload_path'] = './upload_file/';
        $config['allowed_types'] = 'pdf|PDF';
        $config['max_size'] = 10240;
        $this->load->library('upload', $config);

        //foto
        $this->upload->do_upload('file');
        $data = $this->upload->data();
        $file = $data['file_name'];

        $datainsert = array(
            'id_ukm' => $id_ukm,
            'judul' => $judul,
            'waktu' => $waktu,
            'tempat' => $tempat,
            'deskripsi' => $deskripsi,
            'tgl_kirim' => $tgl_kirim,
            'status' => $status,
            'file' => $file
        );

        // Update data ke tabel 'tbl_seleksi'
        $this->Mcrud->insert('tbl_rencana_kegiatan', $datainsert);
        $this->session->set_flashdata('flash', 'Disimpan');
        redirect('Ukm/rencana_kegiatan');

    }
    public function hapus_rencana($id)
    {
        $datawhere = array('id_rencana' => $id);
        $data['ukm'] = $this->Mcrud->hapus_data($datawhere, 'tbl_rencana_kegiatan');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Ukm/rencana_kegiatan');
    }

}