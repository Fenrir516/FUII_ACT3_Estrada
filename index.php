<!DOCTYPE html>
<html>
<head>
	<title>Computadora</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Computadora</h1>
    	<input type="text" name="Procesador" placeholder="Porcesador">

    	<input type="text" name="Tarjetagrafica" placeholder="Tarjeta grafica">

		<input type="text" name="RAM" placeholder="RAM">

		<input type="text" name="Discoduro" placeholder="Disco duro">

		<input type="text" name="Monitor" placeholder="Monitor">

    	<input type="submit" name="register">

    </form>
        <?php 
        include("computadora.php");
        ?>
</body>
</html>