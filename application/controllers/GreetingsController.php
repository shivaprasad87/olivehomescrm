<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class GreetingsController extends CI_Controller {

	function __construct(){
        /* Session Checking Start*/
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('greeting_model');
        $this->load->model('callback_model');
        $this->load->library('session');
    }
    
    public function index($value='')
    {
 
    	$data = $this->greeting_model->checkDOB(); 
    	if(count($data)>0)
    	{
    		foreach ($data as $today_dob) {
    			$data = array("user_id" => $today_dob->id, "username" => $today_dob->first_name." ".$today_dob->last_name, "type" =>"dob"); 
    			$check_data = $this->greeting_model->getWhere(array_merge($data,array("date(date_added)"=>date("Y-m-d"))),"todaysgreetings");
    			if(!$check_data)
    			$this->greeting_model->insertRow($data,'todaysgreetings'); 
    		}
    	}
    	$job_aniv = $this->greeting_model->checkJA();
        if(count($job_aniv)>0)
        {
                foreach ($job_aniv as $job_ani) {
                    if($job_ani->emp_doj)
                    { 
                    $diff = abs(strtotime(date("Y-m-d")) - strtotime($job_ani->emp_doj));
                    $years = floor($diff / (365*60*60*24));
                    if($years>=1)
                    {
                $data = array("user_id" => $job_ani->id, "username" => $job_ani->first_name." ".$job_ani->last_name, "type" =>"ja"); 
                //print_r($data);die;
                $check_data = $this->greeting_model->getWhere(array_merge($data,array("date(date_added)"=>date("Y-m-d"))),"todaysgreetings");
                if(!$check_data)
                $this->greeting_model->insertRow($data,'todaysgreetings');  
                    }

                    } 
                }  
        } 
    }
    public function userPost($value='')
    {
        $file_data=array();
        if(isset($_FILES['p_file']['name']) && !empty($_FILES['p_file']['name'])){  
                $file = $_FILES["p_file"]['tmp_name'];
                    $path = './uploads/userpost/';
                    if (!is_dir($path)) {
                        mkdir($path, 0777, true);
                    }
                    $file_type = 'gif|jpg|jpeg|png';
                    $config['upload_path']          = './uploads/userpost/';
                    $config['allowed_types']        = 'jpeg|jpg|png|txt|pdf|docx|xlsx|pptx|rtf'; 
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload', $config); 
                    if (!$this->upload->do_upload('p_file')) {
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        //redirect('admin/properties/add');
                    } else {
                        $image = $this->upload->data('file_name');
                        $file_data = array("file_name" => $image,"date_added"=>date("Y-m-d"),"type" => "userpost", "user_id" =>$this->session->userdata("user_id"), "username"=>$this->session->userdata("user_name"));

                    }
                    $this->greeting_model->insertRow(array_merge($this->input->post(),$file_data),"todaysgreetings");
                    //print_r(array_merge($this->input->post(),$file_data));
                    redirect(base_url('dashboard'));
            }
    } 
}