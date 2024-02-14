<!DOCTYPE html>
<html lang="pt-pt">
<head>
<?php  $conexao = mysqli_connect("localhost","root","","afromovebd"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="js/RequisicaoAjax.js"></script>
    
    <title>Cadastro</title>
</head>
<style>
.container div{
    margin-right: 10px;
}
h1{
    text-align:center;
}
#divBt{
  margin-left: 200px;
  margin-top: -38px;
}
#form1{
  height: 20vh;
  border: 2px solid blue;
  overflow: auto;
}
#form2{
  height: 60vh;
  border: 2px solid lime;
  overflow: auto;
}
</style>
<body>
    <br>
    <!-- CADASTRAR NOVOS FILMES -->
    <form class="container" method="post" entype="multipart/form-data" id="form">
      <div class="d-flex  col-md-12">
          <div class="form-floating mb-3 col-md-6">
            <input type="text" class="form-control" id="NomeFilme" name="NomeFilme">
            <label for="floatingInput">Produção</label>
          </div>
          <div class="form-floating col-md-2">
            <input type="text" class="form-control" id="LegendaFilme" name="LegendaFilme">
            <label for="floatingPassword">Legenda</label>
          </div>
          <div class="form-floating col-md-2">
            <input type="number" class="form-control" id="AnoFilme" name="AnoFilme">
            <label for="floatingPassword">Ano Lançamento</label>
          </div>
          <div class="form-floating col-md-2">
            <select type="password" class="form-control" id="GeneroFilme" name="GeneroFilme">
            <option>Comédia</option>
            <option>Acção</option>
            <option>Drama</option>
            <option>Terror</option>
            </select>
            <label for="floatingPassword">Genero</label>
          </div>
      </div>

      <div class="d-flex  col-md-12">
          <div class="form-floating mb-3 col-md-6">
            <input type="text" class="form-control" id="TituloFilme" name="TituloFilme">
            <label for="floatingInput">Titulo</label>
          </div>
          <div class="form-floating col-md-2">
            <input type="text" class="form-control" id="DuracaoFilme" name="DuracaoFilme">
            <label for="floatingPassword">Duração</label>
          </div>
          <div class="form-floating col-md-2">
            <input type="text" class="form-control" id="TamanhoFilme" name="TamanhoFilme">
            <label for="floatingPassword">Tamanho</label>
          </div>
          <div class="form-floating col-md-2">
            <select type="text" class="form-control" id="DestaqueFilme" name="DestaqueFilme">
            <option>Não</option>
            <option>Sim</option>
            </select>
            <label for="floatingPassword">Destaque</label>
          </div>
      </div>

      <div class="d-flex  col-md-12">
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="TrailerFilme" name="TrailerFilme">
            <label for="floatingInput">Trailer</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="VideoFilme" name="VideoFilme">
            <label for="floatingInput">Video</label>
          </div>
          <div class="form-floating col-md-2">
            <input type="file" class="form-control" id="ImagemFilme" name="ImagemFilme">
            <label for="floatingPassword">Imagem Capa</label>
          </div>
          <div class="form-floating col-md-2">
            <input type="date" class="form-control" id="DataFilme" name="DataFilme">
            <label for="floatingPassword">Date</label>
          </div>
          <div class="form-floating col-md-2">
            <input type="text" class="form-control" id="IdFilme" name="IdFilme">
            <label for="floatingPassword">Id Filme</label>
          </div>
          <div class="form-floating col-md-2">
            <select type="password" class="form-control" id="AudioFilme" name="AudioFilme">
            <option>Português</option>
            <option>Inglês</option>
            <option>Francês</option>
            </select>
            <label for="floatingPassword">Audio</label>
          </div>  
      </div>
     
      <!-- ELENCOS DO FILME -->
      <h1>Elencos</h1>
      <div class="d-flex  col-md-12">
          <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="RealizadorFilme" name="RealizadorFilme">
            <label for="floatingInput">Nome Realizador</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem0" name="Imagem0">
            <label for="floatingInput">Imagem</label>
          </div>
          <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="Elenco1" name="Elenco1">
            <label for="floatingInput">Elenco 1</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem1" name="Imagem1">
            <label for="floatingInput">Imagem</label>
          </div>
     </div>

     <div class="d-flex  col-md-12">
         <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="Elenco2" name="Elenco2">
            <label for="floatingInput">Elenco 2</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem2" name="Imagem2">
            <label for="floatingInput">Imagem</label>
          </div>
          <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="Elenco3" name="Elenco3">
            <label for="floatingInput">Elenco 3</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem3" name="Imagem3">
            <label for="floatingInput">Imagem</label>
          </div>
     </div>

     <div class="d-flex  col-md-12">
          <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="Elenco4" name="Elenco4">
            <label for="floatingInput">Elenco 4</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem4" name="Imagem4">
            <label for="floatingInput">Imagem</label>
          </div>
          <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="Elenco5" name="Elenco5">
            <label for="floatingInput">Elenco 5</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem5" name="Imagem5">
            <label for="floatingInput">Imagem</label>
          </div>
     </div>

     <div class="d-flex  col-md-12">
         <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="Elenco6" name="Elenco6">
            <label for="floatingInput">Elenco 6</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem6" name="Imagem6">
            <label for="floatingInput">Imagem</label>
          </div>
          <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="Elenco7" name="Elenco7">
            <label for="floatingInput">Elenco 7</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem7" name="Imagem7">
            <label for="floatingInput">Imagem</label>
          </div>
     </div>

     <div class="d-flex  col-md-12">
         <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="Elenco8" name="Elenco8">
            <label for="floatingInput">Elenco 8</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem8" name="Imagem8">
            <label for="floatingInput">Imagem</label>
          </div>
          <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="Elenco9" name="Elenco9">
            <label for="floatingInput">Elenco 9</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem9" name="Imagem9">
            <label for="floatingInput">Imagem</label>
          </div>
     </div>

     
      <textarea placeholder="descrição do filme" cols="135" rows="5" id="texto" name="texto"></textarea><br>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
     
    </form>
    <div id="divBt">
      <button  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalDefault1">Cadastrar Slides</button>
      <button  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Alterar</button>
    </div>
