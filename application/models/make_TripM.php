<?php  
 class Make_TripM extends CI_Model  
 { 
 	public function getTourist(){
 		$query=$this->db->get('tbl_blogs');
 		return $query->result();
 	}
 	public function make_trip(){
		$field = array(
            'leader'=>$this->input->post('leader'),
            'restriction'=>$this->input->post('restriction'),
	          'user'=>$this->input->post('user'),
	          'destination'=>$this->input->post('destination'),
	          'origin'=>$this->input->post('origin'),
	          'name'=>$this->input->post('tripname'),
	      	  'date'=>$this->input->post('tripdate')
	      	  //'date'=>date('Y-m-d H:i:s'),

		);
    $restriction = array
    (
      'members' => $this->input->post('user'),
       'restriction' => 'leader'


    );
    $currentDate = date('Y-m-d');

    if($this->check_date($field['date'])){
              $this->session->set_flashdata('error_msg', 'You currently have a scheduled trip for this day. Please select a different date. ');
              redirect(base_url() . 'trips/maketrip');
    }
    else{
       if($field['date'] > $currentDate){
            $this->db->insert('leadmem' ,$restriction);  
            $this->db->insert('userTrips', $field);
            return $field;

                 
           
      }
      else{
            $this->session->set_flashdata('error_msg', 'Date invalid');
            redirect(base_url() . 'trips/maketrip');
      }
    }
   
	}
  public function check_date($date){
        $this->db->where('date',$date);
        $this->db->from('usertrips');
        $query=$this->db->get(); 
        return $query->result();    
  }
    public function check_date_edit($date){
        $id = $this->input->post('uptrip');
        $this->db->where('id !=',$id);
        $this->db->where('date',$date);
        $this->db->from('usertrips');
        $query=$this->db->get(); 
        return $query->result();    
  }

    public function updateTrip(){
        $id = $this->input->post('uptrip');
        $field = array(
            'destination'=>$this->input->post('destination'),
            'origin'=>$this->input->post('origin'),
            'name'=>$this->input->post('tripname'),
            'date'=>$this->input->post('tripdate')
         
          );
         $currentDate = date('Y-m-d');

        if($this->check_date_edit($field['date'])){
                  $this->session->set_flashdata('error_msg', 'You currently have a scheduled trip for this day. Please select a different date. ');
                  redirect(base_url() . 'dashboard/editTrip/' .$id);
        }
        else{
           if($field['date'] > $currentDate){
                $this->db->where('id', $id);
                $this->db->update('usertrips', $field);
                if($this->db->affected_rows() > 0){
                  return true;
                }
          }
          else{
                $this->session->set_flashdata('error_msg', 'Date invalid');
                redirect(base_url() . 'dashboard/editTrip/' .$id);
          }
        }
     
  }


	public function getTrip(){
  		$query=$this->db->get('usertrips');
  		return $query->result();
  	}
  	public function getOrigin(){
  		$query=$this->db->get('places');
  		return $query->result();
  	}
    public function getRegion(){
      $query=$this->db->get('region');
      return $query->result();
    }
    public function getProvince(){
      $query=$this->db->get('province');
      return $query->result();
    }
    public function getCity(){
      $query=$this->db->get('city');
      return $query->result();
    }

  	public function addRegion(){
		$field = array(
	          'region'=>$this->input->post('region'),
	          
		);
		if($this->check_region($field['region'])){
              $this->session->set_flashdata('error_msg', 'Region already registered');
              redirect(base_url() . 'trips/region');
          }
          else{
              $this->db->insert('region', $field);
              if($this->db->affected_rows() > 0){
                return true;
              }
              else{
                return false;
              }
        }
    }

    public function addProvince(){
		$field = array(
	          'province'=>$this->input->post('province'),
	          
		);
		if($this->check_province($field['province'])){
              $this->session->set_flashdata('error_msg', 'Province already registered');
              redirect(base_url() . 'trips/province');
          }
          else{
              $this->db->insert('province', $field);
              if($this->db->affected_rows() > 0){
                return true;
              }
              else{
                return false;
              }
        }
    }

    public function addCity(){
		$field = array(
	          'city'=>$this->input->post('city'),
	          
		);
		if($this->check_city($field['city'])){
              $this->session->set_flashdata('error_msg', 'City already registered');
              redirect(base_url() . 'trips/city');
          }
          else{
              $this->db->insert('city', $field);
              if($this->db->affected_rows() > 0){
                return true;
              }
              else{
                return false;
              }
        }
    }

    public function check_region($region){
        $this->db->where('region',$region);
        $this->db->from('region');
        $query=$this->db->get();
        if($query->num_rows() > 0)  
           {  
                return $query->result();  
           }  
           else  
           {  
                return $query->result();       
           }  
      }
      public function check_province($province){
        $this->db->where('province',$province);
        $this->db->from('province');
        $query=$this->db->get();
        if($query->num_rows() > 0)  
           {  
                return $query->result();  
           }  
           else  
           {  
                return $query->result();       
           }  
      }
      public function check_city($city){
        $this->db->where('city',$city);
        $this->db->from('city');
        $query=$this->db->get();
        if($query->num_rows() > 0)  
           {  
                return $query->result();  
           }  
           else  
           {  
                return $query->result();       
           }  
      }


    public function getTrips(){
      $query=$this->db->get('usertrips');
      return $query->result();
    }
    public function getTouristSpot(){
      $this->db->order_by('tourist_name', 'asc');
      $query = $this->db->get('tbl_blogs');
          return $query->result();
    }

    public function jointrip($user){
      $this->db->where('user', $user);
      $query = $this->db->get('usertrips');
      return $query->row();
   }
    public function pakita($id){
      $this->db->where('id', $id);
      $query = $this->db->get('usertrips');
      return $query->row();
   }
   public function requestjoin($user,$id){
      $field = array(
        'tripid' => $id ,
        'members' => $user ,
        'restriction' => 'viewer'

      );
      //print_r($field);exit();
       $this->db->insert('leadmem', $field);
   }
   public function getRestriction(){
    $query=$this->db->get('leadmem');
    return $query->result(); 
   }

   public function changeID($result){
   
    $this->db->where('destination',$result['destination']);
    $this->db->where('origin',$result['origin']);
    $this->db->where('name',$result['name']);
    $this->db->where('date',$result['date']);
    $this->db->where('leader',$result['leader']);
    $this->db->where('user',$result['user']);
    $query=$this->db->get('usertrips');
    return $query->result();
   }




}
