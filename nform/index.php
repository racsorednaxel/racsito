<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="favicon.ico"/>
    
    <title>Proofs</title>
    
    <!--Import Google Icon Font-->
      
      
    <!-- Este es MI ESTILOS -->
      <link rel="stylesheet" href="">

      <!-- Compiled and minified MaterializeCSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <form name="ej" id="ej" action="ej.php" method="post" style="width: 300px">
            <input name="nombre" type="text" placeholder="Nombre completo">
            <input name="tel" type="text" placeholder="Número de teléfono">
            <input name="email" type="text" placeholder="Correo electrónico">
			Elija un horario:
			<select name="hora" id="hora">
				<option value="1">De 2:00pm a 2:30pm</option>
				<option value="2">De 3:00pm a 3:30pm</option>
				<option value="3">De 4:00pm a 4:30pm</option>
				<option value="4">De 5:00pm a 5:30pm</option>
				<option value="5">De 6:00pm a 6:30pm</option>
			</select>
			<input class="btn" type="submit" value="ENVIAR" />
    </form>
            
    <!-- INICIALIZACIONES DE JAVA-SCRIPT: Todas van aquí: -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <!-- INICIALIZACION para el menu Hamburguesa y Dropdown: -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        M.AutoInit();
    });
    </script>
    
</body>
</html>