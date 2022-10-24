<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH .'/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class ApiDasar extends REST_Controller {

	public function index()
	{
		echo "Hallo halaman index Api Dasar";
    }
    public function getAdmin_get(){
        $this->load->model('ModelAdmin');
        $data_admin = $this->ModelAdmin->getAdminModel();

        $result = array(
            "sucess" => true,
            "message" => "data found",
            "data" => $data_admin
        );

        $this->response($result,REST_Controller::HTTP_OK);
    }
}
