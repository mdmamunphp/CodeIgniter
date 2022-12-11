<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {


	public function index()
	{
		$data['title'] = "Login";
		$this->load->view('admin/login',$data);
    }
    

	public function register()
	{
		$data['title'] = "Register";
		$this->load->helper('form');
		$this->load->view('admin/register',$data);
    }
	
	public function register_confirm()
	{
		$data['title'] = "register Confirm";

		$this->load->helper('form');

		$this->load->library('form_validation');
		

		$this->form_validation->set_rules('fullname', 'Full Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
	//	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE)
		{
			$data['title'] = "register Confirm";
			$this->load->view('admin/register', $data);

		}
		else{

			$data = [

				"name" => $this ->input->post("fullname"),
				"email" => $this ->input->post("email"),
				"password" => $this ->input->post("password"),
				"images" => fileExtension("pic"),

			];
			
			if($this->om->InsertData("users", $data)){

				$id = $this->om->Id;
				$this->load->model("custom_model");
			
			
			$this->custom_model->UploadImg(
				"images/users",
				"{$id}.png",
				"pic"

			);

			$this->custom_model->ResizeImg(
				"images/users/{$id}.png",
				"./images/users/{$id}-re.png",
				"350",
				"150"
			);
			list($width, $height) = getimagesize("images/users/{$id}.png");
			$x_axis =floor(($width-100)/2);
			$y_axis =floor(($height-50)/2);
			$this->custom_model->CropImg(
				"images/users/{$id}.png",
				"./images/users/{$id}-cr.png",
				"100",
				"50",
				$x_axis,
				$y_axis
			);

			$this->custom_model->WaterMark(
				"images/users/{$id}.png",
				"images/users/{$id}-w.png",
				"images/users/logo.jpg"
				
			);

				$this->session->set_flashdata('success', 'save successfully');

				redirect(base_url( "admin/register"), "refresh");
			echo "successfulley";
			}else{
				$this->session->set_flashdata('success', 'save successfully');
				$data['title'] = "register Confirm";
			$this->load->view('admin/register', $data);

			}

		
			

			
		
		}
    }
};

