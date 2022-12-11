<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InstructorController extends CI_Controller {

	function __construct(){

		parent::__construct();
		$id = $this->session->userdata("id");
		if(!$id){

			redirect(base_url("front/login"), "refresh" );
		}
	}
	public function index()
	{
		$this->load->view('instructor/login');
    }
	
	public function logout()
	{	
		$this->session->unset_userdata("id", "name");
		redirect( base_url("front/login"), "refresh" );
    }

	public function dashboard()
	{
		$where=$this->session->userdata("id");
		$data['title'] = "instructor";
		$myinfo= $this->db->query("select * from users where id='$where'"); 
		//$data['content'] =$this->load->view('admin/dashboard');
		$data['content'] =$this->load->view('instructor/dashboard' , array("myinfo"=>$myinfo->row_array()), true);		

		$this->load->view('instructor/master', $data, false);
	}

	public function profile_view()
	{
		$where=$this->session->userdata("id");
		$data['title'] = "students";
		$data['myname']= $this->session->userdata("name");
		$my_info=$this->db->query("select * from users where id='$where'");
		//$data['content'] =$this->load->view('admin/dashboard');
		$data['content'] =$this->load->view('instructor/my_profile' ,array("my_info"=>$my_info->row_array()), true);		

		$this->load->view('instructor/master', $data, false);
	}
	public function account_edit()
	{
		$where=$this->session->userdata("id");
		$data['title'] = "students";
		$data['myname']= $this->session->userdata("name");
		$my_info=$this->db->query("select * from users where id='$where'");
		//$data['content'] =$this->load->view('admin/dashboard');
		$data['content'] =$this->load->view('instructor/account_edit' ,array("my_info"=>$my_info->row_array()), true);		

		$this->load->view('instructor/master', $data, false);
	}

	public function account_update($where)
	{
	//	$where = $this ->input->post("id");
		$id=$this->session->userdata("id");
		
	  
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
			redirect(base_url( "instructor/dashboard"), "refresh");

		}
		else{

		
			$id=$this->session->userdata("id");

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
				"images" => fileExtension("images"),
			//	"address" => $string,

			];
		//    SendEmail($email,$images);

			
		//  print_r($data);
		//  die();
		  
		
			
		
			if($this->om->UpdateData("users",  $data, ['id' => $id])){

				// print_r($data);
				// // echo $email;
			//	 die();
				

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
			
				redirect(base_url( "instructor/master"), "refresh");

			
			}else{
				$this->session->set_flashdata('success', 'save successfully');
				$data['title'] = "register Confirm";
			$this->load->view("instructor/account-edit/{$where}", $data);

			}

		
		
		}
	}


	public function course_manager()
	{
		
        $data['title'] = "instructor";
		//$data['content'] =$this->load->view('admin/dashboard');
		//$data['content'] =$this->load->view('admin/dashboard');
		$id = $this->session->userdata("id");
		$mycourse =$this->db->query("select * from post_course where instructor_id='$id'");
		// print_r($mycourse);
		// die();
		$data['content'] =$this->load->view('instructor/course-manager', array("mycourse"=>$mycourse->result_array()), true);

		
		$this->load->view('instructor/master', $data, false);
		


		//$this->load->view('admin/master',$data);
	}
	public function earnings()
	{
		
        $data['title'] = "instructor";
		
		$where = $this->uri->segment(3);
	
		$id = $this->session->userdata("id");
		
		// print_r($where);
		// die();

		
		// $data['mycourse'] = $this->om->view("*", "course_application, post_course", $where);

		$mycourse =$this->db->query("select ie.*,pc.id,pc.title from instructor_earn ie,post_course pc where ie.instructor_id='$id' and pc.id=ie.post_course_id");
	
		// print_r($data);
		// die();

		$data['content'] =$this->load->view('instructor/earnings' , array("mycourse"=>$mycourse->result_array()) , true);	
		
		$this->load->view('instructor/master', $data, false);
	}

