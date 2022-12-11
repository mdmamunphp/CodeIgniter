<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsRegController extends CI_Controller {
	public function register()
	{
		$data['title'] = "Register";
		$this->load->helper('form');
		$this->load->view('instructor/register',$data);
    }
	
	public function register_confirm()
	{


	
		$data['title'] = "register Confirm";

		$this->load->helper('form');

		$this->load->library('form_validation');
		

		$this->form_validation->set_rules('name', 'Full Name', 'required');
		$this->form_validation->set_rules('contact', 'address', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
	//	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE)
		{
			$data['title'] = "register Confirm";
			$this->load->view('instructor/register', $data);


		}
		else{
			$this->load->helper('file');
			
			
			$text = $this->input->post('address');
			




			
			$data = [

				"name" => $this ->input->post("name"),
				"email" => $this ->input->post("email"),
				"short_desc" => $this ->input->post("short_desc"),
				"designation" => $this ->input->post("designation"),
				"contact" => $this ->input->post("contact"),
				"password" => $this ->input->post("password"),
				"images" => fileExtension("pic"),
			//	"address" => $string,

			];
			
			// print_r($data);
			// die();
			
			if($this->om->InsertData("instructor", $data)){

				

				$id = $this->om->Id;
				$this->load->model("custom_model");
                $folder ="instructor";
				textFile($text, $folder, $id);

			
				$this->custom_model->UploadImg(
					"images/instructor/reg",
					"{$id}.png",
					"pic"
	
				);
	
				$this->custom_model->ResizeImg(
					"images/instructor/reg/{$id}.png",
					"./images/instructor/reg/{$id}-re.png",
					"350",
					"150"
				);
				list($width, $height) = getimagesize("images/instructor/reg/{$id}.png");
				
				$x_axis =floor(($width-100)/2);
				$y_axis =floor(($height-50)/2);
	
				$this->custom_model->CropImg(
					"images/instructor/reg/{$id}.png",
					"./images/instructor/reg/{$id}-cr.png",
					"100",
					"50",
					$x_axis,
					$y_axis
				);
	
				$this->custom_model->WaterMark(
					"images/instructor/reg/{$id}.png",
					"images/instructor/reg/{$id}-w.png",
					"images/instructor/reg/logo.jpg"
					
				);
					$text = "images/instructor/reg/{$id}.txt";
	

				$this->session->set_flashdata('s', $text);
				$this->session->set_flashdata('success', 'save successfully');

				redirect(base_url( "instructor/register"), "refresh");

			
			}else{
				$this->session->set_flashdata('success', 'save successfully');
				$data['title'] = "register Confirm";
			$this->load->view('instructor/register', $data);

			}

		
			

			
		
		}
    }

}