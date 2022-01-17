
  <?php

  

  session_start();


  if(isset($_SESSION['id'])){
    header('location: controller/redirec.php');
  }

?>


<!DOCTYPE html>
<html>
 

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
       Smart Closet 
    </title>
    
	<link rel="stylesheet" href="/css/estilo.css">
 
    
  </head>
  <body>

    

 
        <div class="container">
          <div class="box">
            <h2 class="name">Auditivo</h2>
            <a href="login.php" class="buy">Elegir</a>
            <div class="circle"></div>
            <img width="100" height="100" src="/img/mute.png" class="product">
          </div>
          <div class="box">
            <h2 class="name">Visual</h2>
            <a href="https://closetsmart.000webhostapp.com/" class="buy">Elegir</a>
            <div class="circle"></div>
            <img width="100" height="100" src="/img/visual.png" class="product">
          </div>
          <div class="box">
            <h2 class="name">Fisica o Motora</h2>
            <a href="#" class="buy">Elegir</a>
            <div class="circle"></div>
            <img width="100" height="100" src="/img/mental.png" class="product">
          </div>
        </div>
        
        
        
        
        <script src="vanilla-tilt.min.js"></script>
        <script>
          VanillaTilt.init(document.querySelectorAll(".box"), {
            max: 25,
            speed: 400
          });
        </script>
        
   
   <script src="/js/config.js"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>


<script>
		  if (annyang) {
		    // Definimos nuestro primer comando. Primero escribimos el comando y posteriormente la función a ejecutar.
		    var commandos = {
		    	'redes': function() {
		        document.getElementById("ejemplo3").value = "Redes:";
		        document.getElementById("ejemplo3").className = "btn btn-lg btn-success btn-block";
		        document.getElementById("ejemplo3").hidden = "";
		        document.getElementById("visual").style.display = 'block';
		        document.getElementById("visual").className = "btn btn-lg btn-primary btn-block";
		        document.getElementById("audio").style.display = 'block';
		        document.getElementById("audio").className = "btn btn-lg btn-primary btn-block";
		      },
			    'visual': function() {
		        window.location.href = "https://smartclosetv2.000webhostapp.com/login.php";
		        document.getElementById("visual").value = "Redireccionando";
		        document.getElementById("visual").className = "btn btn-lg btn-success btn-block";
		      },
		      
		      'audio': function() {
		        window.location.href = "https://closetsmart.000webhostapp.com/login.php";
		        document.getElementById("audio").value = "Redireccionando";
		        document.getElementById("audio").className = "btn btn-lg btn-success btn-block";
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
