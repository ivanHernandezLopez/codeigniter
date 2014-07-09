<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model("usuarios");
    }

    public function index(){
        $p["msg"] = "";
        if($_POST)
        {
        	$result = $this->usuarios->Login($_POST["username"],$_POST["password"]);
        	if($result){
        		$p["msg"] = '<font color=red>Correct access.</font><br />';
        	}else{
        		$p["msg"] = '<font color=red>Invalid username and/or password.</font><br />';
        	}
        }
        $this->load->view('login',$p);
    }

   
}
?>