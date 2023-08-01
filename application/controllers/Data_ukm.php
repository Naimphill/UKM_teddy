<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_ukm extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data UKM AMIKOM';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/kelola/ukm', $data);
        // $this->load->view('_partial/header', $data);
        // $this->load->view('_partial/sidebar', $data);
        // $this->load->view('_partial/navbar', $data);
        // $this->load->view('_partial/footer');
    }
}
