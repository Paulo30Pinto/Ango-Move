<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php  $conexao = mysqli_connect("localhost","root","","afromovebd"); ?>
    <meta charset="UTF-8">
    <meta charset="iso-8859-1" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes Blog</title>
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet" /> 
    <link href="bootstrap/fontawesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="" type="text/css" media="all">
    <link rel="stylesheet" href="css/master.css" type="text/css" media="all">
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>   
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/RequisicaoAjax.js"></script>
    
</head>
<body>
    <div class="container-fluid" id="cabecao">
                
                <!--CABEÇALHO-->
                <header class="navbar navbar-expand-lg navbar-light">
                    <div class="container-xxl">
   
                        <h1 class="" id="joker">AFRO MOVE</h1>
            
                        <div class="navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">

                                </li>
                
                            </ul>
                            <form class="d-flex" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="inputPesq">
                                <button class="btn btn-dark" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </header>
            </div>
    <div class="container-fluid">
        <div id="tudo" class="tudo container-xxl">
            
                <!--MENU-->
                <form class="d-flex" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <div class="nav-scroller py-1 mb-2" id="menu-navega">
                    <input type="checkbox" id="btn-menu">
                    <label class="btn btn-dark" for="btn-menu">&#9776;</label>
                    <nav id="menu-nav" class="nav d-flex justify-content-between">
                        <ul id="menu" class="d-flex">
                            <li><a href="index.php" class="p-2 link-secondary nav-link"><b>Home</b></a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle p-2 link-secondary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <b>Genero</b>
                                </a>
                         
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                
                                    <li><button type="submit" name="bt" value="Acção" class="dropdown-item"><b>Ação</b></button></li>
                                    <li><button type="submit" name="bt" value="Comédia" class="dropdown-item"><b>Comédia</b></button></li>
                                    <li><button type="submit" name="bt" value="Terror" class="dropdown-item"><b>Terror</b></button></li>
                                    <li><button type="submit" name="bt" value="Drama" class="dropdown-item"><b>Drama</b></button></li>
                            
                                </ul>
                            
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle p-2 link-secondary" href="#" id="A1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <b>Lançamento</b>
                                </a>
                                <?php
                                    $bancoAno = "SELECT DISTINCT ano_lancamento FROM infofilmetb ORDER BY ano_lancamento DESC";
                                    $dadosAno = mysqli_query($conexao,$bancoAno);
                                ?>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php while($resultadoAno = mysqli_fetch_array($dadosAno)){ ?>
                                          
                                         <li><button type="submit" name="btL" class="dropdown-item" value="<?php echo $resultadoAno['ano_lancamento'];?>"><b><?php echo $resultadoAno['ano_lancamento'];?></b></button></li>
                                          
                                    <?php }?>
                                   
                                </ul>
                            </li>
                          
                              
                            <li><a href="#" class="p-2 link-secondary nav-link"><b>Bilheteria</b></a></li>
                           
                            <li><a href="#" class="p-2 link-secondary nav-link"><b>Fale connosco</b></a> </li>
                        </ul>
                    </nav>
                </div>
                </form>
              
            
            <section id="intro">
                <header id="intro2">
   <!--CARROSEL SLIDES-->
                    <div id="myCarousel" class="carousel slide py-5" data-bs-ride="carousel">
                      
                        <div class="carousel-inner">
                                <?php
                                  $banco = "SELECT *FROM slide LIMIT 0,1";
                                  $dados = mysqli_query($conexao,$banco);
                                  $resultado = mysqli_fetch_array($dados);
                                 ?>     
                                
                            <div class="carousel-item active ">
	                           <a href="baixar.php?id=<?php echo $resultado['idFilme1'];?>"> <img src="Imagens/slide/<?php echo $resultado['img1'];?>" alt="picture"></a>
                               <a href="baixar.php?id=<?php echo $resultado['idFilme2'];?>"> <img src="Imagens/slide/<?php echo $resultado['img2'];?>" alt="picture"></a>
                               <a href="baixar.php?id=<?php echo $resultado['idFilme3'];?>"> <img src="Imagens/slide/<?php echo $resultado['img3'];?>" alt="picture"></a>
                               <a href="baixar.php?id=<?php echo $resultado['idFilme4'];?>"> <img src="Imagens/slide/<?php echo $resultado['img4'];?>" alt="picture"></a>
                            </div>
                                 <?php
                                    $banco1 = "SELECT *FROM slide LIMIT 1,1000 ";
                                    $dados1 = mysqli_query($conexao,$banco1);
                                    
                                 ?>    
                         <?php while($resultado1 = mysqli_fetch_array($dados1)){?>
                            <div class="carousel-item ">
                            <a href="baixar.php?id=<?php echo $resultado1['idFilme1'];?>"> <img src="Imagens/slide/<?php echo $resultado1['img1'];?>" alt="picture"></a>
                            <a href="baixar.php?id=<?php echo $resultado1['idFilme2'];?>">   <img src="Imagens/slide/<?php echo $resultado1['img2'];?>" alt="picture"></a>
                            <a href="baixar.php?id=<?php echo $resultado1['idFilme3'];?>">   <img src="Imagens/slide/<?php echo $resultado1['img3'];?>" alt="picture"></a>
                            <a href="baixar.php?id=<?php echo $resultado1['idFilme4'];?>">  <img src="Imagens/slide/<?php echo $resultado1['img4'];?>" alt="picture"></a>
                            </div>
                            <?php }?>
	  
                          
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </header> 

            </section>


            <div id="content" class="row g-5">
                <div id="mainContent" class="col-md-9">
                    <!--SECSSÃO FILMES-->
                    <section id="principal">
                        <article id="conteudo">
    
                            <div>
                                <div class="bd-example">
                                    <div class="row  row-cols-1 row-cols-md-2 g-4">
                                        <?php $bancoFilme = "SELECT COUNT(*) FROM infofilmetb";
                                              $dadosFilme = mysqli_query($conexao,$bancoFilme);
                                              $buscador = mysqli_fetch_assoc($dadosFilme);

                                              $novo =array_shift($buscador);
                                              $por_pagina = 4;
                                              $total = ceil($novo/$por_pagina);
                                     
                                              $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
                                     
                                              $buscador = ($pagina-1)*$por_pagina;
                                     
                                              $query = "SELECT *FROM infofilmetb WHERE destaque ='Não'  LIMIT   $buscador , $por_pagina";
                                              $dadosFilme = mysqli_query($conexao,$query);

                                              if(isset($_POST['btL'])){
                                                
                                                $valor = $_POST['btL'];
                                                $bancoFilme = "SELECT *FROM infofilmetb WHERE ano_lancamento = '$valor'";
                                                $dadosFilme = mysqli_query($conexao,$bancoFilme);
                                              
                                            }
                                              if(isset($_POST['bt'])){
                                                
                                                $valor = $_POST['bt'];
                                                $bancoFilme = "SELECT *FROM infofilmetb WHERE genero = '$valor'";
                                                $dadosFilme = mysqli_query($conexao,$bancoFilme);
                                              
                                            }
                                              if(isset($_POST['inputPesq'])){
                                                
                                                  $pesq = $_POST['inputPesq'];
                                                  $bancoFilme = "SELECT *FROM infofilmetb WHERE titulo like '%$pesq%'";
                                                  $dadosFilme = mysqli_query($conexao,$bancoFilme);
                                                
                                              }
                                              if(isset($_POST['destaque'])){
                                                $destaque = $_POST['destaque'];
                                                $bancoFilme = "SELECT *FROM infofilmetb  WHERE destaque ='$destaque'";
                                                $dadosFilme = mysqli_query($conexao,$bancoFilme);
                                              }
                                              
                                        ?>
                                        <?php $n = 0; ?>
                                        <?php while($resultadoFilme = mysqli_fetch_array($dadosFilme)){ ?>
                                        <div class="col">
                                            <div class="card">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="pastas/<?php echo $resultadoFilme['idFilme'];?>/<?php echo $resultadoFilme['imagem'];?>" class="bd-placeholder-img" width="100%" height="250"/>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title"><?php echo $resultadoFilme['titulo'];?></h5>
                                                            <span class="card-text"><b>Genero:</b> <?php echo $resultadoFilme['genero'];?></span><br />
                                                            <span class="card-text"><b>Lançamento:</b> <?php echo $resultadoFilme['ano_lancamento'];?></span><br />
                                                            <span class="card-text"><b>Duração:</b> <?php echo $resultadoFilme['duracao'];?>min</span><br />
                                                            <span class="card-text"><b>Audio:</b> <?php echo $resultadoFilme['audio'];?></span><br />
                                                            <span class="card-text"><b>Legenda:</b> <?php echo $resultadoFilme['legenda'];?></span><br />
                                                            <span class="card-text"><b>Tamanho:</b> <?php echo $resultadoFilme['tamanho'];?></span><br />
                                                            <a><i class="fa fa-star"></i></a>
                                                            <p class="card-text"><a href="baixar.php?id=<?php echo $resultadoFilme['idFilme'];?>" class="text-muted">Ver mais informações</a></p>
                      
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $n++; ?>
                                        <?php }?>
     

                                </div>
                           </div>
        
    
                        </article>

                    </section>
               </div>
            

