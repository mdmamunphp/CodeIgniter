<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {


	public function index()
	{
		$data['title'] = "Login";
		$this->load->view('students/login',$data);
	}
	
	

	
	
	//*************** admin login start ************************
	public function admin()
	{
		$data['title'] = "Login";
		$this->load->view('front/login',$data);
	}

	public function check(){

		$where =[
			'email' => $this->input->post('email'),
			'password' => $this->input->post('pass')

		];
		$results = $this->om->view('*', "users", $where);
	
		if($results){

			//print_r($results);

			foreach($results as $result){ 
				$data = [
					"id" => $result->id,
					"name" => $result->name,
					"type" => $result->type
				];
				//  print_r($data);
				//  die();
				if($data['type'] == 1){

					$this->session->set_userdata($data);
					$this->UserActivity('Login');
					redirect(base_url( "admin/dashboard" ), "refresh");

				}elseif ($data['type'] == 2) {

					$this->session->set_userdata($data);
					$this->UserActivity('Login');
					redirect(base_url( "instructor/master" ), "refresh");
					
				  }elseif ($data['type'] == 3) {

					$this->session->set_userdata($data);
					$this->UserActivity('Login');
					redirect(base_url( "students/master" ), "refresh");
				  } else {

					echo "Have a good night!";
				  }
				
				
				
				//  $this->session->set_userdata($data);
				
				//  redirect(base_url( "admin/dashboard" ), "refresh");
			}
			

		}
		else{

		}
	}
	
//*************** admin login end************************
public function logout()
	{		
		$this->UserActivity('Logout');
		$this->session->unset_userdata("id", "name","where_id");
	
		redirect( base_url("front/login"), "refresh" );
    }


public function UserActivity($activity){

    $user_id= $this->session->userdata('id');
    $session_id= session_id();
    $browser=$this->input->user_agent();
    $ip=$_SERVER['REMOTE_ADDR'];

    date_default_timezone_set("Asia/Dhaka");
    
    $this->db->query("insert into activity_log(user_id,activity,session_id,activity_datetime,ip,browser)values('$user_id','$activity','$session_id',now(),'$ip','$browser')");


  }









};

