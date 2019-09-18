<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
	public function index($page = "delete")
	{
        $data['title'] = ucfirst($page);
        $data["assets"] = $this->config->item('assets');
		$this->load->view($page, $data);
    }
    function deleteProduct() {
		$id = isset($_POST['id']) ? $_POST['id'] : NULL;
		
		if($this->db->deleteProduct($id) === TRUE) {
			return TRUE;
		}
		
		return FALSE;
	}
}