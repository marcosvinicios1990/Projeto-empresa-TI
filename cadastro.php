<?php

$host = "mysql:host=localhost;dbname=site_ti;port=3306";
$user = "root";
$pass = "";

try{
$db = new PDO($host,$user,$pass);
/*echo "Conexão feita com sucesso!";*/
}catch(PDOException $e){
/*echo "Não foi possivel realizar a conexão do banco de dados";*/
exit;
}




?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Home page</title>
  </head>
  <body>
      
    <header>        
        <?php include('header.php') ?>    
    </header>
      
        <!-- ESPAÇO PARA CADASTRO DE PESSOA -->
        
        <section class="container-cadastro">
          <div class="cadastro">
          <form action="salvacadastro.php" method="post" enctype = "multipart/form-data">
          <div class="h1"><h1>Cadastre-se </h1></div>        
                  <label for="nomeCompleto">Nome Completo</label> <br>
                  <input type="text" name="nome" id="nome"placeholder="Ana Maria Silva" class="form-control" > 
                  <br>
          </div>

          <div>
              <label for="email">Email</label>
              <br>
              <input type="email" name="email" id="email" placeholder="nome@email.com" class="form-control">
              <br>
          </div>

          <div class="row">
            <div class="col-lg-6 col-xs-12">
              <label for="cpf">CPF</label> <br>         
                  <input type="text" name="cpf" id="cpf" 
                  \ pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \
                  title="Digite um CPF no formato: xxx.xxx.xxx-xx" 
                  placeholder="000.000.000-00 " class="form-control" >
              <br>
            </div>

            <div class="col-lg-6 col-xs-12">
              <label for="fone">Celular</label> <br>
              <input type="fone" name="celular" id="celular" placeholder="(00)00000-0000 " class="form-control" >
              <br>
            </div>
          </div>

          <div>
          <select name="genero"class="form-control" id="genero">
                      <option selected disabled>Genero</option>
                      <option value="feminino">Feminino</option>
                      <option value="masculino">Masculino</option>
                      <option value="n/a">N/A</option>
                </select>
              <br>
          </div>

          <div class="row">
            <div class="col-lg-6  col-xs-12">
                  <label for="senha">Crie uma Senha</label>
                  <br>
                  <input type="password" name="senha" id="senha"class="form-control">
                  <br>
            </div>

            <div class="col-lg-6  col-xs-12">
                  <label for="senhacripto">Confirme sua senha</label>
                  <br>
                  <input type="password" name="senhacripto" class="form-control">
                  <br>
            </div>   
          </div>

          <div buton-cadastro>
              <button type="submit"  class="btn btn-lg btn-block" style='color:white; background-color:rgb(3, 152, 158);'>Cadastrar</button>
          </div>   

      </form>
        <br> 
      </div>
      </div>

      </section>

      <footer>
      
        <?php include('footer.php') ?>

      </footer>
      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>