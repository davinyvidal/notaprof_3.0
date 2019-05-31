<?
/**
* Página Bloqueio.
*
*
* Todos direitos reservado (c).
*
* Autora: Daviny Vidal.
*
*/

/** /np-tema/Temas/bloqueio.php */ 

?><?php

$url_includes = "./np-includes.php";

if (file_exists($url_includes)){
	include"./np-includes.php"; // include do sysadmin.
} 

if (isset($proteger)) {

	if($proteger == 1){

?><html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Bloqueio</title>
<head>
<body>
... Sua Conta foi suspensa. por motivo administrativo.<br>
<BR>
<p>Veja opçôes cabíveis que pode ser tomada(s).<BR>
<BR>
1 - Entre em contato com seu administrador(a) "tutor(a), professor(a)" para esclarecimento(s).<BR>
<BR> Ou <BR>
<BR>
2 - Você terminou o(s) estudo(s) e está apto para receber o certificado.
<BR>
<BR><a href="./np-sair.php">Sair</a>
</body>
</html>
<?php
	}
} else {

	include"../../../np-404.php";
}
?>
