
<!DOCTYPE HTML>
<HTML>
<head>
	<title>Ejercicio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="matematica.css">
</head>
<body background="mat.jpg">
	<h1>Cálculos Geométricos</h1><br>
	<table align="center" width="80%" align="center">
	<tr>
	<td>
	<div id="cilindro">
		<p class="textos">Cilindro: V=Pi.r<sup>2</sup>.h</p><br>
		<img src="cilindro.jpg">
		<form action="matematica.php" method="post">
			<input type="number" name="base" placeholder="Base"><br>
		<input type="number" name="altura" placeholder="Altura"><br>
	<input type="number" name="profundidad" placeholder="Profundidad"><br>
	<input type="submit" name="enviar">
	<input type="submit" name="borrar" value="Borrar">
	
<?php
$pi = 3.1416;
@$base = $_POST['base'];
@$radio = $base/2;
@$altura = $_POST['altura'];
@$profundidad = $_POST['profundidad'];
$volcilindro = $pi*(pow($radio, 2)*$altura);
if (@$_POST['borrar']) {
	$volcilindro = 0;
}
echo '<br>';
echo "V= ".$pi."*".$radio."^2"."*".$altura.'<br>';
echo "V= ".$volcilindro." "."cm".'<sup>3</sup>';

?>
	</form>
	</div>
	</td>
	<td>
		<div id="cilindro">
		<p class="textos">Esfera: V=4/3.pi.r^3.h<sup>2</sup>.h</p><br>
		<img src="esfera.jpg">
		<form action="matematica.php" method="post">
			<input type="number" name="base1" placeholder="Base"><br>
		<input type="number" name="altura1" placeholder="Altura"><br>
	<input type="number" name="profundidad1" placeholder="Profundidad"><br>
	<input type="submit" name="enviar1">
	<input type="submit" name="borrar1" value="Borrar">
	
<?php
@$pi1 = 3.1416;
@$base1 = $_POST['base1'];
@$radio1 = $base1/2;
@$altura1 = $_POST['altura1'];
@$profundidad1 = $_POST['profundidad1'];
$volesfera = (4/3)*($pi1)*(pow($radio1, 3)*($altura1));
if (@$_POST['borrar1']) {
	$volesfera = 0;
}
echo '<br>';
echo "V= 4/3"."*".$pi1."*"."r"."<sup>3</sup>".'<br>';
echo "V= ".$volesfera." "."cm".'<sup>3</sup>';

?>
	</td>
	</tr>
	</table>
</body>
</HTML>