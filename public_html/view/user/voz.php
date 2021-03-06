<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../../index.php');
  }
  ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Reconocimiento de Voz</title>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
			integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
			crossorigin="anonymous"
		/>

		<link rel="stylesheet" href="../../css/main.css" />
	</head>
	<body>
		<div class="container">
			<h1><span>TODO</span>List</h1>

			<div class="form">
				<input
					type="text"
					class="todo"
					id="texto"
					placeholder="Say your task..."
				/>
				<button id="addButton"><i class="fas fa-plus"></i></button>
			</div>

			<div class="tasks" id="tasks">
				<!-- <div class="task__item">
					<input type="text" disabled />
					<button class="edit"><i class="fa fa-edit"></i></button>
					<button class="speak"><i class="fas fa-volume-up"></i></button>
					<button class="delete"><i class="fas fa-trash"></i></button>
				</div> -->
			</div>
		</div>
		<script src="../../js/main.js"></script>
	</body>
</html>
