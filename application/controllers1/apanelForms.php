<?php
class ApanelForms extends CI_Controller{
	public function headline(){
		$data = array(
				"title" => $this->input->post("title"),
				"msg" => $this->input->post("content"),
				"date" => date("Y-m-d")
		);
		if($this->db->insert("heading",$data)){
			redirect("apanel/headline");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//-------------------------------------------------------------------------------------------------------------------------	
	public function editHeadline(){
		$data = array(
				"title" => $this->input->post("title"),
				"msg" => $this->input->post("content"),
				"date" => date("Y-m-d")
		);
		$this->db->where("id",$this->input->post("id"));
		if($this->db->update("heading",$data)){
			redirect("apanel/headline");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//-----------------------------------------------------------------------------------------------------------------------------	
	public function deleteHeadline(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("heading")){
			redirect("apanel/headline");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//-----------------------------------------------------------------------------------------------------------------------------	
	public function inquiry(){
		$name = $this->input->post("name");
		$data = array(
				"name" => $this->input->post("name"),
				"mobile" => $this->input->post("mobile"),
				"email" => $this->input->post("email"),
				"msg" => $this->input->post("msg"),
				"date" => date("Y-m-d")
		);
		if($this->db->insert("inquiry",$data)){
			if($this->input->post("contact") == "contact"):
				redirect("welcome/contact/true/$name");
			else:
				redirect("welcome/index/true/$name");
			endif;
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//-----------------------------------------------------------------------------------------------------------------------------
	public function deleteEnquiry(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("inquiry")){
			redirect("apanel/inquiry");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//------------------------------------------------------------------------------------------------------------------------------
	public function saveVacancies(){
		$data = array(
				"title" => $this->input->post("title"),
				"msg" => $this->input->post("content"),
				"date" => date("Y-m-d")
		);
		if($this->db->insert("vacancies",$data)){
			redirect("apanel/vacancies");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//------------------------------------------------------------------------------------------------------------------------------	
	public function deleteVacancy(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("vacancies")){
			redirect("apanel/vacancies");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//------------------------------------------------------------------------------------------------------------------------------
	public function saveDemoClass(){
		$name = $this->input->post("name");
		$data = array(
				"name" => $this->input->post("name"),
				"course" => $this->input->post("course"),
				"mobile" => $this->input->post("mobile"),
				"email" => $this->input->post("email"),
				"batchTime" => $this->input->post("timing"),
				"date" => date("Y-m-d")
		);
		if($this->db->insert("democlass",$data)){
			redirect("welcome/freeDemo/true/$name");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	//-----------------------------------------------------------------------------------------------------------------------------
	public function deleteDemoclass(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("democlass")){
			redirect("apanel/freeDemo");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//------------------------------------------------------------------------------------------------------------------------------
	public function saveCareer(){
		$i = "";
		$sub = implode(",",$this->input->post("subject"));
		$name = $this->input->post("name");
		$resume_name = time().trim($_FILES['resume']['name']);
		$this->load->library('upload');
		// Set configuration array for uploaded photo.
		$resume_path = realpath(APPPATH . '../assets/images/stuImage');
		$config['upload_path'] = $resume_path;
		$config['allowed_types'] = 'doc|docx|pdf';
		$config['max_size'] = '120';
		$config['file_name'] = $resume_name;
		// Upload first photo and create a thumbnail of it.
		if (!empty($_FILES['resume']['name'])) {
			$this->upload->initialize($config);
			if ($this->upload->do_upload('resume')) {
				// ---------------------------------- Redirect Success Page ----------------------
				$i = 'true';
			}
			else{
				echo $this->upload->display_errors();
			}
		}
		if(($i == 'true')){
			$data = array(
					"name" => $this->input->post("name"),
					"email" => $this->input->post("email"),
					"mobile" => $this->input->post("mobile"),
					"subject" => $sub,
					"qualification" => $this->input->post("qualification"),
					"specialization" => $this->input->post("specialization"),
					"experience" => $this->input->post("experience"),
					"resume" => $resume_name,
					"date" => date("Y-m-d")
			);
		
			if($this->db->insert("career",$data)){
				redirect("welcome/career/true/$name");
			}
			else{
				echo "Somthing going wrong. Please Contact Site administrator";
			}
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
		
	}
	//-----------------------------------------------------------------------------------------------------------------------------
	public function deleteCareer(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("career")){
			$old_img = $this->uri->segment(4);
			@chmod("assets/images/stuImage/" . $old_img, 0777);
			@unlink("assets/images/stuImage/" . $old_img);
			redirect("apanel/career");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	//------------------------------------------------------------------------------------------------------------------------------
	
	public function createTest(){
		$this->db->where("test_id",$this->input->post("test_id"));
		$this->db->from('create_test');
		$count = $this->db->count_all_results();
		if($count > 0){
			echo "<a href='".base_url()."apanel/createTest'>".$this->input->post("test_id")." is already in use. Please Choose another TestID.</a>";
		}
		else{
			$data = array(
					"test_id" => $this->input->post("test_id"),
					"test_name" => $this->input->post("test_name"),
					"total_question" => $this->input->post("total_question"),
					"marks_per_question" => $this->input->post("marks_per_question"),
					"nigatieve_marks" => $this->input->post("nigatieve_marks"),
					"max_time" => $this->input->post("max_time"),
					"first_section_name" => $this->input->post("first_section_name"),
					"second_section_name" => $this->input->post("second_section_name"),
					"third_section_name" => $this->input->post("third_section_name"),
					"fourth_section_name" => $this->input->post("fourth_section_name"),
					"ques1" => $this->input->post("ques1"),
					"ques2" => $this->input->post("ques2"),
					"ques3" => $this->input->post("ques3"),
					"ques4" => $this->input->post("ques4"),
					"date" => date("Y-m-d")
			);
			if($this->db->insert("create_test",$data)){
				redirect("apanel/testList");
			}
			else{
				echo "Somthing going wrong. Please Contact Site administrator";
			}
		}
	}
}