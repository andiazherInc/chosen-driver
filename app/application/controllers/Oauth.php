<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oauth extends CI_Controller {

	public function rest($user, $pass)
	{
        $json = array(
            'msg' => '',
            'response' => false,
            'data' => ''
        );
        if ( $this->input->get("user")!=null && $this->input->get("pass")!=null ) {
            $user = $this->input->get("user");
            $pass = $this->input->get("pass");
        }
        
        $this->load->model('usuario');
        $data = $this->usuario->login($user, $pass);
        if($data['usuario'] != null){
            $json['data'] = $data;
            $json['response'] = true;
        }
        else {
            $json['msg'] = "Access denegate";
        }
        echo json_encode($json);
        return;
	}
}
