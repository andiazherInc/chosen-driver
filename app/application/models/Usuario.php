<?php

class Usuario extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function login($user, $pass){
        $this->db->where(
            array(
                'user' => $user,
                'pass' => $pass,
            )
        );
        $usuario = null;
        $query = $this->db->get('usuarios');
        if($query->row() != null){
            $usuario['usuario'] = $query->row();
            unset($usuario['usuario']->pass);
        }
        return $usuario;
    }
}