</body>
</html>








<!-- MODAL -->
   



<div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-body">
      <div id="form1">
        <?php
           $bancoAlt = "SELECT *FROM slide";
           $dadosAlt = mysqli_query($conexao,$bancoAlt);
           $n1 = 1;
        ?>
        <table class="table table-sm table-bordered">
          <thead>
          <tr class="table-dark">
            <th scope="col">N</th>
            <th scope="col">Imagem 1</th>
            <th scope="col">Imagem 2</th>
            <th scope="col">Imagem 3</th>
            <th scope="col">Imagem 4</th>
            <th>Botão</th>
            <th >Botão</th>
          </tr>
          </thead>
          <tbody>
            <?php while($resultadoAlt = mysqli_fetch_array($dadosAlt)){?>
          <tr>
            <th scope="row"><?php echo $n1;?></th>
            <td><?php echo $resultadoAlt['img1'];?></td>
            <td><?php echo $resultadoAlt['img2'];?></td>
            <td><?php echo $resultadoAlt['img3'];?></td>
            <td><?php echo $resultadoAlt['img4'];?></td>
            <td><a href="#"   data-idalt="<?php echo $resultadoAlt['id'];?>" class="alt" data-bs-toggle="modal" data-bs-target="#exampleModalDefault" >Alterar</a></td>
            <td><a href="#" data-idiliminar="<?php echo $resultadoAlt['id'];?>" class="ilim">Iliminar</a></td>
          </tr>
          <?php $n1++;?>
          <?php }?>
         
          </tbody>
        </table>
        </div>
         <br>

      <div id="form2">
        <?php
           $bancoAlt = "SELECT *FROM infofilmetb";
           $dadosAlt = mysqli_query($conexao,$bancoAlt);
           $n = 1;
        ?>
        <table class="table table-sm table-bordered">
          <thead>
          <tr class="table-dark">
            <th scope="col">N</th>
            <th scope="col">Id</th>
            <th scope="col">Nome Filme</th>
            <th scope="col">Titulo</th>
            <th scope="col">Genero</th>
            <th scope="col">Destaque</th>
            <th scope="col">Ano Lançamento</th>
            <th scope="col">Like</th>
            <th scope="col">DesLike</th>
            <th>Botão</th>
            <th >Botão</th>
          </tr>
          </thead>
          <tbody>
            <?php while($resultadoAlt = mysqli_fetch_array($dadosAlt)){?>
          <tr>
            <th scope="row"><?php echo $n;?></th>
            <td><?php echo $resultadoAlt['idFilme'];?></td>
            <td><?php echo $resultadoAlt['nome'];?></td>
            <td><?php echo $resultadoAlt['titulo'];?></td>
            <td><?php echo $resultadoAlt['genero'];?></td>
            <td><?php echo $resultadoAlt['destaque'];?></td>
            <td><?php echo $resultadoAlt['ano_lancamento'];?></td>
            <td><?php echo $resultadoAlt['likes'];?></td>
            <td><?php echo $resultadoAlt['dislike'];?></td>
            <td><a href="#" data-idaltcad="<?php echo $resultadoAlt['id'];?>"  data-idfilme="<?php echo $resultadoAlt['idFilme'];?>"  class="altcad"  data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen1">Alterar</a></td>
            <td><a href="#" data-idiliminarcad="<?php echo $resultadoAlt['id'];?>" class="ilimcad">Iliminar</a></td>
          </tr>
          <?php $n++;?>
          <?php }?>
         
          </tbody>
        </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>





 <!-- MODAL CADASTRAR NOVAS IMAGENS DO SLIDER -->
 <form  method="post" entype="multipart/form-data" id="formCadSlide">
 <div class="modal fade " id="exampleModalDefault1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Imagens do Slide</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
          <div class="modal-body">
              <div class="d-flex  col-md-12">
                <div class="form-floating mb-3 col-md-3">
                   <input type="file" class="form-control" id="slide1" name="slide1">
                   <label for="floatingInput">Slide 1</label>
               </div>
               <div class="form-floating mb-3 col-md-3">
                  <input type="file" class="form-control" id="slide2" name="slide2">
                  <label for="floatingInput">Slide 2</label>
               </div>
               <div class="form-floating mb-3 col-md-3">
                  <input type="file" class="form-control" id="slide3" name="slide3">
                  <label for="floatingInput">Slide 3</label>
               </div>
               <div class="form-floating mb-3 col-md-3">
                  <input type="file" class="form-control" id="slide4" name="slide4">
                 <label for="floatingInput">Slide 4</label>
              </div>
          
            </div>
         </div>
         <div class="modal-body">
              <div class="d-flex  col-md-12">
                <div class="form-floating mb-3 col-md-3">
                   <input type="text" class="form-control" id="idFilme1" name="idFilme1">
                   <label for="floatingInput">Id Filme1</label>
               </div>
               <div class="form-floating mb-3 col-md-3">
                   <input type="text" class="form-control" id="idFilme2" name="idFilme2">
                   <label for="floatingInput">Id Filme2</label>
               </div>
               <div class="form-floating mb-3 col-md-3">
                   <input type="text" class="form-control" id="idFilme3" name="idFilme3">
                   <label for="floatingInput">Id Filme3</label>
               </div>
               <div class="form-floating mb-3 col-md-3">
                   <input type="text" class="form-control" id="idFilme4" name="idFilme4">
                   <label for="floatingInput">Id Filme4</label>
               </div>
          
            </div>
         </div>
         <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Salvar</button>
         </div>
      </div>
    </div>
  </div>
