<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontregController extends CI_Controller {



			
/////////////////////************question post *********************************** */
					
public function courseapplication_confirm()
{
	$data['title'] = "post Confirm";
	
	$this->load->helper('form');

	$this->load->library('form_validation');
	


	 $this->form_validation->set_rules('title', 'title', 'required');


	if ($this->form_validation->run() == FALSE)
	{
		$id = $this->session->userdata("id");
        $data['title'] = "register Confirm";
        $where = $this->uri->segment(3);
        $data['coursedetails']  = $this->om->view("*", "post_course", ['id' =>$where]);
		$this->load->view('front/coursedetails', $data);
	
		//echo $id;

	}
	else{
		$this->load->helper('file');
		
		
		$id = $this->session->userdata("id");
	
        $course_id = $this->uri->segment(3);
        echo "ok";
		$data = [

			"payment_method" => $this->input->post("payment_method")
			 //"course_id" =>  $course_id,
			// "student_id" => $id,
			// "transaction_id" => $this->input->post("transaction_id")
			

		];
		
		print_r($data);
		die();
		if($this->om->InsertData("question", $data)){


		//	print_r($data);
		//	die();
			
			
			$this->load->model("custom_model");

		
			$this->session->set_flashdata('success', 'save successfully');

			redirect(base_url( "front/coursedetails"), "refresh");

		
		}else{
			$this->session->set_flashdata('success', 'save successfully');
			$data['title'] = "register Confirm";
		$this->load->view('front/coursedetails', $data);

		}

	
		

		
	
	}
}

/////////////end question ////////////////


}


// public function tags_view()
// {
	
// 	$data['title'] = "admin";
// 	//$data['content'] =$this->load->view('admin/dashboard');

// 	$data['content'] =$this->load->view('admin/tags_views' , '' , true);
// 	$this->load->view('admin/master', $data, false);
// }




?>
