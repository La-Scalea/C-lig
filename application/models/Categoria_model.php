<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model {

    function __construct(){
     
        parent::__construct();
        
    }

    public function cadastrarCategoria(){
        
    }

    public function alterarCategoria(){
        
    }

    public function deletarCategoria(){

    }

    public function visualizarCategoria(){

    }


    public function buscarCategoria(){

        $sql = $this->db->query("SELECT categoria FROM categoria");       
        return $sql->result();
    }

}

?>
    