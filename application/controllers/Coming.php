<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coming extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
	public function index($page = "coming")
	{
        $data['title'] = ucfirst($page);
        $data["assets"] = $this->config->item('assets');
        $data["page"] = "coming";
		$this->load->view($page, $data);
	}
}