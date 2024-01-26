<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Anda Harus Login Dulu</div>');
            redirect('auth');
        }
        $this->load->library('form_validation');
        $this->load->model('m_tamu'); //Load Model m_crud
        $this->load->helper('url'); //load helper url
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['isi'] = $this->m_tamu->tamu_list()->result_array();
        $this->load->view('dashboard', $data);
    }

    public function tambah()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $komentar = $this->input->post('komentar');

        $data = array(
            'id_tamu' => '',
            'nama' => $nama,
            'email' => $email,
            'komentar' => $komentar
        );
        $this->m_tamu->input_data($data, 'bukutamu');
        redirect('user');
    }
    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['isi'] = $this->m_tamu->tamu_list()->result_array();
        $this->load->view('dashboard', $data);
    }
    public function user()
    {
        $data['title'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->db->get('user')->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('user', $data);
        } else {
            $this->db->insert('user', [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            ]);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success!</div>');
            redirect('user');
        }
    }
    public function deleteUser($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->m_tamu->delete_user($id);
        redirect('user');
    }
    public function editUser()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $password = $this->input->post('password');
        $this->db->set('name', $name);
        $this->db->set('password', $password);
        $this->db->where('id', $id);
        $this->db->update('user');
        redirect('user');
    }
}
