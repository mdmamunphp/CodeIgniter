<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {

	function __construct(){

		parent::__construct();
		$id = $this->session->userdata("id");
		$myname = $this->session->userdata("name");
		$this->load->model("Course_model","Course");
		//print_r($this->Course->countRow(3));
		if(!$id){

			redirect(base_url("front/login"), "refresh" );
		}
	}
	public function index()
	{
		$this->load->view('admin/login');
    }
	
	public function logout()
	{	
		$this->session->unset_userdata("id", "name");
		redirect( base_url("front/login"), "refresh" );
    }

	public function dashboard()
	{
		$where=$this->session->userdata("id");
		$data['title'] = "students";
		$data['myname']= $this->session->userdata("name");
		//$data['content'] =$this->load->view('admin/dashboard');
		$data['content'] =$this->load->view('students/dashboard' , $data, true);		

		$this->load->view('students/master', $data, false);
	}
	public function profile_view()
	{
		$where=$this->session->userdata("id");
		$data['title'] = "students";
		$data['myname']= $this->session->userdata("name");
		$my_info=$this->db->query("select * from users where id='$where'");
		//$data['content'] =$this->load->view('admin/dashboard');
		$data['content'] =$this->load->view('students/my_profile' ,array("my_info"=>$my_info->row_array()), true);		

		$this->load->view('students/master', $data, false);
	}
	public function account_edit()
	{
		$where=$this->session->userdata("id");
		$data['title'] = "students";
		$data['myname']= $this->session->userdata("name");
		$my_info=$this->db->query("select * from users where id='$where'");
		//$data['content'] =$this->load->view('admin/dashboard');
		$data['content'] =$this->load->view('students/account_edit' ,array("my_info"=>$my_info->row_array()), true);		

		$this->load->view('students/master', $data, false);
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
			redirect(base_url( "students/dashboard"), "refresh");

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
			
				redirect(base_url( "students/dashboard"), "refresh");

			
			}else{
				$this->session->set_flashdata('success', 'save successfully');
				$data['title'] = "register Confirm";
			$this->load->view("students/account-edit/{$where}", $data);

			}

		
		
		}
	}
	
	public function mycourse()
	{
		
        $data['title'] = "students";
	
		$s_id = $this->session->userdata("id");
	
		// print_r($data);
		// die();


		
	
		// $data['query'] = $this->Course_model->countRow(); 
		$mycourse =$this->db->query("select ca.student_id,ca.post_course_id,pc.id,pc.title from course_application ca,post_course pc where ca.student_id='$s_id' and  pc.id=ca.post_course_id");
		
		$lession = $this->db->query("select count(*) from course_application ca,post_course pc,lession l where pc.id=ca.post_course_id and pc.id=l.post_course_id and ca.student_id='$s_id'");
		// $mycourse = $this->db->query("select p.*,l.category_id ,ca.post_course_id,ca.student_id from post_course as p,lession as l,course_application as ca where ca.post_course_id=p.id ca.student_id='$s_id' and p.category_id =l.category_id")
		//  print_r($mycourse);
		//  die();

		$data['content'] = $this->load->view('students/my_course' , array("mycourse"=>$mycourse->result_array(),"lession"=>$lession->row_array()), true);
		

		$this->load->view('students/master', $data, false);
	}


	public function lessionview($id)
	{
		
        $data['title'] = "students";
		
		// $where = $this->uri->segment(3);
		
		$s_id = $this->session->userdata("id");
		
		// print_r($where);
		// die();

		
		// $data['mycourse'] = $this->om->view("*", "course_application, post_course", $where);

		$mycourse =$this->db->query("select lession.*,post_course.id as pid,post_course.title as ptitle from lession, post_course where lession.post_course_id= '$id' and post_course.id =lession.post_course_id ");
		
		
		// print_r($data);
		// die();

		$data['content'] =$this->load->view('students/lessionview' , array("mycourse"=>$mycourse) , true);
		

		$this->load->view('students/master', $data, false);
	}


	public function course()
	{
		
        $data['title'] = "students";
		
		$where = $this->uri->segment(3);
	
		$s_id = $this->session->userdata("id");
		
		// print_r($where);
		// die();

		
		// $data['mycourse'] = $this->om->view("*", "course_application, post_course", $where);

		$mycourse =$this->db->query("select c.post_course_id, c.id as cid, p.id as pid,p.title,c.student_id,p.category_id from course_application c, post_course p where c.student_id ='$s_id' and c.post_course_id = p.id");
	
		// print_r($data);
		// die();

		$data['content'] =$this->load->view('students/course' , array("mycourse"=>$mycourse) , true);	
		
		$this->load->view('students/master', $data, false);
	}
	public function invoice($id)
	{
		
        $data['title'] = "students";
		
	
	
		$s_id = $this->session->userdata("id");
		
		// print_r($where);
		// die();


		$mycourse =$this->db->query("select ca.post_course_id,ca.student_id,us.id,us.name from course_application ca,users us where ca.post_course_id='$id' and ca.student_id ='$s_id' and ca.student_id =us.id");
	
		// print_r($data);
		// die();

		$data['content'] =$this->load->view('students/invoice' , array("mycourse"=>$mycourse) , true);	
		
		$this->load->view('students/master', $data, false);
	}


	public function test_quiz()
	{
		
        $data['title'] = "students";
		
		$where = $this->uri->segment(3);
	
		$s_id = $this->session->userdata("id");
		
		// print_r($where);
		// die();

		
		// $data['mycourse'] = $this->om->view("*", "course_application, post_course", $where);

		// $mycourse =$this->db->query("select * from question");
		$post_course =$this->db->query("select * from post_course");	
	
		// print_r($data);
		// die();

		$data['content'] =$this->load->view('students/test_quiz' , array("post_course"=>$post_course->result_array()) , true);	
		
		$this->load->view('students/master', $data, false);
	}


	public function test_quiz_show($id)
	{
		
        $data['title'] = "students";
		
		// $where = $this->uri->segment(3);
	
		$s_id = $this->session->userdata("id");
		
		// print_r($where);
		// die();

		
		// $data['mycourse'] = $this->om->view("*", "course_application, post_course", $where);
		$post_course =$this->db->query("select * from post_course");
		$mycourse =$this->db->query("select * from question where question.post_course_id='$id'");	
		// $quiz = $this->db->query("select * from post_course where id='$id'");
	
		// print_r($quiz);
		// echo 
		//  die();
	
		$data['content'] =$this->load->view('students/test_quiz',array("mycourse"=>$mycourse->result_array(),"post_course"=>$post_course->result_array()), true);	
	

		$this->load->view('students/master', $data, false);
	}


	public function quiz_insert(){
	
		$this->load->helper('form');
		$this->load->helper('file');	
		$this->load->library('form_validation');
		$std_id = $this->session->userdata("id");



		if (isset($_POST['question'])) {
			$quesions=$_POST['question'];

		//	print_r($_POST['question']);
		
			foreach ($quesions as $question) {
					
						//print_r($question);
				list($question_id, $option_id, $option, $is_correct)=explode(",", $question);
						
				//echo $question_id." - ".$option_id.")".$option;
							
				$this->db->query("insert into quiz_papers (question_id,option_id,is_correct,student_id,option) value ('$question_id','$option_id','$is_correct','$std_id','$option')");

			

			}
			redirect(base_url( "students/take_quiz"), "refresh");
		}else{

			redirect(base_url( "students/take_quiz"), "refresh");
		//	$this->load->view('students/take-quiz');


		}
			
		
	
		// $this->session->set_flashdata('success', 'save successfully');
		// $data['title'] = "register Confirm";
		// $this->load->view('admin/lession-post', $data);

	
	}
		////////end messages insert //////
		



	public function take_quiz()
	{
		
		$data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
		$quiz_master =$this->db->query("select *,qq.id qqid from quiz_questions qq,quiz_master where qq.exam_id=quiz_master.id");
		$category =$this->db->query("select *,qq.id qqid from category,quiz_questions qq where qq.category_id=category.id");
		$post_course =$this->db->query("select pc.*,qq.id qqid from post_course pc,quiz_questions qq where qq.post_course_id=pc.id");

		

		$data['content'] =$this->load->view('students/take_quiz' , array("quiz_master"=> $quiz_master->result_array(),"category"=> $category->result_array(),"post_course"=> $post_course->result_array()) , true);
		$this->load->view('students/master', $data, false);
	}
		




	
	public function quiz_papers($where)
	{
	//	echo $where;
	
		$data['title'] = "admin";
		//$data['content'] =$this->load->view('admin/dashboard');
		// $quiz_master =$this->db->query("select qm.id,qq.id qqid from quiz_questions qq,quiz_master qm where qq.exam_id=quiz_master.id"); 
		// $category =$this->db->query("select *,qq.id qqid from category,quiz_questions qq where qq.category_id=category.id");
		//$post_course =$this->db->query("select *,qq.id qqid from quiz_questions qq,questions_bank_details qbd where qq.post_course_id='$where' and qq.question_id=qbd.question_id");
		
		$post_course =$this->db->query("select qb.id,qb.question from quiz_questions qq,questions_bank qb where qq.question_id=qb.id and qq.post_course_id='$where'");

		

		$data['content'] =$this->load->view('students/quiz_papers' , array("post_course"=> $post_course->result_array()) , true);
		$this->load->view('students/master', $data, false);
	}
		

}
