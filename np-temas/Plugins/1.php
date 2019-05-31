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
	<iframe src="http://pereira.pro.br/projeto.php?name=125" name=conteudo width=600 height=350 border="0" frameborder="0"></iframe>
		 
<?php
	}
}else{


	echo"Erro 404!";
}
?>
