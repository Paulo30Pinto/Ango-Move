<html lang="pt-br">
<meta charset="UTF-8">
</html>

<?php 
$conexao = mysqli_connect("localhost","root","","afromovebd");

//CADASTRAR NOVOS FILMES 
if(isset($_FILES['ImagemFilme']['name'])){

    $idFilme = $_POST['IdFilme'];
    $imgCapa = $_FILES['ImagemFilme']['name'];
    $nomeFilme = $_POST['NomeFilme'];
    $descricao = $_POST['texto'];
    $generoFilme = $_POST['GeneroFilme'];
    $tituloFilme = $_POST['TituloFilme'];
    $audioFilme = $_POST['AudioFilme'];
    $legendaFilme = $_POST['LegendaFilme'];
    $anoFilme = $_POST['AnoFilme'];
    $dataFilme = $_POST['DataFilme'];
    $duracaoFilme = $_POST['DuracaoFilme'];
    $tamanhoFilme = $_POST['TamanhoFilme'];
    $destaqueFilme = $_POST['DestaqueFilme'];
    $videoFilme = $_FILES['VideoFilme']['name'];
    $trailer = $_FILES['TrailerFilme']['name'];
    $realizadorFilme = $_POST['RealizadorFilme'];
    $img0 = $_FILES['Imagem0']['name'];
    $elenco1 = $_POST['Elenco1'];
    $img1 = $_FILES['Imagem1']['name'];
    $elenco2 = $_POST['Elenco2'];
    $img2 = $_FILES['Imagem2']['name'];
    $elenco3 = $_POST['Elenco3'];
    $img3 = $_FILES['Imagem3']['name'];
    $elenco4 = $_POST['Elenco4'];
    $img4 = $_FILES['Imagem4']['name'];
    $elenco5 = $_POST['Elenco5'];
    $img5 = $_FILES['Imagem5']['name'];
    $elenco6 = $_POST['Elenco6'];
    $img6 = $_FILES['Imagem6']['name'];
    $elenco7 = $_POST['Elenco7'];
    $img7 = $_FILES['Imagem7']['name'];
    $elenco8 = $_POST['Elenco8'];
    $img8 = $_FILES['Imagem8']['name'];
    $elenco9 = $_POST['Elenco9'];
    $img9 = $_FILES['Imagem9']['name'];
    mkdir('pastas/'.$idFilme); 
    
    if($nomeFilme!=''){
    $banco = "INSERT INTO infofilmetb(idFilme,nome,titulo,genero,duracao,audio,legenda,tamanho,imagem,video,trailer,destaque,data_lancamento,ano_lancamento)VALUES
    ('$idFilme','$nomeFilme','$tituloFilme','$generoFilme','$duracaoFilme','$audioFilme','$legendaFilme','$tamanhoFilme','$imgCapa','$videoFilme','$trailer','$destaqueFilme','$dataFilme','$anoFilme')";
    mysqli_query($conexao,$banco);
    move_uploaded_file($_FILES['ImagemFilme']['tmp_name'],'pastas/'.$idFilme.'/'.$imgCapa);
    move_uploaded_file($_FILES['VideoFilme']['tmp_name'],'pastas/'.$idFilme.'/'.$videoFilme);
    move_uploaded_file($_FILES['TrailerFilme']['tmp_name'],'pastas/'.$idFilme.'/'.$trailer);
    }
    
    if($realizadorFilme!=''){
    $banco1 = "INSERT INTO elencostb(idFilme,realizador,img0,elenco1,img1,elenco2,img2,elenco3,img3,elenco4,img4,elenco5,img5,elenco6,img6,elenco7,img7,elenco8,img8,elenco9,img9,descricao) VALUES
    ('$idFilme','$realizadorFilme','$img0','$elenco1','$img1','$elenco2','$img2','$elenco3','$img3','$elenco4','$img4','$elenco5','$img5','$elenco6','$img6','$elenco7','$img7','$elenco8','$img8','$elenco9','$img9','$descricao')";
    mysqli_query($conexao,$banco1);
    move_uploaded_file($_FILES['Imagem0']['tmp_name'],'pastas/'.$idFilme.'/'.$img0);
    move_uploaded_file($_FILES['Imagem1']['tmp_name'],'pastas/'.$idFilme.'/'.$img1);
    move_uploaded_file($_FILES['Imagem2']['tmp_name'],'pastas/'.$idFilme.'/'.$img2);
    move_uploaded_file($_FILES['Imagem3']['tmp_name'],'pastas/'.$idFilme.'/'.$img3);
    move_uploaded_file($_FILES['Imagem4']['tmp_name'],'pastas/'.$idFilme.'/'.$img4);
    move_uploaded_file($_FILES['Imagem5']['tmp_name'],'pastas/'.$idFilme.'/'.$img5);
    move_uploaded_file($_FILES['Imagem6']['tmp_name'],'pastas/'.$idFilme.'/'.$img6);
    move_uploaded_file($_FILES['Imagem7']['tmp_name'],'pastas/'.$idFilme.'/'.$img7);
    move_uploaded_file($_FILES['Imagem8']['tmp_name'],'pastas/'.$idFilme.'/'.$img8);
    move_uploaded_file($_FILES['Imagem9']['tmp_name'],'pastas/'.$idFilme.'/'.$img9);  
     
    } 
    
   

}


