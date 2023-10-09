<!DOCTYPE html>
<html>
<head>
	<title>Control de asesorias</title>
	<img width="300" src=https://cecytebc.edu.mx/hd/images/cecytebcprint.png align="left">
	<Div align=right>
</head>
<body>
<h1>CONTROL DE ASESORIAS</h1>
<h1>Materia: Programacion </h1>
<h1>Semestre: 4to</h1>
	<form method="get">
	
	<Div align=left>
			<label for="nombre">Nombre alumno:</label> 
		<select id="nombre" name="nombre">
			<option value="Elisa">Elisa</option>
			<option value="Flor">Flor</option>
			<option value="Andrea">Andrea</option>
		</select>
		<br>
		
		<label for="grupo">Grupo:</label>
		<input type="radio" id="grupo1" name="grupo" value="grupo1">
		<label for="grupo1">Grupo 1</label>
		<input type="radio" id="grupo2" name="grupo" value="grupo2">
		<label for="grupo2">Grupo 2</label>
		<br>
		
		<label for="materia">Materia:</label>
		<select id="materia" name="materia">
			<option value="calculo">Calculo</option>
			<option value="fisica">Fisica</option>
			<option value="ingles">Ingles</option>
		</select>
		<br>

		<label for="asesor">Asesor:</label>
		<select id="asesor" name="asesor">
			<option value="john">John</option>
			<option value="jane">Jane</option>
			<option value="jim">Jim</option>
		</select>
		<br>

		<label for="asistencia">Asistencias:</label>
		<input type="number" id="asistencia" name="asistencia">
		<br>

		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if(isset($_GET['submit'])){
			$nombre = $_GET['nombre'] ?? null;
			$materia = $_GET['materia'] ?? null;
			$asesor = $_GET['asesor'] ?? null;
			$grupo = $_GET['grupo'] ?? null;
			$asistencia = $_GET['asistencia'] ?? null;

			if($asistencia >= 8){
		echo "<p>Felicitaciones $nombre aprobaste las asesorias de $materia con $asesor en el $grupo con $asistencia asistencias!</p>";
			}
			else{

				$noAsistencia = 8 - $asistencia;
		echo "<p>Lo lamento $nombre necesistas $noAsistencia asistencias mas para pasar las asesorias de $materia con $asesor en el $grupo.</p>";
			}
		}
	?>
</body>
</html>
</body>
</html>