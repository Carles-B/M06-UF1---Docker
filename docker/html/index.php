<?php

require_once('db.php');
$query = "select name, age, gender from characters;";
$result = mysqli_query($con,$query);


?>
<!DOCTYPE html>
<html>
<head>
<title>Carles html</title>
<link href="./style.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
<h1>Carles Barranco Tasca con Zara (DOCKER SWARM)</h1>
</header>
<main>
<h2>Aficiones</h2>
<ul>
<li>Ciberseguridad</li>
<li><a href="https://wiki.installgentoo.com/wiki/Main_Page">>install gentoo</a></li>
<li>Videojuegos</li>
<li><a href="https://without-systemd.org/wiki/index_php/Arguments_against_systemd/">no systemd</a></li>
</ul>
<h2>Galeria</h2>
<ul class=gallery>
<li><a href="https://wallpapercave.com/dwp1x/wp11928910.jpg"><img src="Paisaje1.jpg" class=galimage title="Rio con aguila" alt="Imagen de un rio en el que a la izquierda se ve una construccion en forma de aguila al fondo una gran ciudad entre las montañas y en el propio rio gente en barco. La imagen tiene un enlace para verla mas grande." /></a></li>
<li><a href="https://wallpapercave.com/wp/wp11928902.jpg"><img src="Paisaje2.jpg" class=galimage title="Barcos" alt="Imagen donde se ve a guerreros observando como se le hace entrega de una espada a un hombre en el mar estan rodeados por grandes barcos de batalla. La imagen tiene un enlace para verla mas grande." /></a></li>
<li><a href="https://wallpapercave.com/wp/wp11928904.jpg"><img src="Paisaje3.jpg" class=galimage title="Señora en piedra" alt="Imagen donde se ven muchas estatuas de dioses nordicos, a la izquierda una gran mano sujetando una espada y en el centro una mujer gravada en la roca. La imagen tiene un enlace para verla mas grande." /></a></li>
<li><a href="https://wallpapercave.com/wp/wp11928922.jpg"><img src="Paisaje4.jpg" class=galimage title="Aldea" alt="Imagen donde se ve una aldea vikinga y en el frente 2 -+estaduas de unos buhos en forma de pilar. Al lado de los buhos hay un hombre dando un obsequio a una mujer. La imagen tiene un enlace para verla mas grande." /></a></li>
</ul>


<h2>Personajes sacados de la BBDD</h2>
<table>
<tr>
<td> Nombre </td>
<td> Edad </td>
<td> Sexo </td>
</tr>
<tr>
<?php

while($row = mysqli_fetch_assoc($result))
{

?>
    	<td><?php echo $row['name']; ?></td>
    	<td><?php echo $row['age']; ?></td>
    	<td><?php echo $row['gender']; ?></td>
</tr>
<?php
}
?>
</table>



</main>
<footer>
<p>Carles Barranco M04-UF1 --> programación con XML</p>
</footer>
</body>
</html>