// CADASTRAR NOVOS SLIDES
if(isset($_FILES['slide1']['name'])){
    $slide1 = $_FILES['slide1']['name'];
    $slide2 = $_FILES['slide2']['name'];
    $slide3 = $_FILES['slide3']['name'];
    $slide4 = $_FILES['slide4']['name'];
    $idFilme1 = $_POST['idFilme1'];
    $idFilme2 = $_POST['idFilme2'];
    $idFilme3 = $_POST['idFilme3'];
    $idFilme4 = $_POST['idFilme4'];
    if(($slide1!='') || ($slide2!='') || ($slide3!='') || ($slide4!='') ){
        $banco2 = "INSERT INTO slide(idFilme1,img1,idFilme2,img2,idFilme3,img3,idFilme4,img4) VALUES ('$idFilme1','$slide1','$idFilme2','$slide2','$idFilme3','$slide3','$idFilme4','$slide4')";
        mysqli_query($conexao,$banco2);
        move_uploaded_file($_FILES['slide1']['tmp_name'],'Imagens/slide/'.$slide1);
        move_uploaded_file($_FILES['slide2']['tmp_name'],'Imagens/slide/'.$slide2);
        move_uploaded_file($_FILES['slide3']['tmp_name'],'Imagens/slide/'.$slide3);
        move_uploaded_file($_FILES['slide4']['tmp_name'],'Imagens/slide/'.$slide4);
    }
}


// PEGAR ID PARA ALTERAR IMAGENS DO SLIDE
if(isset($_POST['bt'])){
    $id = $_POST['id'];
    $banco = "SELECT *FROM slide WHERE id = '$id'";
    $dados = mysqli_query($conexao,$banco);
    $resultado = mysqli_fetch_array($dados);

    echo json_encode($resultado);
}

//CADASTRAR SLIDES ALTERADOS 
if(isset($_FILES['slideAlt1']['name'])){
    $id = $_POST['valorId'];
    $slide1 = $_FILES['slideAlt1']['name'];
    $slide2 = $_FILES['slideAlt2']['name'];
    $slide3 = $_FILES['slideAlt3']['name'];
    $slide4 = $_FILES['slideAlt4']['name'];
    $idFilmeAlt1 = $_POST['idFilmeAlt1'];
    $idFilmeAlt2 = $_POST['idFilmeAlt2'];
    $idFilmeAlt3 = $_POST['idFilmeAlt3'];
    $idFilmeAlt4 = $_POST['idFilmeAlt4'];
    if($slide1!=''){
         $banco = "UPDATE slide SET idFilme1='$idFilmeAlt1' ,img1='$slide1' WHERE id = '$id'";
         mysqli_query($conexao,$banco);
         move_uploaded_file($_FILES['slideAlt1']['tmp_name'],'Imagens/slide/'.$slide1);
    }
    if($slide2!=''){
        $banco = "UPDATE slide SET idFilme2='$idFilmeAlt2' ,img2='$slide2' WHERE id = '$id'";
        mysqli_query($conexao,$banco);
        move_uploaded_file($_FILES['slideAlt2']['tmp_name'],'Imagens/slide/'.$slide2);
   }
   if($slide3!=''){
    $banco = "UPDATE slide SET idFilme3='$idFilmeAlt3' , img3='$slide3' WHERE id = '$id'";
    mysqli_query($conexao,$banco);
    move_uploaded_file($_FILES['slideAlt3']['tmp_name'],'Imagens/slide/'.$slide3);
   }
   if($slide4!=''){
    $banco = "UPDATE slide SET idFilme4='$idFilmeAlt4' , img4='$slide4' WHERE id = '$id'";
    mysqli_query($conexao,$banco);
    move_uploaded_file($_FILES['slideAlt4']['tmp_name'],'Imagens/slide/'.$slide4);
   }
     
}

