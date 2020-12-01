<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class setting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form', 'url', 'html'));
        $this->load->library(array('form_validation','session'));
        $this->load->model('crud');
    }
	
	public function index()
	{
		if($this->session->userdata('status') == 'login'){
            redirect('setting/article');
        } $this->load->view('home/login');
	}
	
	public function loginAksi()
    {
		$this->form_validation->set_rules('username','username','required',array('required' => 'Username wajib diisi'));
        $this->form_validation->set_rules('password','password','required|trim',array('required' => 'Password wajib diisi'));

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where = [ 
            'username'  => $username,
        ];

        $cekQuery = $this->crud->loginQuery($where)->row();

        if($cekQuery){
            
            $data = $cekQuery;

		    $truePass       = password_verify($password, $data->password);
            $roleAccess     = $data->role;

            if($truePass){

                $sess_data['id']        = $data->id;
                $sess_data['username']  = $data->username;
                $sess_data['email']     = $data->email;
                $sess_data['role']      = $data->role;
                $sess_data['status']    = "login";

                $this->session->set_userdata($sess_data);

                if($roleAccess == 1111){
                    //admin
                    redirect('setting/article');
                    return 0;
                } else if($roleAccess == 2222){
                    //user biasa
                    redirect('setting/article');
                    return 0;
                }
            } else {
                echo "password yang diinputkan salah";
                return 0;
            }

        } else {
            echo "tidak ada akun yang di maksud";
            return 0;
        }  
    }

	public function article()
    {
        if($this->session->userdata("status") == "login"){

            $data['article'] = $this->crud->getArticle()->result();

            $this->load->view('home/article', $data);            
        } else {
            redirect('setting', 'refresh');
        }
	}

	public function TambahArticle()
    {
        if($this->session->userdata("status") == "login"){
            $this->load->view('home/TambahArticle', array('error' => ' '));
        } else {
            redirect('setting', 'refresh');
        }
	}

	public function AksitambahArticle()
	{
		$this->form_validation->set_rules('title','Title','required',array('required' => 'Judul wajib diisi'));
        $this->form_validation->set_rules('article','Article','required',array('required' => 'Artikel Wajib di Isi'));
	}
	
	public function updateArticle()
    {
        if($this->session->userdata("status") == "login"){
            $this->load->view('home/updateArticle', array('error' => ' '));
        } else {
            redirect('setting', 'refresh');
        }
	}
	
	public function HapusArticle()
    {
        if($this->session->userdata("status") == "login"){
            $this->load->view('home/HapusArticle', array('error' => ' '));
        } else {
            redirect('setting', 'refresh');
        }
    }

	public function logout()
    {
        $this->session->sess_destroy();
        redirect('setting', 'refresh');
    }
}
