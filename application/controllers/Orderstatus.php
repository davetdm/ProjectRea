<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orderstatus extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
	public function index($page = "orderstatus")
	{
        $data['title'] = ucfirst($page);
        $data["assets"] = $this->config->item('assets');
		$this->load->view($page, $data);
	}
}