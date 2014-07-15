<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model("usuarios");
        $this->load->library("session")
    }

    public function index(){
        $p["msg"] = "";
        if($_POST)
        {
        	$p["msg"] = "Datos incorrectos";
        	$user = $this->usuarios->login($_POST["username"],$_POST["password"]);
        	if($user[0]->id_user)
            {
                //Guardamos sessiones de usuarios
                $data = array("id"=>"1");
                $this->session->set_userdata($data);
                $s =  $this->sesion->userdata("id");
                $p["msg"] = "Correcto";
        		//redirect(base_url()."login/home");
        	}
        }
        $this->load->view('login',$p);
    }

    public function home()
    {
        echo "Login correcto";
    }

   
}
?>