<!-- MAIS BAIXADOS -->
             <div class="col-md-3">
             <?php
                $bancoBaixados = "SELECT *FROM infofilmetb ORDER BY baixados DESC";
                $dadosBaixado = mysqli_query($conexao,$bancoBaixados);
             ?>
               <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4">
                        <h4 class="fst-italic">Mais Baixados</h4>
                        <ol class="list-unstyled mb-0">
                           <?php while($resultadoBaixados = mysqli_fetch_array($dadosBaixado)){?>
                           <?php if($resultadoBaixados['baixados']>0){?>
                              <li class="py-1"><a href="baixar.php?id=<?php echo $resultadoBaixados['idFilme'];?>"><img src="pastas/<?php echo $resultadoBaixados['idFilme'];?>/<?php echo $resultadoBaixados['imagem'];?>" class="bd-placeholder-img" width="100%" height="250"/></a></li>
                                 <?php }?>
                           <?php }?>
                        </ol>
                    </div>

                </div>
           </div>
       </div>
       <?php if($total > 1){?>
     <div class="bd-example">
          <nav aria-label="Standard pagination example">
             <ul class="pagination">
                <li class="page-item">
                    <?php echo "<a class='page-link' href='?pagina=1'  aria-label='Previous'>";?>
                     <span aria-hidden="true">&laquo;</span>
                   </a>
               </li>
               <?php for($i=1; $i<=$total; $i++){
                echo"<li class='page-item'><a class='page-link'  href=\"?pagina={$i}\">$i</a></li>";
                }?>
               <li class="page-item">
                    <?php --$i; echo "<a class='page-link' href='?pagina=$i' aria-label='Next'>";?>
                      <span aria-hidden="true">&raquo;</span>
                   </a>
               </li>
            </ul>
        </nav>
      </div>
      <?php }?>


    </div>
