
 
$(document).ready(function(){

   
    //CADASTRAR FILMES
    $("#form").submit(function(event){
        event.preventDefault();
        var form = new FormData(this);
        $.ajax({
            url:"ConexaoCadastro.php",
            method:"post",
            data : form,
            dataType: "json",
            processData:false,
            contentType:false
        })
        alert("Cadastrado com sucesso...");
        $("#NomeFilme").val('');
        $("#LegendaFilme").val('');
        $("#AnoFilme").val('');
        $("#GeneroFilme").val('');
        $("#TituloFilme").val('');
        $("#DuracaoFilme").val('');
        $("#TamanhoFilme").val('');
        $("#DestaqueFilme").val('');
        $("#TrailerFilme").val('');
        $("#VideoFilme").val('');
        $("#ImagemFilme").val('');
        $("#DataFilme").val('');
        $("#IdFilme").val('');
        $("#AudioFilme").val('');
        $("#RealizadorFilme").val('');
        $("#Imagem0").val('');
        $("#Elenco1").val('');
        $("#Imagem1").val('');
        $("#Elenco2").val('');
        $("#Imagem2").val('');
        $("#Elenco3").val('');
        $("#Imagem3").val('');
        $("#Elenco4").val('');
        $("#Imagem4").val('');
        $("#Elenco5").val('');
        $("#Imagem5").val('');
        $("#Elenco6").val('');
        $("#Imagem6").val('');
        $("#Elenco7").val('');
        $("#Imagem7").val('');
        $("#Elenco8").val('');
        $("#Imagem8").val('');
        $("#Elenco9").val('');
        $("#Imagem9").val('');
        $("#texto").val('');
        
    })
   

    //PEGAR ID PARA ALTERAR IMAGENS DO SLIDE//
    $(".alt").click(function(event){
        event.preventDefault();
        var id = $(this).data('idalt');
        var bt = $(this).text();
        $.ajax({
            url:"ConexaoCadastro.php",
            method:"post",
            data:{bt:bt,id:id},
            dataType: "json",
            success: function(dados){
             var valor1 = $("#valor").html(dados.img1).text();
             $("#input1").val(valor1);
             var valorId1 = $("#valor").html(dados.idFilme1).text();
             $("#idFilmeAlt1").val(valorId1);
             var valor2 = $("#valor").html(dados.img2).text();
             $("#input2").val(valor2);
             var valorId2 = $("#valor").html(dados.idFilme2).text();
             $("#idFilmeAlt2").val(valorId2);
             var valor3 = $("#valor").html(dados.img3).text();
             $("#input3").val(valor3);
             var valorId3 = $("#valor").html(dados.idFilme3).text();
             $("#idFilmeAlt3").val(valorId3);
             var valor4 = $("#valor").html(dados.img4).text();
             $("#input4").val(valor4);
             var valorId4 = $("#valor").html(dados.idFilme4).text();
             $("#idFilmeAlt4").val(valorId4);
             var valorId = $("#valor").html(dados.id).text();
             $("#valorId").val(valorId);
            }
        })
    })
     //CADASTRAR NOVOS SLIDES 
     $("#formCadSlide").submit(function(event){
        event.preventDefault();
        var form = new FormData(this);
        $.ajax({
            url:"ConexaoCadastro.php",
            method:"post",
            data : form,
            dataType: "json",
            processData:false,
            contentType:false
        })
        alert("Cadastrado com sucesso...");
        
    })
      //CADASTRAR SLIDES ALTERADOS
      $("#formAltSlide").submit(function(event){
        event.preventDefault();
        var form = new FormData(this);
        $.ajax({
            url:"ConexaoCadastro.php",
            method:"post",
            data : form,
            dataType: "json",
            processData:false,
            contentType:false
        })
        alert("Alterado com sucesso...");
        
    })

     //ILIMINAR IMAGENS SLIDE//
     $(".ilim").click(function(event){
        event.preventDefault();
        var id = $(this).data('idiliminar');
        var bt = $(this).text();
        $.ajax({
            url:"ConexaoCadastro.php",
            method:"post",
            data:{btIlim:bt,id:id},
            dataType: "json",
            
        })
        alert("Iliminado...");
    })

     //PEGAR ID PARA ALTERAR FILME//
     $(".altcad").click(function(event){
        event.preventDefault();
        var id = $(this).data('idaltcad');
        var idFilme = $(this).data('idfilme');
        var bt = $(this).text();
        
        
        $.ajax({
            url:"ConexaoCadastro.php",
            method:"post",
            data:{btAltCad:bt,id:id},
            dataType: "json", 
            success: function(dados){
             var valorId = $("#valorCad").html(dados.id).text();
             $("#valorId1").val(valorId);
             var nome = $("#valorCad").html(dados.nome).text();
             $("#NomeFilme1").val(nome);
             var titulo = $("#valorCad").html(dados.titulo).text();
             $("#TituloFilme1").val(titulo);
             var genero = $("#valorCad").html(dados.genero).text();
             $("#GeneroFilme1").val(genero);
             var duracao = $("#valorCad").html(dados.duracao).text();
             $("#DuracaoFilme1").val(duracao);
             var audio = $("#valorCad").html(dados.audio).text();
             $("#AudioFilme1").val(audio);
             var legenda = $("#valorCad").html(dados.legenda).text();
             $("#LegendaFilme1").val(legenda);
             var tamanho = $("#valorCad").html(dados.tamanho).text();
             $("#TamanhoFilme1").val(tamanho);
             var destaque = $("#valorCad").html(dados.destaque).text();
             $("#DestaqueFilme1").val(destaque);
             var ano = $("#valorCad").html(dados.ano_lancamento).text();
             $("#AnoFilme1").val(ano);
             var data = $("#valorCad").html(dados.data_lancamento).text();
             $("#DataFilme1").val(data);
             var idFilme = $("#valorCad").html(dados.idFilme).text();
             $("#IdFilme1").val(idFilme);
            
            } 
        })
        
        
        //ELENCOS DO FILME
        $.ajax({
            url:"Conexao.php",
            method:"post",
            data:{btAltCad:bt,id:idFilme},
            dataType: "json", 
            success: function(dados){
             var realizador = $("#valorCad1").html(dados.realizador).text();
              $("#RealizadorFilme1").val(realizador);
              var elenco1 = $("#valorCad1").html(dados.elenco1).text();
              $("#Elenco11").val(elenco1);
              var elenco2 = $("#valorCad1").html(dados.elenco2).text();
              $("#Elenco21").val(elenco2);
              var elenco3 = $("#valorCad1").html(dados.elenco3).text();
              $("#Elenco31").val(elenco3);
              var elenco4 = $("#valorCad1").html(dados.elenco4).text();
              $("#Elenco41").val(elenco4);
              var elenco5 = $("#valorCad1").html(dados.elenco5).text();
              $("#Elenco51").val(elenco5);
              var elenco6 = $("#valorCad1").html(dados.elenco6).text();
              $("#Elenco61").val(elenco6);
              var elenco7 = $("#valorCad1").html(dados.elenco7).text();
              $("#Elenco71").val(elenco7);
              var elenco8 = $("#valorCad1").html(dados.elenco8).text();
              $("#Elenco81").val(elenco8);
              var elenco9 = $("#valorCad1").html(dados.elenco9).text();
              $("#Elenco91").val(elenco9);
              var texto = $("#valorCad1").html(dados.descricao).text();
              $("#texto1").val(texto);
            }
        }) 
        
        
    })

       //CADASTRAR FILMES ALTERADOS
       $("#formAltCad").submit(function(event){
        event.preventDefault();
        
        var form = new FormData(this);
        $.ajax({
            url:"ConexaoCadastro.php",
            method:"post",
            data : form,
            dataType: "json",
            processData:false,
            contentType:false
        })
        alert("Alterado com sucesso...");
        $("#NomeFilme1").val('');
        $("#LegendaFilme1").val('');
        $("#AnoFilme1").val('');
        $("#GeneroFilme1").val('');
        $("#TituloFilme1").val('');
        $("#DuracaoFilme1").val('');
        $("#TamanhoFilme1").val('');
        $("#DestaqueFilme1").val('');
        $("#TrailerFilme1").val('');
        $("#VideoFilme1").val('');
        $("#ImagemFilme1").val('');
        $("#DataFilme1").val('');
        $("#IdFilme1").val('');
        $("#AudioFilme1").val('');
        $("#RealizadorFilme1").val('');
        $("#Imagem01").val('');
        $("#Elenco11").val('');
        $("#Imagem11").val('');
        $("#Elenco21").val('');
        $("#Imagem21").val('');
        $("#Elenco31").val('');
        $("#Imagem31").val('');
        $("#Elenco41").val('');
        $("#Imagem41").val('');
        $("#Elenco51").val('');
        $("#Imagem51").val('');
        $("#Elenco61").val('');
        $("#Imagem61").val('');
        $("#Elenco71").val('');
        $("#Imagem71").val('');
        $("#Elenco81").val('');
        $("#Imagem81").val('');
        $("#Elenco91").val('');
        $("#Imagem91").val('');
        $("#texto1").val('');
        
    })

    //ILIMINAR FILMES
    $(".ilimcad").click(function(event){
        event.preventDefault();
        var id = $(this).data('idiliminarcad');
        var bt = $(this).text();
        $.ajax({
            url:"ConexaoCadastro.php",
            method:"post",
            data:{btIlimCad:bt,id:id},
            dataType: "json",
            
        })
        alert("Iliminado...");
    })


    //BOTAO LIKE NO FILME
    $("#btLike").click(function(event){
        event.preventDefault();
        var btLike = $(this).text();
        var IdLike = $("#IdValor").val();
        var likes = $("#likes").val();
        likes++;
        $.ajax({
            url:"Conexao.php",
            method:"post",
            data:{btLike:btLike,IdLike:IdLike,likes:likes},
            dataType: "json",
            success: function(dados){
                $("#likes").html(dados.likes).text();
                $("#mostraLike").html(dados.likes).text();
            }   
        })
    })

    //BOTAO BAIXAR
    $("#btBaixar").click(function(){
        
        var btBaixar = $(this).text();
        var IdBaixar = $("#IdValor").val();
        var baixados = $("#baixados").val();
        baixados++;
        $.ajax({
            url:"Conexao.php",
            method:"post",
            data:{btBaixar:btBaixar,IdBaixar:IdBaixar,baixados:baixados},
        })
        
    }) 

    //BOTAO ASSISTIR
    
    $("#btAssiste").click(function(event){
        event.preventDefault();
        var btAssiste = $(this).text();
        var IdLike = $("#IdValor").val();
        var assistiu = $("#assistiu").val();
        assistiu++;
        $.ajax({
            url:"Conexao.php",
            method:"post",
            data:{btAssiste:btAssiste,IdLike:IdLike,assistiu:assistiu},
            dataType: "json",
            success: function(dados){
                $("#assistiu").html(dados.assistiu).text();
            }   
        })
    })
    
    // BOTAO SUBSCREVER
    $("#btInscri").click(function(event){
        event.preventDefault();
        var btInscri = $(this).text();
        var idFilme = $("#idFilme").val();
        var nome = $("#nome").val();
        var pass = $("#pass").val();
        var telefone = $("#telefone").val();
        var referencia = $("#referencia").val();
        $.ajax({
            url:"Conexao.php",
            method:"post",
            data:{btInscri:btInscri,idFilme:idFilme,nome:nome,pass:pass,telefone:telefone,referencia:referencia}
        })
        alert("Assinado com Sucesso...");
    })

// BOTAO DE PARA CONFRONTAR OS INSCRITOS
    $("#btSub").click(function(event){
        var btSub = $(this).text();
        var nome = $("#nome1").val();
        var pass = $("#pass1").val();
        $.ajax({
            url:"Conexao.php",
            method:"post",
            //dataType:"json",
            data:{btSub:btSub,nome:nome,pass:pass},
            success:function(dados){
              var valor = $("#valorRetorno").html(dados).text();
              if(valor=="sim"){
                var esconder = document.getElementById("subscrito");
                esconder.hidden = true;
                var esconder1 = document.getElementById("mostraBt");
                esconder1.hidden = false;
              }else{
                  alert("Assinante Não Inscrito...");
              }
            }
        })
       
    })

})