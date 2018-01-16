<?php
$contprimos=0;
$contadorcolumnas=0;
if(!isset($_POST["numerodeprimos"]) && !isset($_POST["numerodecolumnas"])) 
{
	// si no se reciben cosas se muestra el formuchachilario
?>
	
		<form action="inicio.php" method="post">
			<label for="numerodeprimos">Escriba la cantidad de numeros primos</label>
			<input type="text" name="numerodeprimos"/><br />
			<label for="numerodecolumnas">Introduzca cantidad de columnas   </label>
			<input type="text" name="numerodecolumnas" /><br />
			<input type="submit" value="Pintamelos"/><br />
			
		</form>
<?php 
}
else
{
	//MOVIDA QUE CALCULA LA HOSTIA DE BIEN LOS NUMEROS PRIMURAS
	$numerodeprimos=$_POST["numerodeprimos"];
	$numerodeprimos=(int)$numerodeprimos;
	$numerodecolumnas=$_POST["numerodecolumnas"];
	//echo $numerodeprimos;
	$contprimos=0;
	print "<table border=\"true\">";
	print "<tr >";
	for ($numero=0; $contprimos < $numerodeprimos ; $numero++) { 
	$primo=0;
 
	    for($b = 1;$b < $numero; $b++){
	        if($numero % $b == 0){
	            $primo++;
	        }
	    }
	    if($primo < 2 ){
	        //tabla puta madre con bucles for
			
			
			print "<td >";
			echo $numero;
			print "</td>";
			$contadorcolumnas++;
			if($numerodecolumnas==$contadorcolumnas)
			{
				print "</tr>";
				print "<tr>";
				$contadorcolumnas=0;
			}
			
	    	$contprimos++;
    	} 
	}
	print "</table>";
}

?>