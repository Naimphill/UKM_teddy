<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/index', $data);
        // $this->load->view('_partial/header', $data);
        // $this->load->view('_partial/sidebar', $data);
        // $this->load->view('_partial/navbar', $data);
        // $this->load->view('_partial/footer');
    }
}
