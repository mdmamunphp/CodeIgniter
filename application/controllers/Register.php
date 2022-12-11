<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

  

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
					$this->load->view('front/reg', $data);

				}
				else{

				

					$this->load->helper('file');		
                    // $text = $this->input->post('address');
                  
					$email=$this ->input->post("email");
					$images=$this ->input->post("images");
					
					$data = [

						"name" => $this ->input->post("name"),
						"email" => $this ->input->post("email"),
                        "password" => $this ->input->post("password"),
                        "contact" => $this ->input->post("contact"),
                        "type" => $this ->input->post("type"),
						"images" => fileExtension("pic"),
					//	"address" => $string,

                    ];
				    SendEmail($email,$images);
				  
					// print_r($data);
					// echo $email;
					// die();
					
				
					if($this->om->InsertData("users", $data)){

						
						

						$code = md5($this->om->Id);
						$id = $this->om->Id;

						$this->load->model("custom_model");
						$folder ='admin/txt';
						// textFile($text, $folder, $id);

					
					
					$this->custom_model->UploadImg(
						"users/reg",
						"{$id}.png",
						"pic"

					);

					$this->custom_model->ResizeImg(
						"users/reg/{$id}.png",
						"./users/reg/{$id}-re.png",
						"350",
						"150"
					);
					list($width, $height) = getimagesize("users/reg/{$id}.png");
					
					$x_axis =floor(($width-100)/2);
					$y_axis =floor(($height-50)/2);

					$this->custom_model->CropImg(
						"users/reg/{$id}.png",
						"./users/reg/{$id}-cr.png",
						"100",
						"50",
						$x_axis,
						$y_axis
					);

					$this->custom_model->WaterMark(
						"users/reg/{$id}.png",
						"users/reg/{$id}-w.png",
						"users/reg/logo.jpg"
						
					);
						$text = "users/reg/{$id}.txt"; 

						// $this->session->set_flashdata('s', $text);
						$this->session->set_flashdata('success', 'save successfully');

						redirect(base_url( "front/reg"), "refresh");

					
					}else{
						$this->session->set_flashdata('success', 'save successfully');
						$data['title'] = "register Confirm";
					$this->load->view('front/reg', $data);

					}

				
					

					
				
				}
			}

			//end register
		
		public function students_views()
		{
			
			
			$data['title'] = "students";
			//$data['content'] =$this->load->view('admin/dashboard');
			$students_views=$this->db->query("select * from users where type='3'");

			$data['content'] =$this->load->view('admin/students/students-views' , array("students_views"=>$students_views->result_array()) , true);
			$this->load->view('admin/master', $data, false);

		}
		public function instructor_views()
		{
			
			
			$data['title'] = "students";
			//$data['content'] =$this->load->view('admin/dashboard');
			$instructor_views=$this->db->query("select * from users where type='2'");

			$data['content'] =$this->load->view('admin/instructor/instructor-views' , array("instructor_views"=>$instructor_views->result_array()) , true);
			$this->load->view('admin/master', $data, false);

		}

		public function instructor_edit($id)
		{
			
			
			$data['title'] = "instructor";
			//$data['content'] =$this->load->view('admin/dashboard');
			$instructor_edit=$this->db->query("select * from users where id='$id'");

			$data['content'] =$this->load->view('admin/instructor/instructor-edit' , array("instructor"=>$instructor_edit->row_array()) , true);
			$this->load->view('admin/master', $data, false);

		}
		public function students_edit($id)
		{
			
			
			$data['title'] = "students";
			//$data['content'] =$this->load->view('admin/dashboard');
			$students_edit=$this->db->query("select * from users where id='$id'");

			$data['content'] =$this->load->view('admin/students/students-edit' , array("students"=>$students_edit->row_array()) , true);
			$this->load->view('admin/master', $data, false);

		}

			public function users_update()
			{
				$where = $this ->input->post("id");
				
              
				$data['title'] = "register Confirm";

				$this->load->helper('form');

				$this->load->library('form_validation');
				

				$this->form_validation->set_rules('name', 'Full Name', 'required');
				// $this->form_validation->set_rules('contact', 'address', 'required');
				// $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
				// $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
			//	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

				if ($this->form_validation->run() == FALSE)
				{
					// print_r($_POST);
					// // echo $email;
					//  die();
					$where = $this ->input->post("id");
					//echo $where;
					$data['title'] = "register Confirm";
					redirect(base_url( "admin/instructor-views"), "refresh");

				}
				else{

				

					$this->load->helper('file');		
                    // $text = $this->input->post('address');
                  
					$email=$this ->input->post("email");
					$images=$this ->input->post("images");
					$where = $this ->input->post("id");

				//	echo $sid;
					$data = [

						"name" => $this ->input->post("name"),
						"last_name" => $this ->input->post("last_name"),
						"email" => $this ->input->post("email"),
                        "password" => $this ->input->post("password"),
                        "contact" => $this ->input->post("contact"),
                        "type" => $this ->input->post("type"),
						"images" => fileExtension("images"),
					//	"address" => $string,

                    ];
				//    SendEmail($email,$images);
				  
				
					
				
					if($this->om->UpdateData("users",  $data, ['id' => $where])){

						// print_r($data);
						// // echo $email;
						//  die();
						

						$code = md5($this->om->Id);
						$id = $this->om->Id;

						$this->load->model("custom_model");
						$folder ='admin/txt';
						// textFile($text, $folder, $id);

					
					
					$this->custom_model->UploadImg(
						"users/reg",
						"{$id}.png",
						"pic"

					);

				

				
						$text = "users/reg/{$id}.txt"; 

						// $this->session->set_flashdata('s', $text);
						$this->session->set_flashdata('success', 'save successfully');

						redirect(base_url( "admin/instructor-edit/{$where}"), "refresh");

					
					}else{
						$this->session->set_flashdata('success', 'save successfully');
						$data['title'] = "register Confirm";
					$this->load->view("admin/instructor-edit/{$where}", $data);

					}

				
					

					
				
				}
			}

			public function instructor_delete($where)
			{
				
				$data['title'] = "admin";
				//$data['content'] =$this->load->view('admin/dashboard');
			//	$where = $this->uri->segment(3);
			
				
				if($this->om->DeleteData("users", ['id' =>$where])){
				
					$data['content'] =$this->load->view('admin/instructor/instructor-views' , '' , true);
					$this->load->view('admin/master', $data, false);
		
				}
			
		 
		
				//print_r($data);
				// die();
				//$data['content'] =$this->load->view('admin/course-edit' , $data , true);
				//$this->load->view('admin/master', $data, false);
		
			}
			public function students_delete($where)
			{
				
				$data['title'] = "admin";
				//$data['content'] =$this->load->view('admin/dashboard');
			//	$where = $this->uri->segment(3);
			
				
				if($this->om->DeleteData("users", ['id' =>$where])){
				
					$data['content'] =$this->load->view('admin/students/students-views' , '' , true);
					$this->load->view('admin/master', $data, false);
		
				}
			
		
		
				//print_r($data);
				// die();
				//$data['content'] =$this->load->view('admin/course-edit' , $data , true);
				//$this->load->view('admin/master', $data, false);
		
			}
		




	}

