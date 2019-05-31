<?php
/**
* Página admin.
*
* Todos direitos reservado (c).
*
* Autora: Daviny Vidal.
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
		.but-but {
			color: #fff;
			background-color: #009835;
			
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
   	<BR><div class="db" style= "background-color: #0068B4; display: inline-block; padding: 20px 20px; left: 39%; 	color: #fff;"><br>

		

<?php

include ("../np-ser/seguranca.php"); // Inclui o arquivo com o sistema de segurança.
	protegePagina(); // proteção.
if($_SESSION['usuarioCodsegrf3'] == 0){

		$id = $_SESSION['usuarioIDrf3'];

		if (isset($_POST['nome'])) {
				$nome_puro = $_POST['nome']; // Obtendo o valor via POST.
				$validacao1 = 12;
			if (ctype_alpha ($nome_puro)){
				$nome = $nome_puro;
				$validacao2 = 12;
				$mensagem_nome = "";
			
			}else{	
				$mensagem_nome = "Campo 'Nome' preenchido errado!<br>";
				$validacao2 = 0;
				
			}

		}else{
			$validacao1= 0;
		}
		
		if (isset($_POST['senha']) && isset($_POST['repetir_senha'])) { // Pega o valor da variável $_GET['pagina']
   			$senha = $_POST['senha']; // Obtendo o valor via POST.
			$rsenha = $_POST['repetir_senha']; // Obtendo o valor via POST.
			$validacao3 = 12;
			if($senha == $rsenha && $senha !=="" && $rsenha !=="" ){
				$senha = MD5($senha);
				$validacao4 = 12;
				$mensagem_senha = "";
			}else{
				$mensagem_senha = "senha não coincidem ou está em branco!";				
				$validacao4 = 0;
			}
			
  		} else {
			
			$validaca3 = 0;
  		}

		if (isset($_POST['profissao']) && isset($_POST['layout']) ) {
			$validacao5 = 12;
			$profissao = $_POST['profissao']; // Obtendo o valor via POST.
			$layout = $_POST['layout']; // Obtendo o valor via POST.		
			$profissao = mysql_escape_string($profissao);

			if($layout == "10"){
				$mensagem_tema ="";
				$validacao6 = 12;
			}else{
				$mensagem_tema = "Tema não existente!";
				$validacao6 = 0;
			}
		}else{
			$validacao5 = 0;

		}




	
	if($validacao1 == 12  && $validacao3 == 12 && $validacao5 == 12){
	include("cone.php"); // conexão db.

		if ($validacao2 == 12 && $validacao6 ==12 && $validacao4 == 12 ){
	
		// Montamos a consulta SQL para deletar a(s) notícia(s) com ID maior ou igual a três
		$query = "UPDATE `usuarios` SET `senha` = '".$senha."' , `nome` = '".$nome."' , `aluno_prof` = '".$profissao."' , `nptema` = '".$layout."'   WHERE `id` = '".$id."'";
		// Executa a query
		$atualiza = mysql_query($query);
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
			echo "<h2>Dados sobre o erro:</h2> $mensagem_senha<br>$mensagem_nome<br> $mensagem_tema<br>";
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
