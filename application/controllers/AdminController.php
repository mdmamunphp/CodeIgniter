<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	function __construct(){

		parent::__construct();
		$id = $this->session->userdata("id");
		if(!$id){

			redirect(base_url("front/login"), "refresh" );
		}
	}
	public function index()
	{
		$this->load->view('front/login');
    }
	

	


	public function logout()
	{	
		$this->session->unset_userdata("id", "name");
		redirect( base_url("front/login"), "refresh" );
    }

    public function dashboard()
	{

		$where=$this->session->userdata("id");
		$data['title'] = "admin";
		$myinfo= $this->db->query("select * from users where id='$where'"); 
		//$data['content'] =$this->load->view('admin/dashboard');
		$data['content'] =$this->load->view('admin/dashboard' , array("myinfo"=>$myinfo->row_array()), true);

		$this->load->view('admin/master', $data, false);
	}

	public function profile_view()
	{
		$where=$this->session->userdata("id");
		$data['title'] = "students";
		$data['myname']= $this->session->userdata("name");
		$my_info=$this->db->query("select * from users where id='$where'");
		//$data['content'] =$this->load->view('admin/dashboard');
		$data['content'] =$this->load->view('admin/my_profile' ,array("my_info"=>$my_info->row_array()), true);		

		$this->load->view('admin/master', $data, false);
	}
	public function account_edit()
	{
		$where=$this->session->userdata("id");
		$data['title'] = "students";
		$data['myname']= $this->session->userdata("name");
		$my_info=$this->db->query("select * from users where id='$where'");
		//$data['content'] =$this->load->view('admin/dashboard');
		
		$data['content'] =$this->load->view('admin/account_edit' ,array("my_info"=>$my_info->row_array()), true);	


		$this->load->view('admin/master', $data, false);
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
			redirect(base_url( "admin/dashboard"), "refresh");

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
			
				redirect(base_url( "admin/dashboard"), "refresh");

			
			}else{
				$this->session->set_flashdata('success', 'save successfully');
				$data['title'] = "register Confirm";
			$this->load->view("admin/account-edit/{$where}", $data);

			}

		
		
		}
	}


	public function coursepost()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
	
		$data['content'] =$this->load->view('admin/course-post' , '' , true);
		$this->load->view('admin/master', $data, false);
	}
	public function tags()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
	
		$data['content'] =$this->load->view('admin/tags' , '' , true);
		$this->load->view('admin/master', $data, false);
	}
	public function tags_view()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
	
		$data['content'] =$this->load->view('admin/tags_views' , '' , true);
		$this->load->view('admin/master', $data, false);
	}
	public function courseview()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
	
		$data['content'] =$this->load->view('admin/course-view' , '' , true);
		$this->load->view('admin/master', $data, false);
	}

	public function courseedit()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
		$where = $this->uri->segment(3);
	
		$data['coursedetails']  = $this->om->view("*", "post_course", ['id' =>$where]);


		//print_r($data);
		// die();
		$data['content'] =$this->load->view('admin/course-edit' , $data , true);
		$this->load->view('admin/master', $data, false);

	}


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
					$this->load->view('admin/course-edit', $data);
				
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

						redirect(base_url( "admin/course-edit/{$where}"), "refresh");

					
					}else{
						$this->session->set_flashdata('success', 'save successfully');
						$data['title'] = "register Confirm";
					$this->load->view("admin/course-edit/{$where}", $data);

					}

				
					

					
				
				}



	}

	
	public function course_delete()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
		$where = $this->uri->segment(3);
	
		
		if($this->om->DeleteData("post_course", ['id' =>$where])){
		
			$data['content'] =$this->load->view('admin/course-view' , '' , true);
			$this->load->view('admin/master', $data, false);

		}
	


		//print_r($data);
		// die();
		//$data['content'] =$this->load->view('admin/course-edit' , $data , true);
		//$this->load->view('admin/master', $data, false);

	}

	/******************** lession *****************************/

	public function lessionview()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
	
		$data['content'] =$this->load->view('admin/lession-view' , '' , true);
		$this->load->view('admin/master', $data, false);
	}
	public function lessionedit()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
		$where = $this->uri->segment(3);
	
		$data['lessiondetails']  = $this->om->view("*", "lession", ['id' =>$where]);


		//print_r($data);
		// die();
		$data['content'] =$this->load->view('admin/lession-edit' , $data , true);
		$this->load->view('admin/master', $data, false);

	}

	public function lessionupdate_confirm()
	  {  
		$data['title'] = "post Confirm";
		$where = $this->uri->segment(3);
		
		
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
			$data['title'] = "register Confirm";
			$this->load->view('admin/lession-edit', $data);
		
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
		
			if($this->om->UpdateData("lession", $data, ['id' => $where])){
	
				//print_r($data);
			//	die();

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
	
				redirect(base_url( "admin/lession-edit"), "refresh");
	
			
			}else{
				$this->session->set_flashdata('success', 'save successfully');
				$data['title'] = "register Confirm";
			$this->load->view('admin/lession-edit', $data);
	
			}
	
		
			
	
			
		
		}
	}
	