////course post /////
public function coursepost()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
	
		$data['content'] =$this->load->view('instructor/course-post' , '' , true);
		$this->load->view('instructor/master', $data, false);
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
		
		$this->load->view('instructor/course-post', $data);
	
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

		// $this->custom_model->ResizeImg(
		// 	"images/course_post/reg/{$id}.{$ext}",
		// 	"./images/course_post/reg/{$id}-re.{$ext}",
		// 	"350",
		// 	"150"
		// );
		// list($width, $height) = getimagesize("images/course_post/reg/{$id}.{$ext}");
		
		// $x_axis =floor(($width-100)/2);
		// $y_axis =floor(($height-50)/2);

		// $this->custom_model->CropImg(
		// 	"images/course_post/reg/{$id}.{$ext}",
		// 	"./images/course_post/reg/{$id}-cr.{$ext}",
		// 	"100",
		// 	"50",
		// 	$x_axis,
		// 	$y_axis
		// );

		// $this->custom_model->WaterMark(
		// 	"images/course_post/reg/{$id}.{$ext}",
		// 	"images/course_post/reg/{$id}-w.{$ext}",
		// 	"images/course_post/reg/logo.jpg"
			
		// );
			$text = "images/course_post/reg/{$id}.txt"; 

			$this->session->set_flashdata('s', $text);
			$this->session->set_flashdata('success', 'save successfully');

			redirect(base_url( "instructor/course-post"), "refresh");

		
		}else{
			$this->session->set_flashdata('success', 'save successfully');
			$data['title'] = "instructor Confirm";
		$this->load->view('instructor/course-post', $data);

		}

	
		

		
	
	}
}

