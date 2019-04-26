$(document).ready(function(){
    $('body').on('click', '#menuLivro', function (event) {
        event.preventDefault();
        var Dados=$(this).serialize();
        $.ajax({
            url:'http://localhost/Clig/index.php/livro/',
            type:'post',
            dataType: 'html',
            data: Dados,
            success:function (Dados) { //TIREI  O PARAMETRO DA FUNCTION
                $('.divMeioInferiorConteudoCentral').html(Dados);
            }
        })
    });
});

/*--------------------------------------------------------------------------------*/

$(document).ready(function(){
    $('body').on('submit', '#formBuscaLivro', function (event) {
        event.preventDefault();
        var Dados=$(this).serialize();
        $.ajax({
            url:'http://localhost/Clig/index.php/livro/buscarLivro/',
            type:'post',
            dataType: 'html',
            data: Dados,
            success:function (Dados) { //TIREI  O PARAMETRO DA FUNCTION
                $('.divMeioInferiorConteudoCentral').html(Dados);
            }
        })
    });
});

/*---------------------------------------------------------------------------------*/


$(document).ready(function(){
    $('body').on('click', '#menuPesquisar', function (event) {
        event.preventDefault();
        var Dados=$(this).serialize();
        $.ajax({
            url:'http://localhost/Clig/index.php/livro/formPesquisarLivro/',
            type:'post',
            dataType: 'html',
            data: Dados,
            success:function (Dados) { //TIREI  O PARAMETRO DA FUNCTION
                $('.divMeioSuperiorConteudoEsquerda').html(Dados);
            }
        })
    });
});

$(document).ready(function(){
    $('body').on('click', '#menuCadastrar', function (event) {
        event.preventDefault();
        var Dados=$(this).serialize();
        $.ajax({
            url:'http://localhost/Clig/index.php/livro/formCadastrarLivro/',
            type:'post',
            dataType: 'html',
            data: Dados,
            success:function (Dados) { //TIREI  O PARAMETRO DA FUNCTION
                $('.divMeioSuperiorConteudoCentral').html(Dados);
            }
        })
    });
});

$(document).ready(function(){
    $('body').on('click', '#menuAlterar', function (event) {
        event.preventDefault();
        var Dados=$(this).serialize();
        $.ajax({
            url:'http://localhost/Clig/index.php/livro/formAlterarLivro/',
            type:'post',
            dataType: 'html',
            data: Dados,
            success:function (Dados) { //TIREI  O PARAMETRO DA FUNCTION
                $('.divMeioSuperiorConteudoCentral').html(Dados);
            }
        })
    });
});



//Notificação alerta div
function notificacaoCrud(tipo, menssagem){
    let div = document.getElementById('notificacao');
    let notificacao = menssagem; //tipo boleano

    if(notificacao != true){
        menssagem = "Erro ao realizar a ação";
    }else{
        menssagem = "Ação realizada com sucesso";
    }

    $ (div).css('display','block');
    $ (div).css({'border-width':'2px'});
    if(tipo != true){
        $ (div).css({'border-color':'#ef172f'});
        $ (div).css({'background-color':'rgba(185, 51, 58, 0.2)'});
        $ (div).html(menssagem);
    }else{
        $ (div).css({'border-color':'#50ef24'});
        $ (div).css({'background-color':'rgba(53, 185, 51, 0.2)'});
        $ (div).html(menssagem);
    }
    //console.log("Menssagem final da operação:" + menssagem);
    setTimeout(function () {$('.divMeioSuperiorConteudoDireitaSuperior').fadeOut('slow')},3000);
}

/*
//Abertura dos links do menu principal e inferior nas divs
$(document).ready(function() {
    $('body').on('click','.link', function(event) {
        event.preventDefault();
        var link=$(this).attr('id');
        switch(link) {
            case "menuPrincipal":

                break;
            case "menuLivro":
                $('.divMeioInferiorConteudoCentral').load("listagemCompleta.php?termo={"+ link +"}");
                break;
            case "menuCategoria":
                $('.divMeioSuperiorConteudoEsquerda').load("/PDO/Includes/FormularioCadastro.php");
                $('.divMeioInferiorConteudoCentral').load("listagemCompleta.php?termo="+ link +"}");
                break;
            case "menuCadastrar":
                $('.divMeioSuperiorConteudoCentral').load("/PDO/Includes/formularioCadastrarAlterarLivro.php");
                $('.divMeioSuperiorConteudoEsquerda').load("branco.php");
                break;
            case "menuPesquisar":
                $('.divMeioSuperiorConteudoEsquerda').load("/PDO/Includes/FormularioBuscaLivro.php");
                $('.divMeioSuperiorConteudoCentral').load("branco.php");
                break;
            case "menuLimpar":
                $('.divMeioSuperiorConteudoEsquerda').load("branco.php");
                $('.divMeioSuperiorConteudoCentral').load("branco.php");
                $('.divMeioSuperiorConteudoDireitaCentral').load("branco.php");
                $('.divMeioInferiorConteudoCentral').load("branco.php");
                break;
            default:
                //$('.divMeioSuperiorConteudoEsquerda').load("");
                //$('.divMeioInferiorConteudoCentral').load("");
        }
    });
});
*/