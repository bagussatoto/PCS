<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_simple extends CI_Controller {

public function index(){
        $this->load->model('M_admin');
        $data['admin'] = $this->M_admin->getAdmin();

        $data_json = array(
            "success" => true,
            "message" => "Data found",
            "data" => $data['admin'] 
        );

        echo json_encode($data_json);
    }

}