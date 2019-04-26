<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livro extends CI_Controller {


    function __construct(){
     
        parent::__construct();

        $this->load->model('Livro_model','Livro');
        $this->load->model('Categoria_model', 'Categoria');
    }

	public function index()
	{
        $this->listaLivros();
    }
    //Lista todos os livros
    public function listaLivros()
	{      
        $livros['livros'] = $this->Livro->buscarTodosLivros();
        $lista=$this->load->view('listarLivros', $livros, true); 
        echo $lista;
    }

    //Abre o formulário de Pesquisa
    public function formPesquisarLivro()
    {
        $categoria['categoria'] = $this->Categoria->buscarCategoria();
        //$this->load->view('formularioBuscaLivro', $data);   
        $page=$this->load->view('formularioBuscaLivro',$categoria, TRUE);
        echo $page;   
    }

    //Abre o formulario de Cadastro
    public function formCadastrarLivro()
    {
        $categoria['categoria'] = $this->Categoria->buscarCategoria();
        $page=$this->load->view('formularioCadastrarLivro', $categoria, true); 
        echo $page;
    }

     //Abre o formulario de Alteração
     public function formAlterarLivro($id)
     {
        $data = array(
            'categoria'=> $this->Categoria->buscarCategoria(),
            'livro'=> $this->Livro->selecionarLivro($id)
        );

        $page=$this->load->view('formularioAlterarLivro', $data, true); 
        echo $page;
     }

    //Realiza a busca por meio dos campos do form
    public function buscarLivro()
    {
        $tipoBusca = $_POST["tipoBusca"];
        $termoBusca = $_POST["termoBusca"];

        $livros['livros'] = $this->Livro->pesquisarLivro($tipoBusca, $termoBusca);
        $page=$this->load->view('listarLivros', $livros, true); 
        echo $page;
    }
    //Cadastra o livro no banco
    public function cadastrarLivro(){

        $data = array(
            'titulo' => $this->input->post('titulo'),
            'autor' => $this->input->post('autor'),
            'editora' => $this->input->post('editora'),
            'ano' => $this->input->post('ano'),
            'categoria' => $this->input->post('categoria')
        );

        $resultado = $this->Livro->cadastrarLivro($data);
    }
    //Altera o livro já cadastrado
    public function alterarLivro(){

        $data = array(
            'id' => $this->input->post('id'),
            'titulo' => $this->input->post('titulo'),
            'autor' => $this->input->post('autor'),
            'editora' => $this->input->post('editora'),
            'ano' => $this->input->post('ano'),
            'categoria' => $this->input->post('categoria'),
            'status' => $this->input->post('status')
        );

        $resultado = $this->Livro->alterarLivro($data);
    }

    //Exclui o livro cadastrado
    public function deletarLivro($id){

        $resultado = $this->Livro->deletarLivro($id);
    }
}

