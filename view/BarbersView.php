<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="assets/css/base.css">
      <link rel="stylesheet" type="text/css" href="assets	/css/home.css">
      <title>NombreProyecto!</title>
   </head>
   <body>
      <div id="app" class="container-fluid">
         <!-- Nav -->
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!-- <a class="navbar-brand" href="#">Nombre del Proyecto</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Link</a>
                  </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
               </form>
            </div>
         </nav>
         <!-- Cards -->
         <div id="cards" class="container">
            <?php foreach ($arrayBarbers as $registry){ ?>
            <div id="barberia" class="row justify-content-md-center">
               <div class="col-md-auto">
                  <div class="card" >
                     <img class="card-img-top" src="<?php echo $registry["imageSource"]; ?>"  alt="Card image cap">
                  </div>
               </div>
               <div class="col-md-auto">
                  <div class="card-body">
                     <h5 class="card-title"> <?php echo $registry["BarberName"]; ?> </h5>
                     <p class="card-text"> <?php echo $registry["BarberAdress"] ?> </p>
                     <a href="./controller/BarbersDetailController.php?id=<?php echo $registry["id"] ?>" class="btn btn-primary">Go somewhere</a>
                  </div>
               </div>
            </div>
            <?php } ?>
         </div>
         <!--- Footer -->
         <footer class="page-footer font-small blue">
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
               <a href="https://urba.com/"> GrupoEscobar.com</a>
            </div>
         </footer>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   </body>
</html>