public function lession_delete()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
		$where = $this->uri->segment(3);
	
		
		if($this->om->DeleteData("lession", ['id' =>$where])){
		
			$data['content'] =$this->load->view('admin/lession-view' , '' , true);
			$this->load->view('admin/master', $data, false);

		}
	


		//print_r($data);
		// die();
		//$data['content'] =$this->load->view('admin/course-edit' , $data , true);
		//$this->load->view('admin/master', $data, false);

	}


	
	/******************** lession *****************************/

	public function questionview()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
	
		$data['content'] =$this->load->view('admin/question-view' , '' , true);
		$this->load->view('admin/master', $data, false);
	}

	public function questionedit()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
		$where = $this->uri->segment(3);
	
		$data['questiondetails']  = $this->om->view("*", "question", ['id' =>$where]);


		//print_r($data);
		// die();
		$data['content'] =$this->load->view('admin/question-edit' , $data , true);
		$this->load->view('admin/master', $data, false);

	}

public function questionupdate_confirm()
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
		$where = $this->uri->segment(3);
		$data['title'] = "register Confirm";
		$this->load->view('admin/question-edit', $data);
	
		//echo $id;

	}
	else{
		$this->load->helper('file');
		
		$where = $this->uri->segment(3);
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
		
		//print_r($data);
		//die();
		if($this->om->UpdateData("question", $data, ['id' => $where])){


		//	print_r($data);
		//	die();
				$ext = $data['images'];
				echo $ext;
			 $id =$where;

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

			redirect(base_url( "admin/question-edit/{$where}"), "refresh");

		
		}else{
			$this->session->set_flashdata('success', 'save successfully');
			$data['title'] = "register Confirm";
		$this->load->view("admin/question-edit/{$where}", $data);

		}

	
		

		
	
	}
}


public function question_delete()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
		$where = $this->uri->segment(3);
	
		
		if($this->om->DeleteData("question", ['id' =>$where])){
		
			$data['content'] =$this->load->view('admin/question-view' , '' , true);
			$this->load->view('admin/master', $data, false);

		}
	


		//print_r($data);
		// die();
		//$data['content'] =$this->load->view('admin/course-edit' , $data , true);
		//$this->load->view('admin/master', $data, false);

	}


	public function quetion_post()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
	
		$data['content'] =$this->load->view('admin/question-post' , '' , true);
		$this->load->view('admin/master', $data, false);
	}

	
