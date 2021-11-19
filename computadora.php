<?php 

include("con_dbcybercafe.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['Procesador']) >= 1 && strlen($_POST['Tarjetagrafica']) >= 1) {
	    $Procesador = trim($_POST['Procesador']);
	    $Tarjetagrafica = trim($_POST['Tarjetagrafica']);
	    $RAM = trim($_POST['RAM']);
		$Discoduro= trim($_POST['Discoduro']);
		$Monitor= trim ($_POST['Monitor']);
	    $consulta = "INSERT INTO computadora( Procesador, Tarjetagrafica, RAM, Discoduro, Monitor) VALUES ('$Procesador','$Tarjetagrafica','$RAM','$Discoduro','$Monitor')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">Tus datos se enviaron corrctamente</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">Algo te fallo amigo .-.</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>