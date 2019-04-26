<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de livros</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
</head>
<body>
<div class="divEsquerda">
    <div class="divEsquerdaSuperior"></div>
    <div class="divEsquerdaCentral">
        <form class="menuPrincipal" name="FormMenu" id="FormMenu" method="post">
            <ul>
                <li><a id="menuLivro" class="link" name="livro" href="<?php echo site_url('livro/listaLivros');?>" title="Livros">Livros</a></li>
                <li><a id="menuCategoria" class="link" name="categoria" href="#" >Categorias</a></li>
            </ul>
        </form>
    </div>
    <div class="divEsquerdaInferior"></div>
</div>
<div class="divMeioSuperior"></div>
<div class="divMeio">
    <div class="divMeioSuperiorConteudo">
        <div class="divMeioSuperiorConteudoEsquerda">   
        </div>
        <div class="divMeioSuperiorConteudoCentral"> 
        </div>
        <div class="divMeioSuperiorConteudoDireita">
            <div class="divMeioSuperiorConteudoDireitaSuperior" id="notificacao"></div>
            <div class="divMeioSuperiorConteudoDireitaCentral">
            </div>
            <div class="divMeioSuperiorConteudoDireitaInferior">
            <form class="menuAuxiliar" name="FormMenuAuxiliar" id="FormMenuAuxiliar" method="post">
                <ul class="menuInferior">
                        <li><a id="menuPesquisar" class=""  href="<?php echo site_url('livro/formPesquisarLivro');?>" title="Pesquisar">Pesquisar</a></li>
                        <li><a id="menuCadastrar" class=""  href="<?php echo site_url('livro/formCadastrarLivro');?>" title="Cadastrar">Cadastrar</a></li>
                </ul>
            </form>
            </div>
        </div>
    </div>
    <div class="divMeioInferiorConteudo">
        <div class="divMeioInferiorConteudoCentral"> 
        </div>
    </div>
</div>
<div class="divDireita"></div>
<div class="divInferior"></div>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.0.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/JavaScript.js')?>"></script>
</body>
</html>

