<?php

session_start();
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

    <section>

    <div class="produtos" style="margin-left:12%">


                <div class="row">
                  <div class="col-lg-10">
                    <div class="row">
                      <div class="col-lg-8 offset-2 title-div">
                    <h1 class="ranking-title" style="font-size:40px">{{$titulo}}</h1>
                    </div>
                    </div>
                    <div class="row">
            @foreach ($produtos as $produto)
                      <div class="col-lg-6 text-center">
                    <img src="{{ asset('storage/img/' . $produto->imagem) }}" class="img-fluid img-ranking" alt="produto">
                      <h3>{{$produto->nome}}</h3>
                      <p>{{$produto->tipo_produto}}</p>
                      <h4>R$ {{$produto->preco}}</h3>
                      <a class='btn btn-lg active' style="background-color:rgb(3, 152, 158); color:white; width:200px; margin-bottom: 55px" href="/exibirUmProduto/{{ $produto->id }}">Ver Avaliação</a><br>
                  </div>
                <br>
              <br>
            @endforeach
            </div>

            <div class="row">
              {{-- <div class="col-lg-8 offset-lg-3">{{ $produtos->links() }}</div> --}}
              <div class= "paginas" > {{ $produtos->links() }} </div>

           </div>

        </div>
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