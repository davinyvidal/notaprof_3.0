<?php
/**
* Página admin.
*
* Todos direitos reservado (c).
*
* Autor: Daviny Vidal.
*
*/

/** /lll/admin-list */

?>
<html>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
    <head>
    <title>... ... ... </title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <style>
		Body{ 
			background-color: #ccc; }
		p {
			color: #000099;
		}
		.but {
			display: inline-block;
			background-color: #ccc;
			color: #444;
			padding: 10px 20px;
			text-decoration: none;
			box-sizing: border-box;
			font-family: Helvetica, Arial, sans-serif;
			font-size: 14px;
			border: 0px;
		}		
		.but-success {
			color: #fff;
			background-color: #009835;
			font-size: 40px;
		}
		.but-warning {
			color: #fff;
			background-color: #F28E00;
			font-size: 40px;
		}	
		.but-primary {
			color: #fff;
			background-color: #0068B4;
		}
	</style>
    </head>
    <body><center><BR><BR><BR><BR>
	<body>
   	<BR><div class="db" style= "background-color: #0068B4; display: inline-block; padding: 20px 20px; left: 39%; 	color: #fff;"><br>


<?php

include ("../np-ser/seguranca.php"); // Inclui o arquivo com o sistema de segurança.
	protegePagina(); // proteção.
if($_SESSION['usuarioCodsegrf3'] == 1){
		
		function validaContato($email) {
			$conta = "^[a-zA-Z0-9\._-]+@";
			$domino = "[a-zA-Z0-9\._-]+.";
			$extensao = "([a-zA-Z]{2,4})$";
			$pattern = $conta.$domino.$extensao;
			if (preg_match("/$pattern/", $email))
			return true;
			else
			return false;
		}
		if (isset($_POST['email_contato'])) { 
			$email_contato = $_POST['email_contato']; // Obtendo o valor via POST.
			$email_contato = mysql_escape_string($email_contato);
			$validacao2 = 12;
			if (validaContato($email_contato)) {
				$email_contato = $email_contato;
				$validacao1 = 12;
				$mensagem_contato ="";
				
			} else {
				$mensagem_contato = "O e-mail contato inserido é invalido!";
				$validacao1 = 0;
			}
		}else{
		
		$validacao2 = 0;
		}
		if (isset($_POST['nome_prof'])) { 
			$nome_prof = $_POST['nome_prof']; // Obtendo o valor via POST.
			$nome_prof = mysql_escape_string($nome_prof);
			$validacao4 = 12;
			if (ctype_alpha ($nome_prof)){
			
				$validacao3 = 12;
				$mensagem_nome = "";
			}else{	
				$mensagem_nome = "Campo 'Nome' preenchido errado!<br>";
				$validacao3 = 0;
			}
		}else{

		$validacao4 = 0;
		}
		
		function validaDuvida($email) {
			$conta = "^[a-zA-Z0-9\._-]+@";
			$domino = "[a-zA-Z0-9\._-]+.";
			$extensao = "([a-zA-Z]{2,4})$";
			$pattern = $conta.$domino.$extensao;
			if (preg_match("/$pattern/", $email))
			return true;
			else
			return false;
		}

		if (isset($_POST['email_duvida'])) { 	
			$email_duvida = $_POST['email_duvida']; // Obtendo o valor via POST.
			$email_duvida = mysql_escape_string($email_duvida);
			$validacao6 = 12;
			if (validaDuvida($email_duvida)) {
				$email_duvida = $email_duvida;
				$validacao5 = 12;
				$mensagem_duvida ="";
			} else {
				$mensagem_duvida = "O e-mail para mensagens inserido é invalido!";
				$validacao5 = 0;
			}
		
		}else{

			$validacao6 = 0;

		}

		if($validacao2 == 12  && $validacao4 == 12 && $validacao6 == 12){
			include("cone.php"); // conexão db.

			if ($validacao1 == 12 && $validacao3 == 12 && $validacao5 == 12){



		for($id = 0; $id <= 9; $id++){
	
		// Montamos a consulta SQL para deletar a(s) notícia(s) com ID maior ou igual a três
		$query = "UPDATE `usuarios` SET `email_contato` = '".$email_contato."', `nome_prof` = '".$nome_prof."',`email_duvida` = '".$email_duvida."'  WHERE `id` = '".$id."'";
		// Executa a query
		$atualiza = mysql_query($query);
		}
			if ($atualiza) {	
				echo "<h1 class='but but-success'>:) Atualizado!</h1><br>A dados foi atualizada com sucesso!<br>";
				echo "<div class='url' style= 'display: inline-block;padding: 10px 20px; left: 39%;  color: #fff;'>";
				echo "<br><a href='http://www.pereira.pro.br/~rod/' class='but'>Voltar para página principal</a>";

			} else {
// Exibe dados sobre o erro:
				echo "erro:";
			}
			
		}else{

			echo "<h1 class='but but-warning'>:) Erro ao enviar!</h1><br>";// Exibe dados sobre o erro:
			echo "<h2>Dados sobre o erro:</h2> $mensagem_nome <br> $mensagem_contato <br> $mensagem_duvida<br>  ";
			echo "<div class='url' style= 'display: inline-block;padding: 10px 20px; left: 39%;  color: #fff;'>";
			echo "<br><a href='http://www.pereira.pro.br/~rod/' class='but'>Voltar para página principal</a>";

		}
	}else{
		echo"<br><h1 class='but but-warning'>:) 500!</h1><br>sessão expirada no pereira.pro.br.

		<BR><Br>
		<div class='url' style= 'display: inline-block;padding: 10px 20px; left: 39%;  color: #fff;'>
		<br><a href='http://www.pereira.pro.br/~rod/' class='but but-but'>Voltar para página principal</a>";
	}
}else{
		echo"<br><h1 class='but but-warning'>:) 404!</h1><br>O endereço digitado na barra de <i>url</i> não existe no pereira.pro.br.

		<BR><Br>
		<div class='url' style= 'display: inline-block;padding: 10px 20px; left: 39%;  color: #fff;'>
		<br><a href='http://www.pereira.pro.br/~rod/' class='but but-but'>Voltar para página principal</a>	
";
}

?>
	</div>
  </div>
</body>
</html>
