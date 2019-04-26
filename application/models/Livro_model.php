<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livro_model extends CI_Model {

    function __construct(){
     
        parent::__construct();    
    }

    public function cadastrarLivro($data){

        if($sql = $this->db->query("INSERT INTO livro 
        (titulo, autor, editora, ano, categoria, status) VALUES ('$data[titulo]','$data[autor]','$data[editora]','$data[ano]','$data[categoria]','0')")){
            $msg = "Sucesso na interação com o banco de dados";
            return $msg;
        }else{
            $msg = "Erro na interação com o banco de dados";
            return $msg;
        }

    }

    public function alterarLivro($data){

        if($sql = $this->db->query("UPDATE livro SET titulo = '$data[titulo]', autor = '$data[autor]', editora = '$data[editora]', ano = '$data[ano]', categoria = '$data[categoria]', status = '$data[status]' WHERE id = '$data[id]'")){
            $msg = "Sucesso na interação com o banco de dados";
            return $msg;
        }else{
            $msg = "Erro na interação com o banco de dados";
            return $msg;
        }
    }

    public function deletarLivro($id){

        if($sql = $this->db->query("DELETE FROM livro where id = $id")){
            $msg = "Sucesso na interação com o banco de dados";
            return $msg;
        }else{
            $msg = "Erro na interação com o banco de dados";
            return $msg;
        } 

    }

    public function pesquisarLivro($tipo, $termo){
        
        if($sql = $this->db->query("SELECT * FROM livro where $tipo = '$termo'")){
            return $sql->result();
        }else{
            $msg = "Erro na interação com o banco de dados";
            return $msg;
        }        
    }


    public function buscarTodosLivros(){

        if($sql = $this->db->query("SELECT * FROM livro")){
            return $sql->result();
        }else{
            $msg = "Erro na interação com o banco de dados";
            return $msg;
        }       
    }

    public function selecionarLivro($id){

        if($sql = $this->db->query("SELECT * FROM livro WHERE id=$id")){
            return $sql->result();
        }else{
            $msg = "Erro na interação com o banco de dados";
            return $msg;
        }       
    }

}

?>
    