////////////////////end course post /////////////////////
	//////course edit ///////////////

	public function courseedit()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
		$where = $this->uri->segment(3);
	
		$data['coursedetails']  = $this->om->view("*", "post_course", ['id' =>$where]);


		//print_r($data);
		// die();
		$data['content'] =$this->load->view('instructor/course-edit' , $data , true);
		$this->load->view('instructor/master', $data, false);

	}



	///course update ////

	public function update_confirm()
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
					$where = $this->uri->segment(3);
					$id = $this->session->userdata("id");
					$data['title'] = "course update Confirm";
					$this->load->view('instructor/course-edit', $data);
				
					//echo $id;

				}
				else{
					$this->load->helper('file');

					$where = $this->uri->segment(3);
					
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
					
				
					if($this->om->UpdateData("post_course",  $data, ['id' => $where])){
						// print_r($data);
						// die();
						
					//	print_r($data);
						
							$ext = $data['images'];
						//	echo $ext;
						 $id = $this->om->Id;

						$this->load->model("custom_model");

						 $folder ='course_post';
						textFile($text, $folder, $where);

				
					
					$this->custom_model->UploadImg(
						"images/course_post/reg",
						"{$where}.{$ext}",
						"pic"

					);
	
					$this->custom_model->ResizeImg(
						"images/course_post/reg/{$where}.{$ext}",
						"./images/course_post/reg/{$where}-re.{$ext}",
						"350",
						"150"
					);
					list($width, $height) = getimagesize("images/course_post/reg/{$where}.{$ext}");
					
					$x_axis =floor(($width-100)/2);
					$y_axis =floor(($height-50)/2);

					$this->custom_model->CropImg(
						"images/course_post/reg/{$where}.{$ext}",
						"./images/course_post/reg/{$where}-cr.{$ext}",
						"100",
						"50",
						$x_axis,
						$y_axis
					);

					$this->custom_model->WaterMark(
						"images/course_post/reg/{$where}.{$ext}",
						"images/course_post/reg/{$where}-w.{$ext}",
						"images/course_post/reg/logo.jpg"
						
					);
						$text = "images/course_post/reg/{$where}.txt"; 

						$this->session->set_flashdata('s', $text);
						$this->session->set_flashdata('success', 'save successfully');

						redirect(base_url( "instructor/course-edit/{$where}"), "refresh");

					
					}else{
						$this->session->set_flashdata('success', 'save successfully');
						$data['title'] = "register Confirm";
					$this->load->view("instructor/course-edit/{$where}", $data);

					}

				
					

					
				
				}



	}

	///////////////quiz manager ////////

	public function quiz_manager()
	{
		
		$data['title'] = "instructor";
		$id = $this->session->userdata("id");
		//$data['content'] =$this->load->view('admin/dashboard');

		$post_course=$this->db->query("select * from post_course where post_course.instructor_id='$id'");
		// print_r($post_course);

		// echo $id;

		// die();
		
		$data['content'] =$this->load->view('instructor/quiz-manager' , array("post_course"=>$post_course->result_array()) , true);
		$this->load->view('instructor/master', $data, false);
	}

	
	///////////////quiz manager ////////

	public function quiz_details($where)
	{
		
		$data['title'] = "instructor";
		$id = $this->session->userdata("id");
		//$data['content'] =$this->load->view('admin/dashboard');

		// $post_course=$this->db->query("select * from post_course where post_course.instructor_id='$id'");
		$question_all=$this->db->query("select * from question where question.post_course_id='$where'");
		// print_r($post_course);

		//  echo $where;

		// die();
		
		$data['content'] =$this->load->view('instructor/quiz-details' , array("question_all"=>$question_all->result_array()) , true);
		$this->load->view('instructor/master', $data, false);
	}

	public function quiz_singleviews($where)
	{
		
		$data['title'] = "instructor";
		$id = $this->session->userdata("id");
		//$data['content'] =$this->load->view('admin/dashboard');

		$question_all=$this->db->query("select * from question where question.post_course_id='$where'");
		$question_views=$this->db->query("select * from question where question.id='$where'");
		// print_r($post_course);

		//  echo $where;

		// die();
		
		$data['content'] =$this->load->view('instructor/quiz-details' ,array("question_all"=>$question_all->result_array(),"question_views"=>$question_views->result_array()) , true);
		$this->load->view('instructor/master', $data, false);
	}

	public function messages()
	{
		
		$data['title'] = "instructor";
		$id = $this->session->userdata("id");
		//$data['content'] =$this->load->view('admin/dashboard');

		 $users_all= $this->db->query("select * from users"); 
		// $data['users_all']=$this->om->view("*", "users","");
	//	$question_views=$this->db->query("select * from question where question.id='$where'");
		// print_r($post_course);

		//  echo $where;

		// die();
		//$this->load->view('instructor/messages' ,$data, false);
		
		$data['content'] =$this->load->view('instructor/messages' ,array("users_all"=>$users_all->result_array()) , true);
		$this->load->view('instructor/master', $data, false);
	}
	

	/////messages insert //////




	///chat active ////
	public function messages_chat($where)
	{
		$this->session->set_userdata('where_id',$where);
		
	
		$data['title'] = "instructor";
		$where_id=$this->session->userdata("where_id");
		$id = $this->session->userdata("id");
		//$data['content'] =$this->load->view('admin/dashboard');


		 $users_all= $this->db->query("select * from users"); 
		 $messages_all= $this->db->query("select *,m.description as mdes,m.users_id,users.name as uname from messages as m,users where users.id=m.users_id and m.receive_id='$id' and m.users_id='$where_id' and users.id='$id'"); 
		 $send_all= $this->db->query("select *,users.name as sname from messages,users where messages.users_id='$id' and messages.receive_id='$where_id' and users.id='$id' and users.id=messages.users_id"); 
		 echo $id;

		// $data['users_all']=$this->om->view("*", "users","");
	//	$question_views=$this->db->query("select * from question where question.id='$where'");
		//  print_r($users_all);

		//   echo $where;

		//  die();
		//$this->load->view('instructor/messages' ,$data, false);
		
		$data['content'] =$this->load->view('instructor/messages' ,array("users_all"=>$users_all->result_array(),"messages_all"=>$messages_all->result_array(),"send_all"=>$send_all->result_array()) , true);
		$this->load->view('instructor/master', $data, false);
	}
	


	public function messages_confirm()
	{
		$data['title'] = "post Confirm";
				
				$this->load->helper('form');

				$this->load->library('form_validation');
				
			

				 $this->form_validation->set_rules('description', 'title', 'required');
				// $this->form_validation->set_rules('address', 'address', 'required');
				// $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
				// $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
			//	$this->form_validation->set_rules('re_password', 'Retype Password', 'required|matches[password]');

				if ($this->form_validation->run() == FALSE)
				{
					$where = $this->uri->segment(3);
					$id = $this->session->userdata("id");
					$where_id=$this->session->userdata("where_id");
					$data['title'] = "course update Confirm";
					$this->load->view('instructor/course-edit', $data);
				
					//echo $id;
					// $data = [

					// 	"description" => $this->input->post("description"),
					// 	 "users_id" => $id,
					// 	 "receive_id" =>$where_id,
					
					// 	"images" => fileExtension("images"),

					// ];
					// print_r($data);
					// die();
				

				}
				else{

					$where_id=$this->session->userdata("where_id");
					$this->load->helper('file');

					$where = $this->uri->segment(3);
					
					$id = $this->session->userdata("id");
					$text = $this->input->post('description');
					
						
						
					$data = [

						"description" => $this->input->post("description"),
						 "users_id" => $id,
						 "receive_id" =>$where_id,
					
						"images" => fileExtension("images"),

					];
					// print_r($data);
					// die();
				
					if($this->om->InsertData("messages", $data)){
						// print_r($data);
						// die();
						
					//	print_r($data);
						
							$ext = $data['images'];
						//	echo $ext;
						 $id = $this->om->Id;

						$this->load->model("custom_model");

						 $folder ='course_post';
						textFile($text, $folder, $where);

				
						$text = "images/course_post/reg/{$where}.txt"; 

						$this->session->set_flashdata('s', $text);
						$this->session->set_flashdata('success', 'save successfully');

						redirect(base_url( "instructor/messages-chat/{$where_id}"), "refresh");

					
					}else{
						$this->session->set_flashdata('success', 'save successfully');
						$data['title'] = "register Confirm";
					$this->load->view("instructor//messages-chat/{$where_id}", $data);

					}

				
					

					
				
				}



	}
	////////end messages insert //////


}
