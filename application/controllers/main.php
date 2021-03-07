<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->view('dashboard');
	}
		public function us()
		{
			$this->load->view('user');
		}
		public function addcompl()
		{
			$this->load->view('addcomp');
		}
		public function ifb()
		{
			$this->load->view('interfb');
		}
		public function comp()
		{
			$this->load->view('complaints');
		}
	
}

	