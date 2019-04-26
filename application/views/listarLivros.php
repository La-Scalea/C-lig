<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(count($livros)>=1){
    ?>
    <table class="TabelaCrud">
        <tr>
            <td>Titulo</td>
            <td>Autor</td>
            <td>Editora</td>
            <td>Ano</td>
            <td>Categoria</td>
            <td>Status</td>
            <td>Ações</td>
        </tr>
        <?php
        foreach($livros as $d) { ?>
        <tr>
            <td><?php echo $d->titulo; ?></td>
            <td><?php echo $d->autor; ?></td>
            <td><?php echo $d->editora; ?></td>
            <td><?php echo $d->ano; ?></td>
            <td><?php echo $d->categoria; ?></td>
            <?php
                if($d->status > 0){
                    ?>
                    <td id="ColunaBusca"><div class="bolaVerde"></div> </td>
                    <?php
                }else{
                    ?>
                    <td id="ColunaBusca"><div class="bolaVermelha"></div></td>
                    <?php
                }
            ?>
            <td>
                <a class="Visualizar link2" href=""><img src="<?php echo base_url('assets/images/Visualizar.png');?>" alt="Excluir" height="30" width="30" title="Visualizar"/></a>
               <a class="Alterar link"     href="<?php echo site_url('livro/formAlterarLivro/'.$d->id);?>"><img src="<?php echo base_url('assets/images/Alterar.png');?>" alt="Editar" height="30" width="30" title="Alterar"/></a>
                <a class="Deletar" href="<?php echo site_url('livro/deletarLivro/'.$d->id);?>"><img src="<?php echo base_url('assets/images/Deletar.png');?>" alt="Excluir" height="30" width="30" title="Deletar"/></a>                     
            </td>
        <tr>
        
        <?php
    }
    ?>
</table>
<?php
}else{
    ?>
    <p>Nenhuma Resultado encontrado<p>
    <?php
}

?>







        
