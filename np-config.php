<?php
/**
* Página admin.
*
* Todos direitos reservado (c).
*
* Autor: Daviny Vidal.
*
*/

/** np-config.php */

$url_includes = "./np-includes.php";

if (file_exists($url_includes)){
	include"./np-includes.php"; // include do sysadmin.
}

$url_includes = "./lll/list.php";

if (file_exists($url_includes)){
	include"./lll/list.php"; // include do sysadmin.
}

if (isset($proteger)) {

	if($proteger == 1){

?>

<form action="./lll/validacao_config.php" method="post">  
<center>
<a href="https://www.ime.usp.br/~glauber/html/acentos.htm" target="_blank">[?] - Caracteres especiais</a> - Configurações da sua conta:
</center> <hr>
	<BR><BR>
     	Nome: <input type="text" name="nome" id="nome" value='<?php echo "$nome[$idsessao]";?>'/> <br>
	Senha: <input type="password" name="senha" id="senha"/> <br>	
	Repetir senha: <input type="password" name="repetir_senha" id="repetir_senha"/> <br>
     	Profisão: <input type="text" name="profissao" id="profissao" value='<?php echo "$profissao[$idsessao]";?>'/> <br>	
	layout: <select name="layout">
	<option value="10">Pure</option>
	</select><BR><BR>
<button type='submit' class='btn btn-success'>enviar</button><br></form><BR>
    </body>
</html>
<?php
	}
} else {

	echo" Erro 404!";
}
?>