</div>
</form>





 <!-- MODAL ALTERAR -->
 <form  method="post" entype="multipart/form-data" id="formAltSlide">
 <div class="modal fade" id="exampleModalDefault" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar as Imagens do Slide</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="valorId" name="valorId">
        <div class="d-flex  col-md-12">
           <div class="form-floating mb-3 col-md-3">
               <input type="text" class="form-control" id="input1" name="slideAlt1" readonly>
               <input type="file" class="form-control" id="slideAlt1" name="slideAlt1">
               <label for="floatingInput">Slide 1</label>
          </div>
          <div class="form-floating mb-3 col-md-3">
          <input type="text" class="form-control" id="input2" name="slideAlt1" readonly>
            <input type="file" class="form-control" id="slideAlt2" name="slideAlt2">
            <label for="floatingInput">Slide 2</label>
          </div>
          <div class="form-floating mb-3 col-md-3">
          <input type="text" class="form-control" id="input3" name="slideAlt1" readonly>
            <input type="file" class="form-control" id="slideAlt3" name="slideAlt3">
            <label for="floatingInput">Slide 3</label>
          </div>
          <div class="form-floating mb-3 col-md-3">
          <input type="text" class="form-control" id="input4" name="slideAlt1" readonly>
            <input type="file" class="form-control" id="slideAlt4" name="slideAlt4">
            <label for="floatingInput">Slide 4</label>
            <input type="hidden" id="valor">
          </div>
          
         </div>
         <div class="modal-body">
              <div class="d-flex  col-md-12">
                <div class="form-floating mb-3 col-md-3">
                   <input type="text" class="form-control" id="idFilmeAlt1" name="idFilmeAlt1">
                   <label for="floatingInput">Id Filme1</label>
               </div>
               <div class="form-floating mb-3 col-md-3">
                   <input type="text" class="form-control" id="idFilmeAlt2" name="idFilmeAlt2">
                   <label for="floatingInput">Id Filme2</label>
               </div>
               <div class="form-floating mb-3 col-md-3">
                   <input type="text" class="form-control" id="idFilmeAlt3" name="idFilmeAlt3">
                   <label for="floatingInput">Id Filme3</label>
               </div>
               <div class="form-floating mb-3 col-md-3">
                   <input type="text" class="form-control" id="idFilmeAlt4" name="idFilmeAlt4">
                   <label for="floatingInput">Id Filme4</label>
               </div>
          
            </div>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>
