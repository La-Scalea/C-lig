<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<div class="Formulario">
    <div class="Titulo">
        <h1> </h1>
    </div>
    <form name="FormCadastroLivro" id="FormCadastroLivro" method="post" action="<?php echo site_url('livro/cadastrarLivro/');?>">
        <div>
            <label>Titulo:</label><br>
            <input class="inputForm" id="titulo"  name="titulo" required type="text" maxlength="50" placeholder="Qual o nome da obra ?">
        </div>
        <div>
            <label>Autor:</label><br>
            <input class="inputForm" id="autor"  name="autor" required type="text" maxlength="50" placeholder="Qual escreveu a obra?">
        </div>
        <div>
            <label>Editora:</label><br>
            <input class="inputForm" id="editora"  name="editora" required type="text" maxlength="50" placeholder="Qual publicou a obra">
        </div>
        <div>
            <label>Ano:</label><br>
            <input class="inputForm" id="ano" name="ano" required type="text" maxlength="4" pattern="[0-9]+$" placeholder="Em qual ano foi publicado ?">
        </div>
        <div>
            <label>Categoria:</label><br>
            <select class="inputForm" id="categoria" name="categoria" required>
                <option selected value=""></option>
                <?php
                    foreach ($categoria as $result) {
                    ?>
                    <option value="<?php echo $result->categoria;?>"><?php echo $result->categoria; ?></option>
                    <?php
                    } 
                ?>
            </select>
        </div>
        <div>
        </div>
        <div class="FormularioInput100">
            <input class="inputBtnForm" type="submit" value="Cadastrar">
        </div>
    </form>
</div>