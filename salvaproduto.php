<?php
    
    session_start();
    include "pdoconexao.php";
  
  
  $query = $db->prepare("INSERT INTO cadastro_produtos
  (nome_produto,descricao,marca,valor)
  VALUES ('{$_POST['nome_produto']}',
          '{$_POST['descricao']}',
          '{$_POST['marca']}',
          '{$_POST['valor']}',
'{$_FILES['imagem']}')
          ");

//$query->execute();

if ($query->execute()){
    header("Location: produtos.php"); //Se enviar corretamente redireciona para página de produtos
}else{
    $_SESSION['msg'] = "<p style='color:tomato;background:#fff;'>Não foi possível enviar suas informações, verifique e tente novamente.</p>";
    header("Location:cadastrarprodutos.php"); //Se não apresenta o erro
}