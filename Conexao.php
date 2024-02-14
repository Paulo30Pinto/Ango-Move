<html lang="pt-br">
<meta charset="UTF-8">
</html>


<?php
  $conexao = mysqli_connect("localhost","root","","afromovebd");
  // LIKES
  if(isset($_POST['IdLike'])){
     $id = $_POST['IdLike'];
     $likes = $_POST['likes'];
    $banco = "UPDATE infofilmetb SET likes = '$likes' WHERE idFilme = '$id'";
    mysqli_query($conexao,$banco);

    $banco1 = "SELECT likes FROM infofilmetb WHERE idFilme = '$id'";
    $dados1 = mysqli_query($conexao,$banco1);
    $resultado = mysqli_fetch_array($dados1);
    echo json_encode($resultado);
    
  }


  //BAIXADOS
  if(isset($_POST['btBaixar'])){
     $id = $_POST['IdBaixar'];
     $baixados = $_POST['baixados'];
     $banco = "UPDATE infofilmetb SET baixados = '$baixados' WHERE idFilme = '$id'";
     mysqli_query($conexao,$banco);
  }

  //ASSISTIDO
  /*
  if(isset($_POST['btAssiste'])){
    $id = $_POST['IdBaixar'];
    $assistiu = $_POST['assistiu'];
    $banco = "UPDATE infofilmetb SET assistiu = '$assistiu' WHERE idFilme = '$id'";
    mysqli_query($conexao,$banco);
 }
*/
 // 
 if(isset($_POST['btAssiste'])){
  $id = $_POST['IdLike'];
  $likes = $_POST['assistiu'];
 $banco = "UPDATE infofilmetb SET assistiu = '$likes' WHERE idFilme = '$id'";
 mysqli_query($conexao,$banco);

 $banco1 = "SELECT assistiu FROM infofilmetb WHERE idFilme = '$id'";
 $dados1 = mysqli_query($conexao,$banco1);
 $resultado = mysqli_fetch_array($dados1);
 echo json_encode($resultado);
 
}


  //CADASTRAR INSCRITOS
  if(isset($_POST['btInscri'])){
    $idFilme = $_POST['idFilme'];
    $nome = $_POST['nome'];
    $pass = $_POST['pass'];
    $telefone = $_POST['telefone'];
    $referencia = $_POST['referencia'];

    $banco = "INSERT INTO assinantes(idFilme,nome,pass,referencia,telefone) VALUES ('$idFilme','$nome','$pass','$referencia','$telefone')";
    mysqli_query($conexao,$banco);
  }

  //CONFRONTAR INSCRITOS
  if(isset($_POST['btSub'])){
    $nome = $_POST['nome'];
    $pass = $_POST['pass'];
    $banco = "SELECT *FROM assinantes";
    $dados = mysqli_query($conexao,$banco);
    while($resultado = mysqli_fetch_array($dados)){
         if(($nome == $resultado['nome']) && ($pass == $resultado['pass'])){
           echo "sim";
         }
    }
  }


  //ELENCOS DO FILME
if(isset($_POST['btAltCad'])){
  $id = $_POST['id'];
  $banco = "SELECT *FROM elencostb WHERE idFilme = '$id'";
  $dados = mysqli_query($conexao,$banco);
  $resultado = mysqli_fetch_array($dados);

  echo json_encode($resultado);
}

?>