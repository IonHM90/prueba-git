<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Document</title>

	<!--=====================================
	Plugins CSS
	======================================-->
	

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!--=====================================
	Plugins JS
	======================================-->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!-- Latest compiled Fontawesome -->
<script src="https://kit.fontawesome.com/a97665eb75.js" crossorigin="anonymous"></script>

</head>

<body>
	<div class="justify-content-center text-center py-5 mt-5 d-flex">

		<form method="post" class=" p-5 bg-light" >

			<h1>Conversor EUR-USD</h1>
<?php 
		echo date("l-d-m-Y"); 
		echo ''
		?>
			<div class="form-group">
				<label for="eur" name="eur">Euros:</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="fas fa-euro-sign"></i>
						</span>
					</div>
					<input type="text" class="form-control" id="eur" name="euros">
				</div>
			</div>


				
			<div class="form-group">
				<label for="doll">Dólares:</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="fas fa-dollar-sign"></i>
						</span>
					</div>
					<input type="text" class="form-control" id="doll" name="dolares">
				</div>
			</div>
			<?php  

				if(isset($_POST["convertir"])){

				$conversion = ControladorConversion::convertir();

					if(empty($_POST["euros"]) && empty($_POST["dolares"])){

							echo '<script>

						if(window.history.replaceState){

							window.history.replaceState(null, null, window.location.href)
						}

						</script>';

						echo '<div class="alert alert-warning">Por favor, rellena uno de los campos</div>';
					}else{

						if(!empty($_POST["euros"]) && empty($_POST["dolares"])){

							echo '<script>

							if(window.history.replaceState){

								window.history.replaceState(null, null, window.location.href)
							}

							</script>';

							echo '<div class="alert alert-success">'.$_POST["euros"].' EUR equivalen a '.$conversion.' USD</div>';

						}

						if(empty($_POST["euros"]) && !empty($_POST["dolares"])){

							echo '<script>

							if(window.history.replaceState){

								window.history.replaceState(null, null, window.location.href)
							}

							</script>';

							echo '<div class="alert alert-success">'.$_POST["dolares"].' USD equivalen a '.$conversion.' EUR</div>';

						}
					}			
				}
			?>


			<button type="submit" name="convertir" class="btn btn-primary">Convertir</button>

			

		</form>
	</div>
	
</body>
</html>