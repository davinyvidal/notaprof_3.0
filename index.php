
<?php
/**
* Página inicial.
*
* Todos direitos reservado (c).
*
* Autor: Daviny Vidal.
*
*/

/** index.php */


include ("./np-ser/seguranca.php"); // Inclui o arquivo com o sistema de segurança.
	protegePagina(); // proteção.

$proteger = 1; // var de proteção
	
include"./np-includes.php"; // include do sysadmin.

$idsessao = $_SESSION['usuarioIDrf3']; // id da sessão.




function config_lll (){
	if($_SESSION['usuarioCodsegrf3'] == 1){
			$proteger = 1;
			@$id = $_POST['id']; // Obtendo o valor via get.
			@$id = (int)$id; // convertendo de string para inteiro.
			include"./np-center.php";
	}
}
function config_user (){
	if($_SESSION['usuarioCodsegrf3'] == 0){
			$idsessao = $_SESSION['usuarioIDrf3'];
			$proteger = 1;
			include"./np-config.php";
	}
}

function plugin (){
	$proteger = 1;
	$path = "np-temas/Plugins/";
	$diretorio = dir($path);
 	$cont = "0";

   	while($arquivo = $diretorio -> read()){
      		$cont = $cont + "1";
	}
	
	$cont = $cont - 2;
	for($iq =1; $iq <= $cont ; $iq++){
		include "./np-temas/Plugins/$iq.php";
	}

$diretorio -> close();
}

include "./lll/list.php";


include "./np-temas/Temas/$nptema/index.php";

?>
