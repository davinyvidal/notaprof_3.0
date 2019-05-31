<?php
/**
* Página Plugin.
*
* Todos direitos reservado (c).
*
* Autora: Daviny Vidal.
*
*/

/** Plugin Simulado. */





$url_includes = "./np-includes.php";

if (file_exists($url_includes)){
	include"./np-includes.php"; // include do sysadmin.
} 

if (isset($proteger)) {

	if($proteger == 1){
	
?>	<b>Conversor de cores em valores - Resistor</b><br>
	<?php // Neste plugin eu crie um iframe com um sistema de Simulador de Resistor ?>
	
<?php
	}
}else{


	echo"Erro 404!";
}
?>
