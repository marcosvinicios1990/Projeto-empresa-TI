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
      <div class="imagem">
        <img src="imagens/infra3.jpg" alt="Imagem principal" width="860" height="610">
      </div>
      <div class="textoprincipal">
        <h1>Soluções em TI <br> Para sua empresa</h1>
      </div>  
      <div class="btn-group1" role="group" aria-label="Basic outlined example">
        <a href="faleconosco.html"><button type="button" class="btn btn-outline-success">
          <h4>Fale com um dos nossos especialistas!</h4></button></a>
      </div>

      <div class="texto2">
        <h5>Qual serviço você procura ?</h5>
      </div>  
      <div class="btn-group2" role="group" aria-label="Basic outlined example">
        <a href="produtos.html"><button type="button" class="btn btn-outline-success">
          <h4>Instalações de cabeamentos estruturados</h4></button></a>
      </div>
      <div class="btn-group3" role="group" aria-label="Basic outlined example">
        <a href="produtos.html"><button type="button" class="btn btn-outline-dark">
          <h4>Instalações de CFTV</h4></button></a>
      </div>
      <div class="btn-group4" role="group" aria-label="Basic outlined example">
        <a href="produtos.html"><button type="button" class="btn btn-outline-success">
          <h4>Service Desk local ou remoto</h4></button></a>
      </div>

      <div class="texto3">
        <h5>Nós somos revendedores oficiais de sistemas de segurança domiciliar, como alarmes, CFTV, câmeras 
          e cercas elétrica. Acesse nossa <br> pagina de produtos ou fale com um dos nossos representante.</h5>
      </div>  
      <div class="btn-group5" role="group" aria-label="Basic outlined example">
        <a href="produtos.html"><button type="button" style="width: 1000px;" class="btn btn-outline-danger">
          <h4>Acesse aqui nossa página de produtos!</h4></button></a>
      </div>

      <div class="whatsaap">
        <a href="https://api.whatsapp.com/send?phone=5511967089153&text=Texto%20aqui"
    target="_blank"
    style="position:fixed;bottom:20px;right:30px;">
    <svg enable-background="new 0 0 512 512" width="50" height="50" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z" fill="#4CAF50"/><path d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z" fill="#FAFAFA"/></svg>
        </a>
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