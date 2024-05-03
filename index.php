<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Calificaciones</title>
	</head>
	<body>
		<div>
			<center>
				<h1>Calificaciones por materia</h1>
			</center>
		</div>
		<form name="APUSQUISQUI" method="POST" action="Registro.php">
			<i>Los campos con asteriscos(*) son obligatorios.</i>
			<p></p>
			<p></p>
			Ingresa el nombre del estudiante:
			<input type="text" name="nombre" id="nombre" value="" required/><br /><br />
			Ingresa los apellidos:
			<input type="text" name="apellido" id="apellido" value="" required/><br /><br />
			Ingresa el nombre del docente:
			<input type="text" name="docente" id="docente" value="" required/><br /><br />

			Calificación del primer parcial:
			<select name="primer_parcial" id="primer_parcial" required>
				<option value=""></option>

				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option></select
			><br /><br />

			Calificación del segundo parcial:
			<select name="segundo_parcial" id="segundo_parcial" required>
				<option value=""></option>

				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option></select
			><br /><br />

			Calificación del tercer parcial:
			<select name="tercer_parcial" id="tercer_parcial" required>
				<option value=""></option>

				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option></select
			><br /><br />

			  <input type="submit" value="Calificar"> 
    <button type="reset">Vaciar</button>
    <input type="submit" value="Enviar">
			<br /><br /><br /><br />
		</form>

		<i>Vista local de la bdd</i>
		<table id="tablaCalificaciones" border="1">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Apellidos</th>
					<th>Docente</th>
					<th>Primer Parcial</th>
					<th>Segundo Parcial</th>
					<th>Tercer Parcial</th>
					<th>Promedio</th>
				</tr>
			</thead>
			<tbody></tbody>
		</table>

		<script>
			function mostrarAlerta() {
				var nombre = document.getElementById("nombre").value;
				var apellidos = document.getElementById("apellido").value;
				var docente = document.getElementById("docente").value;
				var primer_parcial = parseInt(
					document.getElementById("primer_parcial").value
				);
				var segundo_parcial = parseInt(
					document.getElementById("segundo_parcial").value
				);
				var tercer_parcial = parseInt(
					document.getElementById("tercer_parcial").value
				);

				if (
					nombre === "" ||
					apellidos === "" ||
					docente === "" ||
					isNaN(primer_parcial) ||
					isNaN(segundo_parcial) ||
					isNaN(tercer_parcial)
				) {
					alert(
						"Por favor, complete todos los campos obligatorios y seleccione las calificaciones."
					);
				} else {
					var promedio =
						(primer_parcial + segundo_parcial + tercer_parcial) / 3;
					var tablaBody = document
						.getElementById("tablaCalificaciones")
						.getElementsByTagName("tbody")[0];
					var newRow = tablaBody.insertRow(tablaBody.rows.length);
					var celda1 = newRow.insertCell(0);
					var celda2 = newRow.insertCell(1);
					var celda3 = newRow.insertCell(2);
					var celda4 = newRow.insertCell(3);
					var celda5 = newRow.insertCell(4);
					var celda6 = newRow.insertCell(5);
					var celda7 = newRow.insertCell(6);

					celda1.innerHTML = nombre;
					celda2.innerHTML = apellidos;
					celda3.innerHTML = docente;
					celda4.innerHTML = primer_parcial;
					celda5.innerHTML = segundo_parcial;
					celda6.innerHTML = tercer_parcial;
					celda7.innerHTML = promedio;
				}
			}
		</script>
	</body>
</html>
