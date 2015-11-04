<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
		$this->load->model('News_model','news');
	}
	public function index()
	{
		$this->load->view('Client/client_main');
	}

	public function intro()
	{	
		$this->load->view('Client/client_intro');
	}
	public function volunteer()
	{
		$this->load->view('Client/client_volunteer');
	}
	public function donate()
	{
		$this->load->view('Client/client_donate');
	}
	public function difference()
	{
		$this->load->view('Client/client_difference');
	}
	public function projects()
	{
		$this->load->view('Client/client_projects');
	}
	public function projectsig()
	{
		$this->load->view('Client/client_projects_ig');
	}
	public function news()
	{	
		$data['news']=$this->news->get_all();
		$this->load->view('Client/client_news', $data);
	}
	public function detail()
	{
		$news_id=$this->uri->segment(3);
		$data['detail']=$this->news->get($news_id);
		$this->load->view('Client/client_news_detail', $data);
	}
	public function gallary()
	{
		$this->load->view('Client/client_gallary');
	}
}