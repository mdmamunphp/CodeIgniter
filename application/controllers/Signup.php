<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
       // echo "ok";
        $this->load->view('admin/signup_view');

        
    }

    public function register_confirm()
    {
        $data['title'] = "singup_view";

        $this->load->helper('form');

        $this->load->library('form_validation');
        

        $this->form_validation->set_rules('name', 'Name', 'required');
        // $this->form_validation->set_rules('ad', 'address', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
    //	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE)
        {
            
            $this->load->view('admin/singup_view');

        }
        else{

        
                $name = $this ->input->post("name" , true);
                $email = $this ->input->post("email");
                $password = $this ->input->post("password");
                $passwordf = $this ->input->post("confirm_password");
                
        
        
            if($password == $passwordf){

                

                $this->db->query("insert into users (name,email,password) values ('$name', '$email', '$password')");
            
        
            
            }else{
                
            $this->load->view('admin/singup_view');

            }

        
            

            
        
        }
    }
    
}
