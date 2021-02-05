<?php
    session_start();
    include "pdoconexao.php";
  
  
  $query = $db->prepare("INSERT INTO cadastro_clientes
  (nome,email,cpf,celular,genero,senha)
  VALUES ('{$_POST['nome']}',
          '{$_POST['email']}',
          '{$_POST['cpf']}',
          '{$_POST['celular']}',
          '{$_POST['genero']}',
          '{$_POST['senha']}')
          ");

//$query->execute();

if ($query->execute()){
    header("Location: produtos.php"); //Se enviar corretamente redireciona para página de produtos
}else{
    $_SESSION['msg'] = "<p style='color:tomato;background:#fff;'>Não foi possível enviar suas informações, verifique e tente novamente.</p>";
    header("Location:cadastro.php"); //Se não apresenta o erro
}