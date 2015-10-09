<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('userModel');
        
    }
    
    public function index()
    {  
        if (!$this->is_logged_in()) {
            $this->load->view('login');
        };
    }
    
    public function loginCheck()
    {
        
        $is_user = $this->userModel->is($this->input->post('username'),$this->input->post('password'));

        if($is_user)
        {
            $username = $this->input->post('username');
            $id = $this->userModel->get_id($username);
            $nama = $this->userModel->get_nama($username);

            $data = array(
                'username' => $username,
                'id' => $id,
                'is_logged_in' => TRUE,
                'nama' => $nama
            );

            $this->session->set_userdata($data);
            
            redirect('Dokter');

        }else{
            redirect('Login/error');
        }
        
    }
    
    public function error()
    {
        $this->load->view('login',array('error' => TRUE));
    }
    
    public function logout()
    {
        if (!$this->is_logged_in()) 
        {
            redirect('login');
        } else 
        {
            $this->session->set_userdata(array('is_logged_in' => FALSE));
            $this->session->sess_destroy();
            $this->load->view('login');
        }
    }
    
    private function is_logged_in()
    {
        return $this->session->userdata('is_logged_in');
    }
    
    private function json_response($successful, $message){
        echo json_encode(array(
            'isSuccessful' => $successful,
            'message' => $message
        )); 
    }
}
