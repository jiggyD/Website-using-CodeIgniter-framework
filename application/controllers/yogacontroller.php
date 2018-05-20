<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class yogacontroller extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('security');
		$this->load->helper('array');
		$this->load->model('main_model');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');

	}
	
	public function about()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}
	public function classes()
	{
		$this->load->view('header');
		$data['fetch_classes']= $this->main_model->fetch_classes();
		$this->load->view('classes',$data);
		$this->load->view('footer');
	}

	public function schedule()
	{
		$this->load->view('header');
			$data['fetch_schedule_mf']= $this->main_model->fetch_schedule_mf();
			$data['days']= $this->main_model->days();
		$this->load->view('schedule',$data);
		$this->load->view('footer');

	}

	
	public function contact() {

		$this->load->view('header');
		
		$this->form_validation->set_rules('std_name', 'Username', 'required|xss_clean|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('std_email', 'Email', 'required|trim|xss_clean|valid_email');
     
        if ($this->form_validation->run() == FALSE){
            $this->load->view('contact');

        }
        else{
           	 $this->load->view('contact');
             $this->main_model->insert_into_contact();
        }		
		 
		 
		 $this->load->view('footer');
    }

    public function register()
	{
		$this->load->view('header');
		
		$data['class_type'] = $this->main_model->class();
    	$data['day_type'] = $this->main_model->days();	
    	$data['time_type']=$this->main_model->times();

    	
		$this->form_validation->set_rules('cname', 'Username', 'required|xss_clean|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('cemail', 'Email', 'required|trim|xss_clean|valid_email');
		$this->form_validation->set_rules('cphone', 'Phone', 'required|xss_clean|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('caddress', 'Address', 'required|xss_clean|min_length[5]|max_length[50]');
     	$this->form_validation->set_rules('cpassword', 'Password', 'required|xss_clean|regex_match[/^[a-zA-Z]\w{8,16}$/]');	
     	$this->form_validation->set_rules('typeoftime', 'Time', 'callback_time_validate');


		

     	if ($this->form_validation->run() == FALSE){
            $this->load->view('register',$data);
        }
        else{
             $this->load->view('register',$data);
             $this->main_model->insert_into_clients();
			 $this->main_model->insert_into_clientSchedule();
        }	
        
        
		$this->load->view('footer');

		
		
	}

	 public function time_validate()
        {	
        		$val =$this->main_model->check_time();
                if ($val==TRUE)
                {
                	$data= $this->main_model->getValid_time();
                    $this->form_validation->set_message('time_validate', 'Select from: ' . $data . ' ');
	    			return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }

  
}
