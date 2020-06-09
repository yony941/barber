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

	<!-- Nav -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
				<li>
					<li>
						<button type="button" class="btn btn-default my-2 my-sm-0"><span class="glyphicon glyphicon-filter"></span> aa</button>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
		
		<!-- Carrucel -->

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active" style="height: 50vh">
					<img class="d-block w-100" src="assets/img/500x500.png" alt="First slide">
				</div>
				<div class="carousel-item" style="height: 50vh">
					<img class="d-block w-100" src="assets/img/500x500.png" alt="Second slide">
				</div>
				<div class="carousel-item" style="height: 50vh">
					<img class="d-block w-100" src="assets/img/500x500.png" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>


		<div id="contenedorFormulario" class="container">
			<form>

				<div class="form-group row">
					<label for="nombres" class="col-sm-2 col-form-label">Nombres completo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombres" placeholder="Nombre">
					</div>
				</div>
				<div class="form-group row">
					<label for="cedula" class="col-sm-2 col-form-label">Cedula</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cedula" placeholder="Cedula">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2">Servicios</div>
					<div class="col-sm-10">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="corte">
							<label class="form-check-label" for="corte">
								Corte
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="barba">
							<label class="form-check-label" for="barba">
								Barba
							</label>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-outline-success my-2 my-sm-0">Continuar</button>
					</div>
				</div>
			</form>

		</div>
		<!--- Footer -->
		<footer class="page-footer font-small blue">
			<div class="footer-copyright text-center py-3">© 2020 Copyright:
				<a href="https://urba.com/"> GrupoEscobar.com</a>
			</div>
		</footer>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
	</html>