/**************** categories post ,view,update,delete ****************** */
	public function categoriespost()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
	
		$data['content'] =$this->load->view('admin/categories-post' , '' , true);
		$this->load->view('admin/master', $data, false);
	}

	public function categoriesview()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
	
		$data['content'] =$this->load->view('admin/categories-view' , '' , true);
		$this->load->view('admin/master', $data, false);
	}
	public function categoriesedit()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
		$where = $this->uri->segment(3);
	
		$data['categoriesdetails']  = $this->om->view("*", "category", ['id' =>$where]);


		//print_r($data);
	//	die();
		$data['content'] =$this->load->view('admin/categories-edit' , $data , true);
		$this->load->view('admin/master', $data, false);

	}
					
	public function categoriesupdate_confirm()
	{
		$data['title'] = "post Confirm";
		
		$where = $this->uri->segment(3);

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
			$where = $this->uri->segment(3);
			$data['title'] = "register Confirm";
			$this->load->view('admin/categories-post', $data);
		
			//echo $id;
	
		}
		else{
			$this->load->helper('file');
			$where = $this->uri->segment(3);
			
			$id = $this->session->userdata("id");
			$text = $this->input->post('description');
			
				
				
			$data = [
	
				"name" => $this->input->post("name"),
		
				
	
			];
			
		//	print_r($data);
		//	die();
			if($this->om->UpdateData("category", $data, ['id' => $where])){
	
	
				//print_r($data);
				//die();
					
				 $id = $this->om->Id;
	
				$this->load->model("custom_model");
	
				 $folder ='question_post/txt';
	
				textFile($text, $folder, $id);
	
		
		
	
		
	
				$text = "images/question_post/{$id}.txt"; 
	
				$this->session->set_flashdata('s', $text);
				$this->session->set_flashdata('success', 'save successfully');
	
				redirect(base_url( "admin/categories-edit/{$where}"), "refresh");
	
			
			}else{
				$this->session->set_flashdata('success', 'save successfully');
				$data['title'] = "register Confirm";
			$this->load->view("admin/categories-edit/{$where}", $data);
	
			}
	
		
			
	
			
		
		}
	}
	
	
public function categories_delete()
{
	
	$data['title'] = "admin";
	//$data['content'] =$this->load->view('admin/dashboard');
	$where = $this->uri->segment(3);

	
	if($this->om->DeleteData("category", ['id' =>$where])){
	
		$data['content'] =$this->load->view('admin/categories-view' , '' , true);
		$this->load->view('admin/master', $data, false);

	}



	//print_r($data);
	// die();
	//$data['content'] =$this->load->view('admin/course-edit' , $data , true);
	//$this->load->view('admin/master', $data, false);

}

	public function lession_post()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
	
		$data['content'] =$this->load->view('admin/lession-post' , '' , true);
		
		$this->load->view('admin/master', $data, false);

	}

	public function section_post()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
	
		$data['content'] =$this->load->view('admin/section-post' , '' , true);
		
		$this->load->view('admin/master', $data, false);

	}

/**************** question_bank post ,view,update,delete ****************** */

	public function question_bank_post()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
	
		$data['content'] =$this->load->view('admin/question_bank' , '' , true);
		$this->load->view('admin/master', $data, false);
	}
	public function question_bank_views()
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
		$questions_bank =$this->db->query("select * from questions_bank");
	
		$data['content'] =$this->load->view('admin/question_bank_views' , array("questions_bank"=> $questions_bank->result_array()) , true);
		$this->load->view('admin/master', $data, false);
	}
	public function question_bank_edit($where)
	{
		
        $data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');

		$questions_bank =$this->db->query("select * from questions_bank where id='$where'");
		$data['content'] =$this->load->view('admin/question_bank_edit' , array("questions_bank"=> $questions_bank->row_array()), true);
		$this->load->view('admin/master', $data, false);
	}

					
	public function question_bank_update($where)
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
			$this->load->view('admin/question_bank_edit'.$where, $data);
		
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
			if($this->om->UpdateData("questions_bank", $data, ['id' => $where])){
	
	
			//	print_r($data);
			//	die();
				
				 $id = $this->om->Id;
	
				$this->load->model("custom_model");
	
			
				$this->session->set_flashdata('success', 'save successfully');
	
				redirect(base_url("admin/question_bank-views"), "refresh");
	
			
			}else{
				$this->session->set_flashdata('success', 'save successfully');
				$data['title'] = "question_bank Confirm";
			$this->load->view('admin/question_bank_views', $data);
	
			}
	
		
			
	
			
		
		}
	}
	

	/////////////end question bank update////////////////
	public function question_bank_delete($where){
        $data['title'] = "admin";
        //$data['content'] =$this->load->view('admin/dashboard');
        $where = $this->uri->segment(3);

    
        if ($this->om->DeleteData("questions_bank", ['id' =>$where])) {
            redirect(base_url("admin/question_bank-views"), "refresh");
        }
	}
	
	
/**************** questions_bank_details post ,view,update,delete ****************** */

