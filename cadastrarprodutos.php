<?php

include('pdoconexao.php')


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
          <form action="salvaproduto.php" method="post" enctype = "multipart/form-data">
          <div class="h1"><h1>Cadastre o produto </h1></div>        
                  <label for="nomeCompleto">Nome do produto</label> <br>
                  <input type="text" name="nome_produto" id="nome_produto"placeholder="Ex: Camera CFTV" class="form-control" > 
                  <br>
          </div>

          <div>
              <label for="descricao">Descrição</label>
              <br>
              <input type="text" name="descricao" id="descricao" placeholder="Ex: CFTV p/ 4 cameras" class="form-control">
              <br>
          </div>

          <div class="row">
            <div class="col-lg-6 col-xs-12">
              <label for="marca">marca</label> <br>         
                  <input type="text" name="marca" id="marca" 
                  placeholder="Ex: Intelbras" class="form-control" >
              <br>
            </div>

            <div class="col-lg-6 col-xs-12">
              <label for="valor">valor</label> <br>
              <input type="fone" name="valor" id="valor" placeholder="Ex: 199.99 formato EUA" class="form-control" >
              <br>
            </div>
          </div>

              <label for="imagem">Envie a foto do produto</label>
              <input type="file" name="imagem" id="imagem" >
              <br>
        </div>

          <div buton-cadastro>
              <button type="submit"  class="btn btn-lg btn-block" style='color:white; background-color:rgb(3, 152, 158);'>Cadastrar produto</button>
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