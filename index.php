<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <title>Bootstrap Example</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
         <a class="navbar-brand" href="javascript:void(0)">My Vendas</a>
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navb">
            <form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="text" placeholder="Search">
               <button class="btn btn-success my-2 my-sm-0" type="button">Search</button>
            </form>
            <ul class="navbar-nav ml-auto">
               <!-- Dropdown -->
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                     Carrinho (0)
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="#">Link 1</a>
                     <a class="dropdown-item" href="#">Link 2</a>
                     <a class="dropdown-item" href="#">Link 3</a>
                  </div>
               </li>
               <!-- Dropdown -->
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                     Produtos
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="#">Link 1</a>
                     <a class="dropdown-item" href="#">Link 2</a>
                     <a class="dropdown-item" href="#">Link 3</a>
                  </div>
               </li>
               <!-- Dropdown -->
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                     Atendimento
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="#">Link 1</a>
                     <a class="dropdown-item" href="#">Link 2</a>
                     <a class="dropdown-item" href="#">Link 3</a>
                  </div>
               </li>
            </ul>

         </div>
      </nav>
      <div class="container" style="margin-top: 30px">
         <div class="row">
            <div class="col-sm-12">
               <!-- Carousel -->
               <div id="demo" class="carousel slide" data-ride="carousel">
                  <ul class="carousel-indicators">
                     <li data-target="#demo" data-slide-to="0" class="active"></li>
                     <li data-target="#demo" data-slide-to="1"></li>
                     <li data-target="#demo" data-slide-to="2"></li>
                  </ul>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="assets/images/la.jpg" alt="Los Angeles" width="1100" height="500">
                        <div class="carousel-caption">
                           <h3>Los Angeles</h3>
                           <p>We had such a great time in LA!</p>
                        </div>   
                     </div>
                     <div class="carousel-item">
                        <img src="assets/images/chicago.jpg" alt="Chicago" width="1100" height="500">
                        <div class="carousel-caption">
                           <h3>Chicago</h3>
                           <p>Thank you, Chicago!</p>
                        </div>   
                     </div>
                     <div class="carousel-item">
                        <img src="assets/images/ny.jpg" alt="New York" width="1100" height="500">
                        <div class="carousel-caption">
                           <h3>New York</h3>
                           <p>We love the Big Apple!</p>
                        </div>   
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                     <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                     <span class="carousel-control-next-icon"></span>
                  </a>
               </div>
               <!-- End .\ Carousel -->

            </div>
         </div>
      </div>
      <section class="bg-secondary">

         <div class="container">
            <h2>OFERTAS AGORA </h2>
            
         </div>
      </section>
      <!-- scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
   </body>
</html>


