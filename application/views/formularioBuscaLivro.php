<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<form class="FormularioBusca" name="formBuscaLivro" id="formBuscaLivro" method="post" action="<?php echo site_url('livro/buscarLivro/');?>">
    <div>
        <div>
            <label>Informe o tipo da busca:</label><br>
            <select class="inputForm" id="tipoBusca" name="tipoBusca" required>
                <option selected value=""></option>
                <option value="titulo">Titulo</option>
                <option value="autor">Autor</option>
                <option value="categoria">Categoria</option>
            </select>
        </div>
        
        <div>
            <label>Pesquisar por :</label><br>
            <input class="inputForm" type="text" id="termoBusca" required name="termoBusca" placeholder="Que livro você procura?">
        </div>
        <div class="FormularioInput100">
            <input class="inputBtnForm" type="submit" value="Buscar">
        </div>
    </div>
</form>