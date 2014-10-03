<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model("usuarios");
        $this->load->helper(array("form"));
    }

    public function index(){
        if($_POST)
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'email', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database');
            if($this->form_validation->run() == TRUE)
            {
             redirect('login/home', 'refresh');
            }
        }
        $this->load->view('login');
    }

    function check_database($password)
    {
        $username = $this->input->post('username');
        $result = $this->usuarios->login($username, $password);
        if($result)
        {
            $sess_array = array();
            foreach($result as $row)
            {
                $sess_array = array(
                    'id' => $row->id_user,
                    'username' => $row->email
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Usuario y/p CPntraseña invalidos.');
            return false;
        }
    }

    public function home()
    {
        if($this->session->userdata('logged_in'))
        {
            $data = array("username"=>$this->session->userdata["logged_in"]["username"]);
            $this->load->view("home",$data);
        }else
        {
            redirect("login","refresh");
        }      
    }

    function logout()
    {
        $this->session->unset_userdata('logged_in');
        redirect('login', 'refresh');
    }


   
}
?>