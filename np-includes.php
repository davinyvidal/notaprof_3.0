

<?php
/**
* Página de includes.
*
* Todos direitos reservado (c).
*
* Autor: Daviny Vidal.
*
*/

/** np-includes.php*/


  if (isset($proteger)) { // if de proteção.

	if($proteger == 1){

	$url_sin = "http://localhost/si/dados.php";

	$nome_prof = $_SESSION['usuarioNome_profrf3'];

	$titulo = $_SESSION['usuarioTitulorf3'];

	$barra_aviso = $_SESSION['usuarioBarra_avisorf3'];

	$footer = "<h8<BR> Rodando em <b>PereiraNota</b> versão 2.0 - Gerenciador de aulas - Todos direitos reservado <center>2016</centr></h8>";

	$email_duvida = $_SESSION['usuarioEmail_duvidarf3'];

	$email_cotato = $_SESSION['usuarioEmail_contatorf3'];

        $nptema = $_SESSION['usuarioNptemarf3'];

	$quantidade_de_aluno = "9";


	}
} else {
	if (file_exists("./np-404.php")){
		include"./np-404.php"; // include do erro 404.
	}
	$proteger = 2;
}
?>
