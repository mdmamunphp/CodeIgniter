<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterController extends CI_Controller {



	public function index()
	{
		$data['title'] = "admin";

		// if($id){
		// 	echo $id;
		// }

			$data['id'] = $this->session->userdata("id");
			$data['category']= $this->db->query("select * from category limit 6"); 

			

			$data['content'] =$this->load->view('front/content' , $data , true);

	
			$this->load->view('index', $data, false);// 	//

	
	}
	// public function content(){
	// 	$data['title'] = "admin";
	// 	//$data['content'] =$this->load->view('admin/dashboard');
	// 	$data['content'] =$this->load->view('front/content' , '' , true);

	// 	$this->load->view('index', $data, false);


	// } 
	public function login(){


		$this->load->view('front/login');
	
	//	$data['content'] =$this->load->view('front/login' , '' , true);
	
	//	$this->load->view('index', $data, false);
	


	}
	public function reg(){
	
		// $data['roles'] = $this->om->view("*", "roles");
		$query = $this->db->query("select id,name from roles");
		// 	print_r($query);
		// die();
		$this->load->view('front/reg', array("roles"=>$query));


		// print_r($data);
		// die();
		// $this->load->view('front/reg', $data, false);


	}
	public function header()
	{
		
        // $data['title'] = "admin";
		// //$data['content'] =$this->load->view('admin/dashboard');
		// $data['content'] =$this->load->view('front/header' , '' , true);

		// $this->load->view('index', $data, false);
	}
	public function coursedetails()
	{
		
		
		//$this->load->helper('form');
		$where = $this->uri->segment(3);
		//$c_id = $this->session->userdata($this->uri->segment(3));
		//echo $c_id;
		$data['coursedetails']  = $this->om->view("*", "post_course", ['id' =>$where]);
	//	$data['instructor']  = $this->om->view("*", "instructor", ['id' =>$coursedetails->instructor_id]);
		// print_r($data);
		// die();
		$data['id'] = $this->session->userdata("id");
		$data['course_id'] = $this->uri->segment(3);
		$this->load->view('front/coursedetails', $data);
		// $data['content'] = $this->load->view('front/coursedetails' , '' , true);
		// $this->load->view('index', $data, false);


	}





						
public function application_confirm()
{
	

	$data['title'] = "post Confirm";
	
	$this->load->helper('form');

	$this->load->library('form_validation');
	


	 $this->form_validation->set_rules('payment_method', 'payment_method', 'required');
	 $this->form_validation->set_rules('transaction_id', 'transaction_id', 'required');


	if ($this->form_validation->run() == false)
	{
		
		$where = $this->uri->segment(3);
			
		$data['coursedetails']  = $this->om->view("*", "post_course", ['id' =>$where]);
		$id = $this->session->userdata("id");
		$data['title'] = "register Confirm";
		$this->load->view('front/coursedetails', $data);
	
		//echo $id;

	}
	else{
	

		$this->load->helper('file');
		
		$where = $this->uri->segment(3);

		$id = $this->session->userdata("id");
	
		
			
			
		$data = [

			
			 "student_id" => $id,
						
			"post_course_id" =>  $this ->input->post("course_id"),
			"payment_method" => $this ->input->post("payment_method"),
			"transaction_id" => $this ->input->post("transaction_id")
		
	
		];
	
		// print_r($data);

		// die();
		if($this->om->InsertData("course_application", $data)){


			// print_r($data);
			// die();
			
			 $id = $this->om->Id;

			$this->load->model("custom_model");
		
			$this->session->set_flashdata('success', 'save successfully');

			redirect(base_url( "index"), "refresh");

		
		}else{

			$this->session->set_flashdata('success', 'save successfully');
			$data['title'] = "register Confirm";

		    $this->load->view('front/coursedetails', $data);

		}

			
	
	}

}


	
}
