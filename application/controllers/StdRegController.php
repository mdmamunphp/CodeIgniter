<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StdRegController extends CI_Controller {
	public function register()
	{
		$data['title'] = "Register";
		$this->load->helper('form');
		$this->load->view('students/register',$data);
    }
	
	public function register_confirm()
	{
		
		$data['title'] = "register Confirm";

		$this->load->helper('form');

		$this->load->library('form_validation');
		

		$this->form_validation->set_rules('fullname', 'Full Name', 'required');
		// $this->form_validation->set_rules('address', 'address', 'required');
		// $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		// $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
	//	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE)
		{

		
			$data['title'] = "register Confirm";
			$this->load->view('students/register', $data);

		}
		else{
			$this->load->helper('file');
			
			
			$text = $this->input->post('address');
			




			
			$data = [

				"name" => $this ->input->post("fullname"),
				"email" => $this ->input->post("email"),
				"contact" => $this ->input->post("contact"),
				"password" => $this ->input->post("password"),
				"images" => fileExtension("pic"),
			//	"address" => $string,

			];
			
			// print_r($data);
			// die();
			if($this->om->InsertData("student", $data)){

				

				$id = $this->om->Id;
				$this->load->model("custom_model");
                $folder ="students";
				textFile($text, $folder, $id);

			
			
			$this->custom_model->UploadImg(
				"images/students",
				"{$id}.png",
				"pic"

			);

			$this->custom_model->ResizeImg(
				"images/students/{$id}.png",
				"./images/students/{$id}-re.png",
				"350",
				"150"
			);
			list($width, $height) = getimagesize("images/students/{$id}.png");
			
			$x_axis =floor(($width-100)/2);
			$y_axis =floor(($height-50)/2);

			$this->custom_model->CropImg(
				"images/students/{$id}.png",
				"./images/students/{$id}-cr.png",
				"100",
				"50",
				$x_axis,
				$y_axis
			);

			$this->custom_model->WaterMark(
				"images/students/{$id}.png",
				"images/students/{$id}-w.png",
				"images/students/logo.jpg"
				
			);
				$text = "images/students/{$id}.txt";

				$this->session->set_flashdata('s', $text);
				$this->session->set_flashdata('success', 'save successfully');

				redirect(base_url( "students/register"), "refresh");

			
			}else{
				$this->session->set_flashdata('success', 'save successfully');
				$data['title'] = "register Confirm";
			$this->load->view('students/register', $data);

			}

		
			

			
		
		}
    }

}