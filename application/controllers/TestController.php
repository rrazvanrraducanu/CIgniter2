<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestController extends CI_Controller {

	public function index()
	{
                    //$data['nume']="Popescu Bogdan";
            $data=[
            "nume"=>"Popescu",
            "prenume"=>"Bogdan"
        ];
            $this->load->view('test_view',$data);
	} 
        public function index1(){
          $data['val']=array("Popescu", "Bogdan", "Matematica");
          $this->load->view('test_view1',$data);
      }

}