public function questions_bank_details_post()
{
	
	$data['title'] = "admin";
	//$data['content'] =$this->load->view('admin/dashboard');
	$questions_bank =$this->db->query("select * from questions_bank where inactive =1");

	

	$data['content'] =$this->load->view('admin/questions_bank_details' , array("questions_bank"=> $questions_bank->result_array()) , true);
	$this->load->view('admin/master', $data, false);
}
public function questions_bank_details_views()
{
	
	$data['title'] = "admin";
	//$data['content'] =$this->load->view('admin/dashboard');
	$questions_bank =$this->db->query("select * from questions_bank_details");

	$data['content'] =$this->load->view('admin/questions_bank_details_views' , array("questions_bank"=> $questions_bank->result_array()) , true);
	$this->load->view('admin/master', $data, false);
}
public function questions_bank_details_edit($where)
{
	
	$data['title'] = "admin";
	//$data['content'] =$this->load->view('admin/dashboard');

	//$questions_bank =$this->db->query("select * from questions_bank_details qbd,questions_bank qb where qbd.id='$where' and qbd.question_id=qb.id");
	$questions_bank =$this->db->query("select * from questions_bank_details where id='$where'");
	$questions =$this->db->query("select * from questions_bank");
	$data['content'] =$this->load->view('admin/questions_bank_details_edit' , array("questions_bank"=> $questions_bank->row_array(),"questions"=> $questions->result_array()), true);
	$this->load->view('admin/master', $data, false);
}

				
public function questions_bank_details_update($where)
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
		$this->load->view('admin/questions_bank_details_edit/'.$where, $data);
	
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
		if($this->om->UpdateData("questions_bank_details", $data, ['id' => $where])){


		//	print_r($data);
		//	die();
			
			 $id = $this->om->Id;

			$this->load->model("custom_model");

		
			$this->session->set_flashdata('success', 'save successfully');

			redirect(base_url("admin/questions_bank_details-views"), "refresh");

		
		}else{
			$this->session->set_flashdata('success', 'save successfully');
			$data['title'] = "question_bank Confirm";
		$this->load->view('admin/questions_bank_details_views', $data);

		}

	
		

		
	
	}
}


/////////////end questions_bank_details update////////////////
public function questions_bank_details_delete($where){
	$data['title'] = "admin";
	//$data['content'] =$this->load->view('admin/dashboard');
	$where = $this->uri->segment(3);


	if ($this->om->DeleteData("questions_bank_details", ['id' =>$where])) {
		redirect(base_url("admin/questions_bank_details-views"), "refresh");
	}
}


	
/**************** quiz_questions post ,view,update,delete ****************** */

public function quiz_questions_post()
{
	
	$data['title'] = "admin";
	//$data['content'] =$this->load->view('admin/dashboard');
	$questions_bank = $this->db->query("select *,qbd.id qbdid from questions_bank as qb,questions_bank_details as qbd where qb.id=qbd.question_id and qbd.is_correct='1'");
	$exam_type =$this->db->query("select * from quiz_master");
	$post_course =$this->db->query("select * from post_course");
	$category =$this->db->query("select * from category");

	$data['content'] =$this->load->view('admin/quiz_questions', array("questions_bank"=> $questions_bank->result_array(),"exam_type"=> $exam_type->result_array(),"post_course"=> $post_course->result_array(),"category"=> $category->result_array()) , true);
	$this->load->view('admin/master', $data, false);

}
public function quiz_questions_views()
{
	
	$data['title'] = "admin";
	//$data['content'] =$this->load->view('admin/dashboard');
	// $questions_bank =$this->db->query("select *,qm.id qmid,pc.id pcid,c.id cid,qb.id qbid,qbd.id qbdid from quiz_questions qq, quiz_master qm, post_course pc,category c,questions_bank qb,questions_bank_details qbd where qq.exam_id=qm.id and qq.question_id=qb.id");
	$questions_bank = $this->db->query("select * FROM quiz_questions");

	$data['content'] =$this->load->view('admin/quiz_questions_views' , array("questions_bank"=> $questions_bank->result_array()) , true);
	$this->load->view('admin/master', $data, false);
}
public function quiz_questions_edit($where)
{
	
	$data['title'] = "admin";
	//$data['content'] =$this->load->view('admin/dashboard');

	//$questions_bank =$this->db->query("select * from questions_bank_details qbd,questions_bank qb where qbd.id='$where' and qbd.question_id=qb.id");
	$questions_bank = $this->db->query("select *,qbd.id qbdid,qb.id qbid from quiz_questions,questions_bank as qb,questions_bank_details as qbd where quiz_questions.id='$where' and qb.id=qbd.question_id and qbd.is_correct='1'");
	$exam_type =$this->db->query("select * from quiz_master");
	$post_course =$this->db->query("select * from post_course");
	$category =$this->db->query("select * from category");

	$data['content'] =$this->load->view('admin/quiz_questions_edit', array("questions_bank"=> $questions_bank->result_array(),"exam_type"=> $exam_type->result_array(),"post_course"=> $post_course->result_array(),"category"=> $category->result_array()) , true);
	
	$this->load->view('admin/master', $data, false);
}

				
public function quiz_questions_update($where)
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
		$this->load->view('admin/quiz_questions_edit/'.$where, $data);
	
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
		if($this->om->UpdateData("quiz_questions", $data, ['id' => $where])){


		//	print_r($data);
		//	die();
			
			 $id = $this->om->Id;

			$this->load->model("custom_model");

		
			$this->session->set_flashdata('success', 'save successfully');

			redirect(base_url("admin/quiz_questions-views"), "refresh");

		
		}else{
			$this->session->set_flashdata('success', 'save successfully');
			$data['title'] = "quiz_questions Confirm";
		$this->load->view('admin/quiz_questions_views', $data);

		}

	
		

		
	
	}
}


