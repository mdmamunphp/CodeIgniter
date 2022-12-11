<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminRegController extends CI_Controller {
	

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
				$this->form_validation->set_rules('address', 'address', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
				$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
			//	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

				if ($this->form_validation->run() == FALSE)
				{
					$data['title'] = "register Confirm";
					$this->load->view('admin/register', $data);

				}
				else{

					

					$this->load->helper('file');		
					$text = $this->input->post('address');
					
					
					$data = [

						"name" => $this ->input->post("fullname"),
						"email" => $this ->input->post("email"),
						"password" => $this ->input->post("password"),
						"images" => fileExtension("pic"),
					//	"address" => $string,

					];
				
					if($this->om->InsertData("admin", $data)){
 
						

						$id = $this->om->Id;
						$this->load->model("custom_model");
						$folder ='admin/txt';
						textFile($text, $folder, $id);

					
					
					$this->custom_model->UploadImg(
						"images/admin/reg",
						"{$id}.png",
						"pic"

					);

					$this->custom_model->ResizeImg(
						"images/admin/reg/{$id}.png",
						"./images/admin/reg/{$id}-re.png",
						"350",
						"150"
					);
					list($width, $height) = getimagesize("images/admin/reg/{$id}.png");
					
					$x_axis =floor(($width-100)/2);
					$y_axis =floor(($height-50)/2);

					$this->custom_model->CropImg(
						"images/admin/reg/{$id}.png",
						"./images/admin/reg/{$id}-cr.png",
						"100",
						"50",
						$x_axis,
						$y_axis
					);

					$this->custom_model->WaterMark(
						"images/admin/reg/{$id}.png",
						"images/admin/reg/{$id}-w.png",
						"images/admin/reg/logo.jpg"
						
					);
						$text = "images/admin/reg/{$id}.txt"; 

						$this->session->set_flashdata('s', $text);
						$this->session->set_flashdata('success', 'save successfully');

						redirect(base_url( "admin/register"), "refresh");

					
					}else{
						$this->session->set_flashdata('success', 'save successfully');
						$data['title'] = "register Confirm";
					$this->load->view('admin/register', $data);

					}

				
					

					
				
				}
			}

/////////////////////************POST COURSE *********************************** */
					
			public function post_confirm()
			{
				$data['title'] = "post Confirm";
				
				$this->load->helper('form');

				$this->load->library('form_validation');
				
			

				 $this->form_validation->set_rules('title', 'title', 'required');
				// $this->form_validation->set_rules('address', 'address', 'required');
				// $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
				// $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
			//	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

				if ($this->form_validation->run() == FALSE)
				{
					$id = $this->session->userdata("id");
					$data['title'] = "register Confirm";
					// $results = $this->om->view('*', "users", ['type' => 2]);
					
					$this->load->view('admin/course-post', $data);
				
					//echo $id;

				}
				else{
					$this->load->helper('file');
					
					
					$id = $this->session->userdata("id");
					$text = $this->input->post('description');
					
						
						
					$data = [

						"title" => $this->input->post("title"),
						 "price" => $this->input->post("price"),
						 "discount" => $this->input->post("discount"),
						 "start_time " => $this->input->post("start_time"),
						 "duration" => $this->input->post("duration"),
						 "reg_last_date" => $this ->input->post("reg_last_date"),
					    "requirement" => $this ->input->post("requirement"),				
						"category_id" => $this ->input->post("category_id"),
						"instructor_id " => $this ->input->post("instructor_id"),
						"admin_id" => $id,
						"images" => fileExtension("pic"),

					];
					
					if($this->om->InsertData("post_course", $data)){

					//	print_r($data); 
						
							$ext = $data['images'];
						//	echo $ext;
						 $id = $this->om->Id;

						$this->load->model("custom_model");

						 $folder ='course_post';
						textFile($text, $folder, $id);

				
					
					$this->custom_model->UploadImg(
						"images/course_post/reg",
						"{$id}.{$ext}",
						"pic"

					);
	
					$this->custom_model->ResizeImg(
						"images/course_post/reg/{$id}.{$ext}",
						"./images/course_post/reg/{$id}-re.{$ext}",
						"350",
						"150"
					);
					list($width, $height) = getimagesize("images/course_post/reg/{$id}.{$ext}");
					
					$x_axis =floor(($width-100)/2);
					$y_axis =floor(($height-50)/2);

					$this->custom_model->CropImg(
						"images/course_post/reg/{$id}.{$ext}",
						"./images/course_post/reg/{$id}-cr.{$ext}",
						"100",
						"50",
						$x_axis,
						$y_axis
					);

					$this->custom_model->WaterMark(
						"images/course_post/reg/{$id}.{$ext}",
						"images/course_post/reg/{$id}-w.{$ext}",
						"images/course_post/reg/logo.jpg"
						
					);
						$text = "images/course_post/reg/{$id}.txt"; 

						$this->session->set_flashdata('s', $text);
						$this->session->set_flashdata('success', 'save successfully');

						redirect(base_url( "admin/course-post"), "refresh");

					
					}else{
						$this->session->set_flashdata('success', 'save successfully');
						$data['title'] = "register Confirm";
					$this->load->view('admin/course-post', $data);

					}

				
					

					
				
				}
			}

			////////////////////end course post /////////////////////

			
/////////////////////************question post *********************************** */
					
public function questionpost_confirm()
{
	$data['title'] = "post Confirm";
	
	$this->load->helper('form');

	$this->load->library('form_validation');
	


	 $this->form_validation->set_rules('title', 'title', 'required');
	// $this->form_validation->set_rules('address', 'address', 'required');
	// $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	// $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
//	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

	if ($this->form_validation->run() == FALSE)
	{
		$id = $this->session->userdata("id");
		$data['title'] = "register Confirm";
		$this->load->view('admin/question-post', $data);
	
		//echo $id;

	}
	else{
		$this->load->helper('file');
		
		
		$id = $this->session->userdata("id");
		$text = $this->input->post('description');
		
			
			
		$data = [

			"title" => $this->input->post("title"),
			 "choose_1" => $this->input->post("choose_1"),
			 "choose_2" => $this->input->post("choose_2"),
			 "choose_3 " => $this->input->post("choose_3"),
			 "choose_4" => $this->input->post("choose_4"),
			 "correct" => $this ->input->post("correct"),
						
			"category_id" => $this ->input->post("category_id"),
			//"instructor_id" => $id,
			"admin_id" => $id,
			"images" => fileExtension("pic"),

		];
		
	//	print_r($data);
	//	die();
		if($this->om->InsertData("question", $data)){


		//	print_r($data);
		//	die();
				$ext = $data['images'];
				echo $ext;
			 $id = $this->om->Id;

			$this->load->model("custom_model");

			 $folder ='question_post/txt';

			textFile($text, $folder, $id);

	
		
		$this->custom_model->UploadImg(
			"images/course_post/reg",
			"{$id}.{$ext}",
			"pic"

		);

		$this->custom_model->ResizeImg(
			"images/course_post/reg/{$id}.{$ext}",
			"./images/course_post/reg/{$id}-re.{$ext}",
			"350",
			"150"
		);
		list($width, $height) = getimagesize("images/course_post/reg/{$id}.{$ext}");
		
		$x_axis =floor(($width-100)/2);
		$y_axis =floor(($height-50)/2);

		$this->custom_model->CropImg(
			"images/course_post/reg/{$id}.{$ext}",
			"./images/course_post/reg/{$id}-cr.{$ext}",
			"100",
			"50",
			$x_axis,
			$y_axis
		);

		$this->custom_model->WaterMark(
			"images/course_post/reg/{$id}.{$ext}",
			"images/course_post/reg/{$id}-w.{$ext}",
			"images/course_post/reg/logo.jpg"
			
		);
			$text = "images/question_post/{$id}.txt"; 

			$this->session->set_flashdata('s', $text);
			$this->session->set_flashdata('success', 'save successfully');

			redirect(base_url( "admin/question-post"), "refresh");

		
		}else{
			$this->session->set_flashdata('success', 'save successfully');
			$data['title'] = "register Confirm";
		$this->load->view('admin/question-post', $data);

		}

	
		

		
	
	}
}

/////////////end question ////////////////
			
/////////////////////************categories post *********************************** */
					
public function categoriespost_confirm()
{
	$data['title'] = "post Confirm";
	
	$this->load->helper('form');

	$this->load->library('form_validation');
	


	 $this->form_validation->set_rules('name', 'name', 'required');
	// $this->form_validation->set_rules('address', 'address', 'required');
	// $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	// $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
//	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

	if ($this->form_validation->run() == FALSE)
	{
		$id = $this->session->userdata("id");
		$data['title'] = "register Confirm";
		$this->load->view('admin/categories-post', $data);
	
		//echo $id;

	}
	else{
		$this->load->helper('file');
		
		
		$id = $this->session->userdata("id");
		$text = $this->input->post('description');
		
			
			
		$data = [

			"name" => $this->input->post("name"),
	
			

		];
		
	//	print_r($data);
	//	die();
		if($this->om->InsertData("category", $data)){


			//print_r($data);
			//die();
				
			 $id = $this->om->Id;

			$this->load->model("custom_model");

			 $folder ='question_post/txt';

			textFile($text, $folder, $id);

	
	

	

			$text = "images/question_post/{$id}.txt"; 

			$this->session->set_flashdata('s', $text);
			$this->session->set_flashdata('success', 'save successfully');

			redirect(base_url( "admin/categories-post"), "refresh");

		
		}else{
			$this->session->set_flashdata('success', 'save successfully');
			$data['title'] = "register Confirm";
		$this->load->view('admin/categories-post', $data);

		}

	
		

		
	
	}
}

/////////////end categories ////////////////


/////////////////////************tags post *********************************** */
					
public function tags_confirm()
{
	$data['title'] = "post Confirm";
	
	$this->load->helper('form');

	$this->load->library('form_validation');
	


	 $this->form_validation->set_rules('name', 'name', 'required');
	// $this->form_validation->set_rules('address', 'address', 'required');
	// $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	// $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
//	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

	if ($this->form_validation->run() == FALSE)
	{
		$id = $this->session->userdata("id");
		$data['title'] = "register Confirm";
		$this->load->view('admin/tags', $data);
	
		//echo $id;

	}
	else{
		$this->load->helper('file');
		
		
		$id = $this->session->userdata("id");
		
		
			
			
		$data = [

			"name" => $this->input->post("name")	
			

		];
		
	//	print_r($data);
	//	die();
		if($this->om->InsertData("tags", $data)){


			//print_r($data);
			//die();
				
			 $id = $this->om->Id;

			$this->load->model("custom_model");

		
			//$this->session->set_flashdata('s', $text);
			$this->session->set_flashdata('success', 'save successfully');

			redirect(base_url( "admin/tags"), "refresh");

		
		}else{
			$this->session->set_flashdata('success', 'save successfully');
			$data['title'] = "register Confirm";
		$this->load->view('admin/tags', $data);

		}

	
		

		
	
	}
}

/////////////end tags ////////////////


			
/////////////////////************lession post *********************************** */
					
public function sectionpost_confirm()
{
	$data['title'] = "post Confirm";
	
	$this->load->helper('form');

	$this->load->library('form_validation');
	


	 $this->form_validation->set_rules('title', 'title', 'required');
	// $this->form_validation->set_rules('address', 'address', 'required');
	// $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	// $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
//	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

	if ($this->form_validation->run() == FALSE)
	{
		$id = $this->session->userdata("id");
		$data['title'] = "register Confirm";
		$this->load->view('admin/question-post', $data);
	
		//echo $id;

	}
	else{
		$this->load->helper('file');
		
		
		$id = $this->session->userdata("id");
		$text = $this->input->post('description');
	
		$data = [

			"title" => $this->input->post("title"),
			
			 "course_id" => $this->input->post("course_id"),			
						
			"category_id" => $this ->input->post("category_id"),
			//"instructor_id" => $id,
			"admin_id" => $id,
		

			"preview" => fileExt("preview")
			


		];

		// print_r($data);
		// 	die();
	
		if($this->om->InsertData("section", $data)){


	
	
				$ext = $data['preview'];
		
			 $id = $this->om->Id;

			$this->load->model("custom_model");

		//	 $folder ='question_post/txt';

		//	textFile($text, $folder, $id);

	
		
		// $this->custom_model->UploadImg(
		// 	"images/course_post/reg",
		// 	"{$id}.{$ext}",
		// 	"pic"

		// );

		

		$this->custom_model->UploadImg(
			"images/course_post",
			"{$id}.{$ext}",
			"preview"

		);

	//	print_r($data);
	//		die();
	
	

		
			$text = "images/question_post/{$id}.txt"; 

			$this->session->set_flashdata('s', $text);
			$this->session->set_flashdata('success', 'save successfully');

			redirect(base_url( "admin/section-post"), "refresh");

		
		}else{
			$this->session->set_flashdata('success', 'save successfully');
			$data['title'] = "register Confirm";
		$this->load->view('admin/section-post', $data);

		}

	
		

		
	
	}
}

/////////////end lession ////////////////


/////////////////////************section post *********************************** */
					
public function lessionpost_confirm()
{
	$data['title'] = "post Confirm";
	
	$this->load->helper('form');

	$this->load->library('form_validation');
	


	 $this->form_validation->set_rules('title', 'title', 'required');
	// $this->form_validation->set_rules('address', 'address', 'required');
	// $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	// $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
//	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

	if ($this->form_validation->run() == FALSE)
	{
		$id = $this->session->userdata("id");
		$data['title'] = "register Confirm";
		$this->load->view('admin/question-post', $data);
	
		//echo $id;

	}
	else{
		$this->load->helper('file');
		
		
		$id = $this->session->userdata("id");
		$text = $this->input->post('description');
		
		//	$p=$this->input->post("preview");
			$f =$this->input->post("files");
			
		$data = [

			"title" => $this->input->post("title"),
			
		//	 "course_id" => $this->input->post("course_id"),			
						
			"category_id" => $this ->input->post("category_id"),
			"duration" => $this ->input->post("duration"),
			//"instructor_id" => $id,
			"admin_id" => $id,
		//	"preview" => $p,
		//	"files" =>  $f,
		//	"upvideo" =>  $this->input->post("upvideo"),

			"preview" => fileExt("preview"),
			 "files"  => fileExt("files"),
			"upvideo" => fileExt("upvideo")


		];

		// print_r($data);
		// 	die();
	
		if($this->om->InsertData("lession", $data)){


	
				$ext = $data['preview'];
		
			 $id = $this->om->Id;

			$this->load->model("custom_model");

		//	 $folder ='question_post/txt';

		//	textFile($text, $folder, $id);

	
		
		// $this->custom_model->UploadImg(
		// 	"images/course_post/reg",
		// 	"{$id}.{$ext}",
		// 	"pic"

		// );

		// $this->custom_model->UploadVideo(
		// 	"images/course_post",
		// 	"{$id}.{$ext}",
		// 	"upvideo"

		// );

		$this->custom_model->UploadImg(
			"images/course_post",
			"{$id}.{$ext}",
			"preview"

		);

	//	print_r($data);
	//		die();
	
	

		
			$text = "images/question_post/{$id}.txt"; 

			$this->session->set_flashdata('s', $text);
			$this->session->set_flashdata('success', 'save successfully');

			redirect(base_url( "admin/lession-post"), "refresh");

		
		}else{
			$this->session->set_flashdata('success', 'save successfully');
			$data['title'] = "register Confirm";
		$this->load->view('admin/lession-post', $data);

		}

	
		

		
	
	}
}


/////////////end section ////////////////

					
public function question_bank_confirm()
{
	$data['title'] = "post Confirm";
	
	$this->load->helper('form');

	$this->load->library('form_validation');
	


	 $this->form_validation->set_rules('question', 'title', 'required');
	// $this->form_validation->set_rules('address', 'address', 'required');
	// $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	// $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
//	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

	if ($this->form_validation->run() == FALSE)
	{
		$id = $this->session->userdata("id");
		$data['title'] = "register Confirm";
		$this->load->view('admin/question_bank', $data);
	
		//echo $id;

	}
	else{
		$this->load->helper('file');
		
		
		$id = $this->session->userdata("id");
	
		
			
			
		$data = [

			"question" => $this->input->post("question"),
			 "score" => $this->input->post("score"),
			 "inactive" => $this->input->post("inactive")		

		];
		
	//	print_r($data);
	//	die();
		if($this->om->InsertData("questions_bank", $data)){


		//	print_r($data);
		//	die();
			
			 $id = $this->om->Id;

			$this->load->model("custom_model");

		
			$this->session->set_flashdata('success', 'save successfully');

			redirect(base_url("admin/question_bank-post"), "refresh");

		
		}else{
			$this->session->set_flashdata('success', 'save successfully');
			$data['title'] = "question_bank Confirm";
		$this->load->view('admin/question_bank', $data);

		}

	
		

		
	
	}
}

/////////////end question bank////////////////

					
public function questions_bank_details_confirm()
{
	$data['title'] = "post Confirm";
	
	$this->load->helper('form');

	$this->load->library('form_validation');
	


	 $this->form_validation->set_rules('question_id', 'title', 'required');
	// $this->form_validation->set_rules('address', 'address', 'required');
	// $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	// $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
//	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

	if ($this->form_validation->run() == FALSE)
	{
		$id = $this->session->userdata("id");
		$data['title'] = "register Confirm";
		$this->load->view('admin/questions_bank_details', $data);
	
		//echo $id;

	}
	else{
		$this->load->helper('file');
		
		
		$id = $this->session->userdata("id");
	
		
			
			
		$data = [

			"question_id" => $this->input->post("question_id"),
			 "options" => $this->input->post("options"),
			 "is_correct" => $this->input->post("is_correct")		

		];
		
	//	print_r($data);
	//	die();
		if($this->om->InsertData("questions_bank_details", $data)){


		//	print_r($data);
		//	die();
			
			 $id = $this->om->Id;

			$this->load->model("custom_model");

		
			$this->session->set_flashdata('success', 'save successfully');

			redirect(base_url("admin/questions_bank_details-post"), "refresh");

		
		}else{
			$this->session->set_flashdata('success', 'save successfully');
			$data['title'] = "question_bank Confirm";
		$this->load->view('admin/questions_bank_details', $data);

		}

	
		

		
	
	}
}



					
public function quiz_master_confirm()
{
	$data['title'] = "post Confirm";
	
	$this->load->helper('form');

	$this->load->library('form_validation');
	


	 $this->form_validation->set_rules('exam_type', 'title', 'required');
	// $this->form_validation->set_rules('address', 'address', 'required');
	// $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	// $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
//	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

	if ($this->form_validation->run() == FALSE)
	{
		$id = $this->session->userdata("id");
		$data['title'] = "quiz_master Confirm";
		$this->load->view('admin/quiz_master', $data);
	
		//echo $id;

	}
	else{
		$this->load->helper('file');
		
		
		$id = $this->session->userdata("id");
	
		
			
			
		$data = [

		    "exam_type" => $this->input->post("exam_type"),
			 "title" => $this->input->post("title"),
			 "created_on" => $this->input->post("created_on"),
			 "active" => $this->input->post("active"),
			 "user_id" => $id		

		];
		
	//	print_r($data);
	//	die();
		if($this->om->InsertData("quiz_master", $data)){


		//	print_r($data);
		//	die();
			
			 $id = $this->om->Id;

			$this->load->model("custom_model");

		
			$this->session->set_flashdata('success', 'save successfully');

			redirect(base_url("admin/quiz_master-post"), "refresh");

		
		}else{
			$this->session->set_flashdata('success', 'save successfully');
			$data['title'] = "quiz_master Confirm";
		$this->load->view('admin/quiz_master_details', $data);

		}

	
		

		
	
	}
}




					
public function quiz_questions_confirm()
{
	$data['title'] = "post Confirm";
	
	$this->load->helper('form');

	$this->load->library('form_validation');
	


	 $this->form_validation->set_rules('question_id', 'title', 'required');
	// $this->form_validation->set_rules('address', 'address', 'required');
	// $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	// $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
//	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

	if ($this->form_validation->run() == FALSE)
	{
		$id = $this->session->userdata("id");
		$data['title'] = "quiz_questions Confirm";
		$this->load->view('admin/quiz_questions', $data);
	
		//echo $id;

	}
	else{
		$this->load->helper('file');
		
		
		$id = $this->session->userdata("id");
	
		
			
			
		$data = [

		    "exam_id" => $this->input->post("exam_id"),
			 "question_id" => $this->input->post("question_id"),
			 "score" => $this->input->post("score"),
			 "correct" => $this->input->post("correct"),
			 "post_course_id" => $this->input->post("post_course_id"),
			 "category_id" => $this->input->post("category_id"),
			 "user_id" => $id		

		];
		
	//	print_r($data);
	//	die();
		if($this->om->InsertData("quiz_questions", $data)){


		//	print_r($data);
		//	die();
			
			 $id = $this->om->Id;

			$this->load->model("custom_model");

		
			$this->session->set_flashdata('success', 'save successfully');

			redirect(base_url("admin/quiz_questions-post"), "refresh");

		
		}else{
			$this->session->set_flashdata('success', 'save successfully');
			$data['title'] = "qquiz_questions Confirm";
		$this->load->view('admin/quiz_questions', $data);

		}

	
		

		
	
	}
}






}