</div>

<footer id="rodape" class="container-fluid bg-dark text-white">
   <div id="roda" class="row w-100">
        <section id="about" class="col">
               <header id="rod"><h3>Sobre</h3></header>
                   <p class="text-white">
                        Está pagina veio para promover filmes da produç
                        ao nacional,<br />
                        e ajudar na divulgação e ascenção do cinema nacional.
                   </p>
       </section>
       <section id="bloroll" class="col">
              <header id="rod1"><h3>Indicações</h3></header>
                <ul id="rodap1">
                   <li><a href="#">Asaltos Em Luanda</a></li>
                   <li><a href="#">O Regresso dos que nunca foram</a></li>
                   <li><a href="#">A unica Filha</a></li>
                   <li><a href="#">Luta Pela Fama</a></li>
                   <li><a href="#">A Luta Do Kuduro</a></li>
               </ul>
       </section>
        <section id="popular" class="col">
        <?php
                $bancoAssiste = "SELECT * FROM infofilmetb ORDER BY assistiu DESC LIMIT 5";
                $dadosAssiste = mysqli_query($conexao,$bancoAssiste);
             ?>
              <header id="rod2"><h3>Populares</h3></header>
               <ul id="rodap2">
                   
               <?php while($resultadoAssiste = mysqli_fetch_array($dadosAssiste)){?>
                <?php if($resultadoAssiste['assistiu']>0){?>
               
                    <?php
                        echo "
                        <li><a href=baixar.php?id=$resultadoAssiste[idFilme]>$resultadoAssiste[titulo]</a></li>
                        ";            
                    ?>

                <?php }?>
                <?php }?>        

              </ul>
       </section>
   </div>
</footer>


</body>

</html>


