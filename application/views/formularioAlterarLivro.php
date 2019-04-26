<?php
defined('BASEPATH') OR exit('No direct script access allowed');


foreach ($livro as $info) {?>
<div class="Formulario">
    <div class="Titulo">
        <h1> </h1>
    </div>
    <form name="FormCadastroLivro" id="FormCadastroLivro" method="post" action="<?php echo site_url('livro/alterarLivro/');?>">
        <input type="hidden" id="id" name="id" value="<?php echo $info->id;?>">

        <div>
            <label>Titulo:</label><br>
            <input class="inputForm" id="titulo"  name="titulo" required type="text" maxlength="50" placeholder="Qual o nome da obra ?" value="<?php echo $info->titulo;?>"> 
        </div>
        <div>
            <label>Autor:</label><br>
            <input class="inputForm" id="autor"  name="autor" required type="text" maxlength="50" placeholder="Qual escreveu a obra?" value="<?php echo $info->autor;?>">
        </div>
        <div>
            <label>Editora:</label><br>
            <input class="inputForm" id="editora"  name="editora" required type="text" maxlength="50" placeholder="Qual publicou a obra" value="<?php echo $info->editora;?>" >
        </div>
        <div>
            <label>Ano:</label><br>
            <input class="inputForm" id="ano" name="ano" required type="text" maxlength="4" pattern="[0-9]+$" placeholder="Em qual ano foi publicado ?" value="<?php echo $info->ano;?>">
        </div>
        <div>
            <label>Categoria:</label><br>
            <select class="inputForm" id="categoria" name="categoria" required>
                <option value="<?php echo $info->categoria;?>"></option>
                <?php
                    foreach ($categoria as $result) {
                        if($result->categoria == $info->categoria){
                            ?>
                            <option selected value="<?php echo $result->categoria;?>"><?php echo $result->categoria; ?></option>
                            <?php
                        }else{?>
                            <option value="<?php echo $result->categoria;?>"><?php echo $result->categoria; ?></option>
                        <?php
                        }?>
                    <?php
                    } 
                ?>
            </select>
            <br>
            <?php
            if($info->status >=1){?>
                <input type="radio" checked="checked" id="status" name="status" value="<?php echo $info->status;?>"><label>Disponivel</label>
                <input type="radio" id="status" name="status" value="<?php echo $info->status;?>"><label>Indisponivel</label>
            <?php
            }else{?>
                <input type="radio" id="status" name="status" value="<?php echo $info->status;?>"><label>Disponivel</label>
                <input type="radio" checked="checked" id="status" name="status" value="<?php echo $info->status;?>"><label>Indisponivel</label>
            <?php
            }?>
        </div>
        <div>
        </div>
        <div class="FormularioInput100">
            <input class="inputBtnForm" type="submit" value="Cadastrar">
        </div>
    </form>
</div>
<?php
};
