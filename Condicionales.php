<html>
<head>
<title> Signos zodiacales *brillitos* </title>
<link rel="shortcut icon" href="colegio_técnico_nacional_informática.png">
</head>
<body>
<form action="Condicionales.php" method="POST">

<h2> Introduzca el día de su nacimiento <h2>
<select name="dia">
<option value=1> 1 </option>
<option value=2> 2 </option>
<option value=3> 3 </option>
<option val> 4 </option>
<option value=5 > 5 </option>
<option value=6 > 6 </option>
<option value=7 > 7 </option>
<option value=8 > 8 </option>
<option value=9 > 9 </option>
<option value=10 > 10 </option>
<option value=11 > 11 </option>
<option value=12 > 12 </option>
<option value=13 > 13 </option>
<option value=14 > 14 </option>
<option value=15 > 15 </option>
<option value=16 > 16 </option>
<option value=17 > 17 </option>
<option value=18 > 18 </option>
<option value=19 > 19 </option>
<option value=20 > 20 </option>
<option value=21 > 21 </option>
<option value=22 > 22 </option>
<option value=23 > 23 </option>
<option value=24 > 24 </option>
<option value=25 > 25 </option>
<option value=26 > 26 </option>
<option value=27 > 27 </option>
<option value=28 > 28 </option>
<option value=29 > 29 </option>
<option value=30 > 30 </option>
<option value=31 > 31 </option>
</select>

<h2> Introduzca el mes de su nacimiento </h2>
<select name="mes">
<option value=1 > Enero </option>
<option value=2 > Febrero </option>
<option value=3 > Marzo </option>
<option value=4 > Abril </option>
<option value=5 > Mayo </option>
<option value=6 > Junio </option>
<option value=7 > Julio </option>
<option value=8 > Agosto</option>
<option value=9 > Septiembre</option>
<option value=10 > Octubre </option>
<option value=11 > Noviembre </option>
<option value=12 > Diciembre </option>
</select>

<br>
<br>
<input type="submit" value="Listo">
<br>
<br>
<?php
 $dia=$_POST["dia"];
 $mes=$_POST["mes"];
 if ($mes==1) {
	if ($dia<=20) {
	 echo "Opa, tu signo es 'Capricornio' ";
 
	}else { 
	echo "Opa, tu signo es 'Acuario' ";
 }

 }

 if ($mes==2) {
	if ($dia<=19) {
	 echo "Opa, tu signo es 'Acuario' ";
 
	}else { 
	echo "Opa, tu signo es 'Piscis' ";
 }

 }

if ($mes==3) {
	if ($dia<=20) {
	 echo "Opa, tu signo es 'Piscis' ";
 
	}else { 
	echo "Opa, tu signo es 'Aries' ";
 }

 }
 
 if ($mes==4) {
	if ($dia<=21) {
	 echo "Opa, tu signo es 'Aries' ";
 
	}else { 
	echo "Opa, tu signo es 'Tauro' ";
 }

 }
 
 if ($mes==5) {
	if ($dia<=21) {
	 echo "Opa, tu signo es 'Tauro' ";
 
	}else { 
	echo "Opa, tu signo es 'Géminis' ";
 }

 }
 
 if ($mes==6) {
	if ($dia<=21) {
	 echo "Opa, tu signo es 'Géminis' ";
 
	}else { 
	echo "Opa, tu signo es 'Cáncer' ";
 }

 }
 
 if ($mes==7) {
	if ($dia<=22) {
	 echo "Opa, tu signo es 'Cáncer' ";
 
	}else { 
	echo "Opa, tu signo es 'Leo' ";
 }

 }
 
 if ($mes==8) {
	if ($dia<=22) {
	 echo "Opa, tu signo es 'Leo' ";
 
	}else { 
	echo "Epa el mejor, tu signo es 'Virgo' ";
 }

 }
 
 if ($mes==9) {
	if ($dia<=22) {
	 echo "Epa el mejor, tu signo es 'Virgo' ";
 
	}else { 
	echo "Opa, tu signo es 'Libra' ";
 }

 }
 
 if ($mes==10) {
	if ($dia<=22) {
	 echo "Opa, tu signo es 'Libra' ";
 
	}else { 
	echo "Opa, tu signo es 'Escorpio' ";
 }

 }
 
 if ($mes==11) {
	if ($dia<=22) {
	 echo "Opa, tu signo es 'Escorpio' ";
 
	}else { 
	echo "Opa, tu signo es 'Sagitario' ";
 }

 }
 
 if ($mes==12) {
	if ($dia<=22) {
	 echo "Opa, tu signo es 'Sagitario' ";
 
	}else { 
	echo "Opa, tu signo es 'Capricornio' ";
 }

 }
?>
</html>