//ILIMINAR IMAGENS DO SLIDE
if(isset($_POST['btIlim'])){
    $id = $_POST['id'];
    $banco = "DELETE FROM slide WHERE id = '$id'";
     mysqli_query($conexao,$banco);
    
}


// PEGAR ID PARA ALTERAR FILMES
if(isset($_POST['btAltCad'])){
    $id = $_POST['id'];
    $banco = "SELECT *FROM infofilmetb WHERE id = '$id'";
    $dados = mysqli_query($conexao,$banco);
    $resultado = mysqli_fetch_array($dados);

    echo json_encode($resultado);
  
}




//CADASTRAR  FILMES  ALTERADOS
if(isset($_FILES['ImagemFilme1']['name'])){
    $id = $_POST['valorId1'];
    $idFilme = $_POST['IdFilme1'];
    $imgCapa = $_FILES['ImagemFilme1']['name'];
    $nomeFilme = $_POST['NomeFilme1'];
    $descricao = $_POST['texto1'];
    $generoFilme = $_POST['GeneroFilme1'];
    $tituloFilme = $_POST['TituloFilme1'];
    $audioFilme = $_POST['AudioFilme1'];
    $legendaFilme = $_POST['LegendaFilme1'];
    $anoFilme = $_POST['AnoFilme1'];
    $dataFilme = $_POST['DataFilme1'];
    $duracaoFilme = $_POST['DuracaoFilme1'];
    $tamanhoFilme = $_POST['TamanhoFilme1'];
    $destaqueFilme = $_POST['DestaqueFilme1'];
    $videoFilme = $_FILES['VideoFilme1']['name'];
    $trailer = $_FILES['TrailerFilme1']['name'];
    $realizadorFilme = $_POST['RealizadorFilme1'];
    $img0 = $_FILES['Imagem01']['name'];
    $elenco1 = $_POST['Elenco11'];
    $img1 = $_FILES['Imagem11']['name'];
    $elenco2 = $_POST['Elenco21'];
    $img2 = $_FILES['Imagem21']['name'];
    $elenco3 = $_POST['Elenco31'];
    $img3 = $_FILES['Imagem31']['name'];
    $elenco4 = $_POST['Elenco41'];
    $img4 = $_FILES['Imagem41']['name'];
    $elenco5 = $_POST['Elenco51'];
    $img5 = $_FILES['Imagem51']['name'];
    $elenco6 = $_POST['Elenco61'];
    $img6 = $_FILES['Imagem61']['name'];
    $elenco7 = $_POST['Elenco71'];
    $img7 = $_FILES['Imagem71']['name'];
    $elenco8 = $_POST['Elenco81'];
    $img8 = $_FILES['Imagem81']['name'];
    $elenco9 = $_POST['Elenco91'];
    $img9 = $_FILES['Imagem91']['name'];

    
    $banco = "UPDATE infofilmetb SET nome='$nomeFilme',titulo='$tituloFilme',genero='$generoFilme',duracao='$duracaoFilme',audio='$audioFilme',legenda='$legendaFilme',tamanho='$tamanhoFilme',destaque='$destaqueFilme',data_lancamento='$dataFilme',ano_lancamento='$anoFilme' WHERE id='$id'";
    mysqli_query($conexao,$banco);

    //ELENCOS
    $banco1 = "UPDATE elencostb SET realizador='$realizadorFilme',elenco1='$elenco1',elenco2='$elenco2',elenco3='$elenco3',elenco4='$elenco4',elenco5='$elenco5',elenco6='$elenco6',elenco7='$elenco7',elenco8='$elenco8',elenco9='$elenco9',descricao='$descricao' WHERE idFilme='$idFilme'";
    mysqli_query($conexao,$banco1);
    if($imgCapa !=''){
        $banco = "UPDATE infofilmetb SET imagem ='$imgCapa' WHERE id='$id'";
        mysqli_query($conexao,$banco);
        move_uploaded_file($_FILES['ImagemFilme1']['tmp_name'],'pastas/'.$idFilme.'/'.$imgCapa);
    }
    if($videoFilme !=''){
        $banco = "UPDATE infofilmetb SET video='$videoFilme' WHERE id='$id'";
        mysqli_query($conexao,$banco);
        move_uploaded_file($_FILES['VideoFilme1']['tmp_name'],'pastas/'.$idFilme.'/'.$videoFilme);
    }
    if($trailer !=''){
        $banco = "UPDATE infofilmetb SET trailer='$trailer' WHERE id='$id'";
        mysqli_query($conexao,$banco);
        move_uploaded_file($_FILES['TrailerFilme1']['tmp_name'],'pastas/'.$idFilme.'/'.$trailer);
    }
    //ELENCOS
    if($img0 !=''){
        $banco1 = "UPDATE elencostb SET img0='$img0' WHERE idFilme='$idFilme'";
        mysqli_query($conexao,$banco1);
        move_uploaded_file($_FILES['Imagem01']['tmp_name'],'pastas/'.$idFilme.'/'.$img0);
    }
    if($img1 !=''){
        $banco1 = "UPDATE elencostb SET img1='$img1' WHERE idFilme='$idFilme'";
        mysqli_query($conexao,$banco1);
        move_uploaded_file($_FILES['Imagem11']['tmp_name'],'pastas/'.$idFilme.'/'.$img1);
    }
    if($img2 !=''){
        $banco1 = "UPDATE elencostb SET img2='$img2' WHERE idFilme='$idFilme'";
        mysqli_query($conexao,$banco1);
        move_uploaded_file($_FILES['Imagem21']['tmp_name'],'pastas/'.$idFilme.'/'.$img2);
    }
    if($img3 !=''){
        $banco1 = "UPDATE elencostb SET img3='$img3' WHERE idFilme='$idFilme'";
        mysqli_query($conexao,$banco1);
        move_uploaded_file($_FILES['Imagem31']['tmp_name'],'pastas/'.$idFilme.'/'.$img3);
    }
    if($img4 !=''){
        $banco1 = "UPDATE elencostb SET img4='$img4' WHERE idFilme='$idFilme'";
        mysqli_query($conexao,$banco1);
        move_uploaded_file($_FILES['Imagem41']['tmp_name'],'pastas/'.$idFilme.'/'.$img4);
    }
    if($img5 !=''){
        $banco1 = "UPDATE elencostb SET img5='$img5' WHERE idFilme='$idFilme'";
        mysqli_query($conexao,$banco1);
        move_uploaded_file($_FILES['Imagem51']['tmp_name'],'pastas/'.$idFilme.'/'.$img5);
    }
    if($img6 !=''){
        $banco1 = "UPDATE elencostb SET img6='$img6' WHERE idFilme='$idFilme'";
        mysqli_query($conexao,$banco1);
        move_uploaded_file($_FILES['Imagem61']['tmp_name'],'pastas/'.$idFilme.'/'.$img6);
    }
    if($img7 !=''){
        $banco1 = "UPDATE elencostb SET img7='$img7' WHERE idFilme='$idFilme'";
        mysqli_query($conexao,$banco1);
        move_uploaded_file($_FILES['Imagem71']['tmp_name'],'pastas/'.$idFilme.'/'.$img7);
    }
    if($img8 !=''){
        $banco1 = "UPDATE elencostb SET img8='$img8' WHERE idFilme='$idFilme'";
        mysqli_query($conexao,$banco1);
        move_uploaded_file($_FILES['Imagem81']['tmp_name'],'pastas/'.$idFilme.'/'.$img8);
    }
    if($img9 !=''){
        $banco1 = "UPDATE elencostb SET img9='$img9' WHERE idFilme='$idFilme'";
        mysqli_query($conexao,$banco1);
        move_uploaded_file($_FILES['Imagem91']['tmp_name'],'pastas/'.$idFilme.'/'.$img9);
    }


}

//ILIMINAR FILMES
if(isset($_POST['btIlimCad'])){
    $id = $_POST['id'];
    $banco = "DELETE FROM infofilmetb WHERE id = '$id'";
     mysqli_query($conexao,$banco);
    
}
 
?>