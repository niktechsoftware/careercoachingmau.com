<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function about()
	{
		$this->load->view('about');
	}
	public function slideshow()
	{
		$this->load->view('slideshow');
	}
	public function studentvoice()
	{
		$this->load->view('studentvoice');
	}
	public function sliderfooter()
	{
		$this->load->view('sliderfooter');
	}
	public function principals_message()
	{
		$this->load->view('principals_message');
	}
	public function chairmanMessage()
	{
		$this->load->view('chairmanMessage');
	}
	public function department()
	{
		$this->load->view('department');
	}
	public function vmo()
	{
		$this->load->view('vision_mission_obj');
	}
	public function important_dates()
	{
		$this->load->view('important_dates');
	}
	public function naac()
	{
		$this->load->view('naac');
	}
	public function ost()
	{
		$this->load->view('ost');
	}
	public function seat_ability()
	{
		$this->load->view('seat_ability');
	}
	public function reserveration_for_exam()
	{
		$this->load->view('reserveration_for_exam');
	}
	public function general_instructions()
	{
		$this->load->view('general_instructions');
	}
	public function cgl()
	{
		$this->load->view('cgl');
	}
	public function managerDesk()
	{
		$this->load->view('managerDesk');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */