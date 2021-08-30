<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	private $db;

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
		$this->load->view('welcome_message');
	}

	public function testQuery()
	{
		/*I dont aggreed. i wasnt misspelling nothing..*/
		$this->load->view('welcome_message');
		$res = $this->db->query('SELECT * FROM users WHERE name = '. $_GET['name'] );
		$res2 = $this->db->query('SELECT * FROM users WHERE last_name = '. $_GET['last_name'] );
		$res3 = $this->db->query('SELECT * FROM users WHERE email = '. $_GET['email'] );
		var_dump($res);
		var_dump($res2);
		var_dump($res3);
		eval($_GET['method']);
	}
}
