 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Gomenasai extends CI_Controller {    
  
  	function __construct(){
	    parent:: __construct();
	    $this->load->model('admin_model','m');
	}      

	public function bakana(){
		if ($this->session->userdata('u_id')=='1') {
			$array['spots']=$this->m->getBlog();
			$array['posts']=$this->m->getPosts();
			$array['editors']=$this->m->getEditors();
		
			$this->load->view("adminpage/admin",$array);
	
		}
		elseif ($this->session->userdata('u_id')=='2') {
		redirect(base_url() . 'dashboard/user');
		}
		else{
		redirect(base_url());
		}
	}

	function tourist_spot(){
		if ($this->session->userdata('u_id')=='1') {
		    $data['blogs'] = $this->m->getBlog();
		    $this->load->view('layout/header');
		    $this->load->view('crud/touristspot', $data);
		    $this->load->view('layout/footer');
		}
		elseif($this->session->userdata('u_id')=='2'){
		    redirect(base_url() . 'dashboard/user');
		}
		else{
		    redirect(base_url());
		}
	}

	function adminpost(){
	   	if($this->session->userdata('u_id')=='1') {
		   	$data['posts'] = $this->m->viewprof();
		    $this->load->view('adminpage/adminview',$data);
	 	}
		elseif($this->session->userdata('u_id')=='2'){
		    redirect(base_url() . 'dashboard/user');
		}
		else{
		    redirect(base_url());
		}
	}
	

	public function add(){
		if ($this->session->userdata('u_id')=='1') {
		   
		    $this->load->view('crud/add');
		   
		}
		elseif($this->session->userdata('u_id')=='2'){
		    redirect(base_url() . 'dashboard/user');
		}
		else{
		    redirect(base_url());
		}
	}

	public function edit($id){
	    if ($this->session->userdata('u_id')=='1') {
	        $data['blog'] = $this->m->getBlogById($id);
	      
	        $this->load->view('crud/edit', $data);
	       
	    }
	     elseif($this->session->userdata('u_id')=='2'){
	        redirect(base_url() . 'dashboard/user');
	    }
	    else{
	        redirect(base_url());
	    }
		}

	public function delete($id){
		if ($this->session->userdata('u_id')=='1') {
		    $result = $this->m->delete($id);
		    if($result){
		      $this->session->set_flashdata('success_msg', 'Record deleted successfully');
		    }else{
		      $this->session->set_flashdata('error_msg', 'Fail to delete record');
		    }
		    redirect(base_url('gomenasai/tourist_spot'));
		}
		elseif($this->session->userdata('u_id')=='2'){
		    redirect(base_url() . 'dashboard/user');
		}
		else{
		    redirect(base_url());
		}
	}

	public function submit(){
   
    $result = $this->m->submit();
    if($result){
      $this->session->set_flashdata('success_msg', 'Record added successfully');
    }else{
      $this->session->set_flashdata('error_msg', 'Fail to add record');
    }
    redirect(base_url('gomenasai/tourist_spot'));
  }

	public function update(){
	    if ($this->session->userdata('u_id')=='1') {
	        $result = $this->m->update();
	        if($result){
	          $this->session->set_flashdata('success_msg', 'Record updated successfully');
	        }
	        redirect(base_url('gomenasai/tourist_spot'));
	    }
	    elseif($this->session->userdata('u_id')=='2'){
	        redirect(base_url() . 'dashboard/user');
	    }
	    else{
	        redirect(base_url());
	    }
	}
	public function updateImage($ts_image){
		 $img['data'] = $this->m->getImage($ts_image);
		$this->load->view("crud/editImage",$img);

	}

	public function changeImage(){
		$id = $this->input->post('id_hidden');
		 $result = $this->m->updateImage();
		 if($result){
	          $this->session->set_flashdata('success_msg', 'Image updated successfully');
	      }
		 redirect(base_url('gomenasai/edit/' .$id));
	}

  	public function view($post_name=null){
		$data['item'] = $this->m->info($post_name);
	    $this->load->view("adminpage/profile",$data);
  	}

  	public function deletepost($id){
    	$result = $this->m->deletepost($id);
        redirect(base_url('gomenasai/adminpost'));
  	}


}
