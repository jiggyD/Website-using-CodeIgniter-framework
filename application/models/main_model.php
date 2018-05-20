<?php

class main_model extends CI_Model{

	

	public function fetch_classes()
	{
		$query=$this->db->get('class');
		return $query;
	}

	public function fetch_schedule_mf()
	{
		$query1 = $this->db->query('SELECT t.time,c.classname,d.daysid FROM  schedule s,time t, class c,days d WHERE s.timeid=t.timeid AND c.classid=s.classid AND s.daysid=d.daysid');
		return $query1;
    		

	}
	

	public function class() {
	    $this->db->select('classname')->from('class');
	    $query=$this->db->get();
	    return $query->result_array();
	}

	public function days()
	{
		
		//$this->db->select('daysname')->from('days');
		$this->db->select('*')->from('days');
	    $query=$this->db->get();
	    return $query->result_array();		

	}

	public function times() {
	    $this->db->select('time')->from('time');
	    $query=$this->db->get();
	    return $query->result_array();
	}

	
	public function insert_into_contact()
	{
		$data = array(
            'name' => $this->input->post('std_name'),
            'email' => $this->input->post('std_email'),
            'comments' => $this->input->post('address'),
           
        );
		
		$this->db->insert('contact',$data);
	}

	


	public function check_time(){

		
        //get class id
		$type=$this->input->post('typeofclass')	;	
		$rq6 = $this->db->query("SELECT c.classid from class c where c.classname='$type'");  
		foreach ($rq6->result() as $row){
	      $classid=$row->classid;
	        
	    }
		
		//get days id
		$schedule=$this->input->post('typeofday');		
		$rq7 = $this->db->query("SELECT c.daysid from days c where c.daysname='$schedule'"); 
		foreach ($rq7->result() as $row){
	                           
	        $daysid=$row->daysid;
	                         
	    }

	    //get time
	    $classtime=$this->input->post('typeoftime');
	    $rq8 = $this->db->query("SELECT t.timeid from time t where t.time='$classtime'"); 
		foreach ($rq8->result() as $row){
	                           
	        $timeid=$row->timeid;
	                         
	    }


	    //check time
		$rq9 = $this->db->query("SELECT * from schedule where timeid='$timeid' AND classid='$classid' AND daysid='$daysid'"); 
		   
	    //if incorrect time set error msg with right time schedule
	    if($rq9->num_rows() == 0)
	    {
	    	return TRUE;
		}   
		else{
			return FALSE;
		}	
	}

	public function getValid_time(){

		
        //get class id
		$type=$this->input->post('typeofclass')	;	
		$rq6 = $this->db->query("SELECT c.classid from class c where c.classname='$type'");  
		foreach ($rq6->result() as $row){
	      $classid=$row->classid;
	      
	    }
		
		//get days id
		$schedule=$this->input->post('typeofday');		
		$rq7 = $this->db->query("SELECT c.daysid from days c where c.daysname='$schedule'"); 
		foreach ($rq7->result() as $row){
	                           
	        $daysid=$row->daysid;
	                         
	    }

	    $selecttime ="";
	    $rq9=$this->db->query("SELECT t.time from schedule s, time t where t.timeid=s.timeid AND s.classid='$classid' AND s.daysid='$daysid'");
	    foreach ($rq9->result() as $row){
	                           
	        	$selecttime .=$row->time;
	        	$selecttime .=' ';
	                         
	    	}	
	    	
	    return $selecttime;
		
	}

	public function insert_into_clients()
	{

		
		$cdata= array(
			'name'=>$this->input->post('cname'),
			'phone'=>$this->input->post('cphone'),
			'address'=>$this->input->post('caddress'),
			'email'=>$this->input->post('cemail'),
			'password'=>$this->input->post('cpassword'));
		
		$this->db->insert('client',$cdata);
	}


	public function insert_into_clientSchedule()
	{	
    	
    	$name=$this->input->post('cname');	
		$rq6 = $this->db->query("SELECT c.clientid from client c where c.name='$name'");  
		foreach ($rq6->result() as $row){
	      $clientid=$row->clientid;
	        
	    }
	    //get class id
		$type=$this->input->post('typeofclass')	;	
		$rq6 = $this->db->query("SELECT c.classid from class c where c.classname='$type'");  
		foreach ($rq6->result() as $row){
	      $classid=$row->classid;
	        
	    }
		
		//get days id
		$schedule=$this->input->post('typeofday');		
		$rq7 = $this->db->query("SELECT c.daysid from days c where c.daysname='$schedule'"); 
		foreach ($rq7->result() as $row){
	                           
	        $daysid=$row->daysid;
	                         
	    }

	    //get time
	    $classtime=$this->input->post('typeoftime');
	    $rq8 = $this->db->query("SELECT t.timeid from time t where t.time='$classtime'"); 
		foreach ($rq8->result() as $row){
	                           
	        $timeid=$row->timeid;
	                         
	    }


		$cSchedule= array(
			'clientid'=>$clientid,
			'timeid'=>$timeid,
			'classid'=>$classid,
			'daysid'=>$daysid
			);
		
		$this->db->insert('clientschedule',$cSchedule);
	}


} 

?>