/////////////end questions_bank_details update////////////////
public function quiz_questions_delete($where){
	$data['title'] = "admin";
	//$data['content'] =$this->load->view('admin/dashboard');
	$where = $this->uri->segment(3);


	if ($this->om->DeleteData("quiz_questions", ['id' =>$where])) {
		redirect(base_url("admin/quiz_questions-views"), "refresh");
	}
}

	
/**************** quiz_questions post ,view,update,delete ****************** */

public function quiz_master_post()
{
	
	$data['title'] = "admin";
	//$data['content'] =$this->load->view('admin/dashboard');

 
	

	$data['content'] =$this->load->view('admin/quiz_master' ,'', true);
	$this->load->view('admin/master', $data, false);
}
public function quiz_master_views()
{
	
	$data['title'] = "admin";
	//$data['content'] =$this->load->view('admin/dashboard');
	$questions_bank =$this->db->query("select * from quiz_master");

	$data['content'] =$this->load->view('admin/quiz_master_views' , array("questions_bank"=> $questions_bank->result_array()) , true);
	$this->load->view('admin/master', $data, false);
}
public function quiz_master_edit($where)
{
	
	$data['title'] = "admin";
	//$data['content'] =$this->load->view('admin/dashboard');

	//$questions_bank =$this->db->query("select * from questions_bank_details qbd,questions_bank qb where qbd.id='$where' and qbd.question_id=qb.id");
	$questions_bank =$this->db->query("select * from quiz_master where id='$where'");
	$questions =$this->db->query("select * from questions_bank");
	$data['content'] =$this->load->view('admin/quiz_master_edit' , array("questions_bank"=> $questions_bank->row_array(),"questions"=> $questions->result_array()), true);
	$this->load->view('admin/master', $data, false);
}

				
public function quiz_master_update($where)
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
		$this->load->view('admin/quiz_master_edit/'.$where, $data);
	
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
		if($this->om->UpdateData("quiz_master", $data, ['id' => $where])){


		//	print_r($data);
		//	die();
			
			 $id = $this->om->Id;

			$this->load->model("custom_model");

		
			$this->session->set_flashdata('success', 'save successfully');

			redirect(base_url("admin/quiz_master-views"), "refresh");

		
		}else{
			$this->session->set_flashdata('success', 'save successfully');
			$data['title'] = "quiz_master Confirm";
		$this->load->view('admin/quiz_master_views', $data);

		}

	
		

		
	
	}
}


/////////////end questions_bank_details update////////////////
public function quiz_master_delete($where){
	$data['title'] = "admin";
	//$data['content'] =$this->load->view('admin/dashboard');
	$where = $this->uri->segment(3);


	if ($this->om->DeleteData("quiz_master", ['id' =>$where])) {
		redirect(base_url("admin/quiz_master-views"), "refresh");
	}
}




	
}
