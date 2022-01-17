


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>T e s t</title>
</head>
<body>
    <nav>
        <div class="menu d-flex justify-content-between align-items-baseline">
            <div class="col-md-3 text-center"><h6 class="logo">|S M A R T  C L O S E T|</h6></div>
            <div class="col-md-9">
                <ul class="d-flex justify-content-end">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="menu.php">Seleccionar</a></li>
                    <li><a href="#">Visual </a></li>
                    <li><a href="#">Voice </a></li>
                    <li><a href="#">Randomizer</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="filtro-negro">
            <h1 class="text-center">Smart Closet System</h1>
            <p class="text-center">The new way to pick your style</p>
            <footer class="text-center">
                BEE Proyect &copy; Instituto Tecnologico de Matamoros
            </footer>
        </div>
    </section>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>


<script>
		  if (annyang) {
		    // Definimos nuestro primer comando. Primero escribimos el comando y posteriormente la función a ejecutar.
		    var commandos = {
		    	'redes': function() {
		        document.getElementById("ejemplo3").value = "Redes:";
		        document.getElementById("ejemplo3").className = "btn btn-lg btn-success btn-block";
		        document.getElementById("ejemplo3").hidden = "";
		        document.getElementById("seleccionar").style.display = 'block';
		        document.getElementById("seleccionar").className = "btn btn-lg btn-primary btn-block";
		       
		      },
			    'seleccionar': function() {
		        window.location.href = "https://smartclosetv2.000webhostapp.com/menu.php";
		        document.getElementById("seleccionar").value = "Redireccionando";
		        document.getElementById("seleccionar").className = "btn btn-lg btn-success btn-block";
		      },
		    
		    };

		    // Agregamos nuestros comandos a annyang.
		    annyang.addCommands(commandos);

		    //Establecemos el lenguaje, en mi caso es español de México (puedes ver la lista completa de lenguajes soportados aquí).
		    annyang.setLanguage("es-MX");

		    // Empezmaos a escuchar.
		    annyang.start();
		 }
	</script>




</body>
</html>