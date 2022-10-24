<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH .'/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class ApiDasar extends REST_Controller {

	public function gi_admin() {
        $this->load->database();
        $data = $this ->db->get('admin');
        return $date->result_array();
    }
}