</form>



<form class="container" method="post" entype="multipart/form-data" id="formAltCad">
<input id="valorCad" type="hidden" >
<div class="modal fade" id="exampleModalFullscreen1" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
       <div class="modal-content">
             <div class="modal-body">
             <input id="valorId1" name="valorId1" type="hidden" >  
             <div class="d-flex  col-md-12">
          <div class="form-floating mb-3 col-md-6">
            <input type="text" class="form-control" id="NomeFilme1" name="NomeFilme1">
            <label for="floatingInput">Produção</label>
          </div>
          <div class="form-floating col-md-2">
            <input type="text" class="form-control" id="LegendaFilme1" name="LegendaFilme1">
            <label for="floatingPassword">Legenda</label>
          </div>
          <div class="form-floating col-md-2">
            <input type="number" class="form-control" id="AnoFilme1" name="AnoFilme1">
            <label for="floatingPassword">Ano Lançamento</label>
          </div>
          <div class="form-floating col-md-2">
            <select type="password" class="form-control" id="GeneroFilme1" name="GeneroFilme1">
            <option>Comédia</option>
            <option>Acção</option>
            <option>Drama</option>
            <option>Terror</option>
            </select>
            <label for="floatingPassword">Genero</label>
          </div>
      </div>

      <div class="d-flex  col-md-12">
          <div class="form-floating mb-3 col-md-6">
            <input type="text" class="form-control" id="TituloFilme1" name="TituloFilme1">
            <label for="floatingInput">Titulo</label>
          </div>
          <div class="form-floating col-md-2">
            <input type="text" class="form-control" id="DuracaoFilme1" name="DuracaoFilme1">
            <label for="floatingPassword">Duração</label>
          </div>
          <div class="form-floating col-md-2">
            <input type="text" class="form-control" id="TamanhoFilme1" name="TamanhoFilme1">
            <label for="floatingPassword">Tamanho</label>
          </div>
          <div class="form-floating col-md-2">
            <select type="text" class="form-control" id="DestaqueFilme1" name="DestaqueFilme1">
            <option>Sim</option>
            <option>Não</option>
            </select>
            <label for="floatingPassword">Destaque</label>
          </div>
      </div>

      <div class="d-flex  col-md-12">
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="TrailerFilme1" name="TrailerFilme1">
            <label for="floatingInput">Trailer</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="VideoFilme1" name="VideoFilme1">
            <label for="floatingInput">Video</label>
          </div>
          <div class="form-floating col-md-2">
            <input type="file" class="form-control" id="ImagemFilme1" name="ImagemFilme1">
            <label for="floatingPassword">Imagem Capa</label>
          </div>
          <div class="form-floating col-md-2">
            <input type="date" class="form-control" id="DataFilme1" name="DataFilme1">
            <label for="floatingPassword">Date</label>
          </div>
          <div class="form-floating col-md-2">
            <input type="text" class="form-control" id="IdFilme1" name="IdFilme1">
            <label for="floatingPassword">Id Filme</label>
          </div>
          <div class="form-floating col-md-2">
            <select type="password" class="form-control" id="AudioFilme1" name="AudioFilme1">
            <option>Português</option>
            <option>Inglês</option>
            <option>Francês</option>
            </select>
            <label for="floatingPassword">Audio</label>
          </div>  
      </div>
      
      <!-- ELENCOS DO FILME -->
      <h1>Elencos</h1>
      <input id="valorCad1" type="hidden" >
      <div class="d-flex  col-md-12">
          <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="RealizadorFilme1" name="RealizadorFilme1">
            <label for="floatingInput">Nome Realizador</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem01" name="Imagem01">
            <label for="floatingInput">Imagem</label>
          </div>
          <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="Elenco11" name="Elenco11">
            <label for="floatingInput">Elenco 1</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem11" name="Imagem11">
            <label for="floatingInput">Imagem</label>
          </div>
     </div>

     <div class="d-flex  col-md-12">
         <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="Elenco21" name="Elenco21">
            <label for="floatingInput">Elenco 2</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem21" name="Imagem21">
            <label for="floatingInput">Imagem</label>
          </div>
          <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="Elenco31" name="Elenco31">
            <label for="floatingInput">Elenco 3</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem31" name="Imagem31">
            <label for="floatingInput">Imagem</label>
          </div>
     </div>

     <div class="d-flex  col-md-12">
          <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="Elenco41" name="Elenco41">
            <label for="floatingInput">Elenco 4</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem41" name="Imagem41">
            <label for="floatingInput">Imagem</label>
          </div>
          <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="Elenco51" name="Elenco51">
            <label for="floatingInput">Elenco 5</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem51" name="Imagem51">
            <label for="floatingInput">Imagem</label>
          </div>
     </div>

     <div class="d-flex  col-md-12">
         <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="Elenco61" name="Elenco61">
            <label for="floatingInput">Elenco 6</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem61" name="Imagem61">
            <label for="floatingInput">Imagem</label>
          </div>
          <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="Elenco71" name="Elenco71">
            <label for="floatingInput">Elenco 7</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem71" name="Imagem71">
            <label for="floatingInput">Imagem</label>
          </div>
     </div>

     <div class="d-flex  col-md-12">
         <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="Elenco81" name="Elenco81">
            <label for="floatingInput">Elenco 8</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem81" name="Imagem81">
            <label for="floatingInput">Imagem</label>
          </div>
          <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" id="Elenco91" name="Elenco91">
            <label for="floatingInput">Elenco 9</label>
          </div>
          <div class="form-floating mb-3 col-md-2">
            <input type="file" class="form-control" id="Imagem91" name="Imagem91">
            <label for="floatingInput">Imagem</label>
          </div>
     </div>

     
      <textarea placeholder="descrição do filme" cols="135" rows="5" id="texto1" name="texto1"></textarea><br>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
                        

        </div>
    </div>
      
    </div>
  </div>
</div>
</form>




