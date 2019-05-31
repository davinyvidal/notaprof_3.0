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

		if (isset($_POST['id'])) { // Pega o valor da variável $_GET['pagina']
   			$id = $_POST['id'];
			$id = (int)$id;
			$validacao1 = 12;
  		} else {
   			 $validacao1 = 0;
  		}
		if (isset($_POST['nome'])) {
				$nome_puro = $_POST['nome']; // Obtendo o valor via POST.
			if (ctype_alpha ($nome_puro)){
				$nome = $nome_puro;
				$validacao2 = 12;
				$mensagem_nome = "";
				$validacao3 = 12;
			}else{	
				$mensagem_nome = "Campo 'Nome' preenchido errado!<br>";
				$validacao2 = 0;
				$validacao3 = 12;
			}

		}else{
			$validacao3 = 0;
		}
		
		
		function validaEmail($email) {
			$conta = "^[a-zA-Z0-9\._-]+@";
			$domino = "[a-zA-Z0-9\._-]+.";
			$extensao = "([a-zA-Z]{2,4})$";
			$pattern = $conta.$domino.$extensao;
			if (preg_match("/$pattern/", $email))
			return true;
			else
			return false;
		}

		
		
		if (isset($_POST['e_mail'])) {
			$e_mail= $_POST['e_mail']; // Obtendo o valor via POST.
			if (validaEmail($e_mail)) {
				$e_mail = $e_mail;
				$validacao4 = 12;
				$mensagem_email ="";
				$validacao5 = 12;
			} else {
				$mensagem_email = "O e-mail inserido é invalido!";
				$validacao4 = 0;
				$validacao5 = 12;
			}
		}else{

			$validacao5 = 0;
		
		}
		if (isset($_POST['profissao']) && isset($_POST['licao']) && isset($_POST['apostila']) && isset($_POST['localizado']) && isset($_POST['simulador']) && isset($_POST['avaliacao']) && isset($_POST['nota']) && isset($_POST['hist']) && isset($_POST['titulo']) && isset($_POST['barra_aviso']) && isset($_POST['notificacao']) && isset($_POST['duvida']) && isset($_POST['atividade']) && isset($_POST['layout'])) {


			$profissao = $_POST['profissao']; // Obtendo o valor via POST.		
			$profissao = mysql_escape_string($profissao);
			$licao = $_POST['licao']; // Obtendo o valor via POST.
			$licao = mysql_escape_string($licao);
			$apostila = $_POST['apostila']; // Obtendo o valor via POST.
			$apostila = mysql_escape_string($apostila);
			$localizado = $_POST['localizado']; // Obtendo o valor via POST.
			$localizado = mysql_escape_string($localizado);
			$simulador = $_POST['simulador']; // Obtendo o valor via POST.
			$simulador = mysql_escape_string($simulador);
			$avaliacao = $_POST['avaliacao']; // Obtendo o valor via POST.
			$avaliacao = mysql_escape_string($avaliacao);
			$nota = $_POST['nota']; // Obtendo o valor via POST.
			$nota = mysql_escape_string($nota);
			$hist = $_POST['hist']; // Obtendo o valor via POST.
			$hit = mysql_escape_string($hist);
			$titulo = $_POST['titulo']; // Obtendo o valor via POST.
			$titulo = mysql_escape_string($titulo);
			$barra_aviso = $_POST['barra_aviso']; // Obtendo o valor via POST.
			$barra_aviso = mysql_escape_string($barra_aviso);
			$notificacao = $_POST['notificacao']; // Obtendo o valor via POST.
			$notificacao = mysql_escape_string($notificacao);
			$duvida = $_POST['duvida']; // Obtendo o valor via POST.
			$duvida = mysql_escape_string($duvida);
			$atividade = $_POST['atividade']; // Obtendo o valor via POST.
			$atividade = mysql_escape_string($atividade);
			$layout = $_POST['layout']; // Obtendo o valor via POST.

			if($layout == "10" or "11" or "12" or "13"){
				if($layout == 10){
					$nptema = "pure";
				}
				if($layout == 11){
					$nptema = "inlges";
				}
				if($layout == 12){
					$nptema = "bloqueio";
				}
				if($layout == 13){
					$nptema = "Inadis";
				}
				$mensagem_tema ="";
				$validacao7 = 12;
			}else{
				$validacao7 = 0;
				$mensagem_tema = "Tema não existente!";
			}
		
			$validacao6 = 12;
		}else{
			$validacao6 = 0;
			
		}

		if($validacao3 == 12  && $validacao5 == 12 && $validacao6 == 12){
			include("cone.php"); // conexão db.

			if ($validacao1 == 12 && $validacao2 == 12 && $validacao4 == 12 && $validacao7 = 12 ){


	
	// Montamos a consulta SQL para deletar a(s) notícia(s) com ID maior ou igual a três
	$query = "UPDATE `usuarios` SET `nome` = '".$nome."',`usuario` = '".$e_mail."', `aluno_prof` = '".$profissao."',`aluno_licao` = '".$licao."',`aluno_apostila` = '".$apostila."',`aluno_localidade` = '".$localizado."',`aluno_simulador` = '".$simulador."',`aluno_exame` = '".$avaliacao."',`aluno_nota` = '".$nota."',`aluno_hist` = '".$hist."',`titulo` = '".$titulo."',`barra_aviso` = '".$barra_aviso."',`aluno_notificacao` = '".$notificacao."',`aluno_duvida` = '".$duvida."',`nptema` = '".$nptema."',`atividade` = '".$atividade."' WHERE `id` = '".$id."'";
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
			echo "<h2>Dados sobre o erro:</h2> $mensagem_email<br>$mensagem_nome<br>$mensagem_tema";
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
