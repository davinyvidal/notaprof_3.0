<?
/**
* Página login.
*
*
* Todos direitos reservado (c).
*
* Autor: Daviny Vidal.
*
*/

/** /login/index.php */ 

?>
<html>


<BR>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
    <head>
    <title>Aula On-line - Login</title>
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
		}
			.but-warning {
			color: #fff;
			background-color: #F28E00;
		}	
		.but-primary {
			color: #fff;
			background-color: #0068B4;
		}
	</style>
    </head>
    <body><center><BR><BR><BR><BR>
	<body>
   	<BR><div class="login" style= "background-color: #0068B4; display: inline-block; padding: 10px 10px; left: 39%; color: #fff;"><h1>('.')</h1>Aula do professor Rod Pereira<BR><BR>Administra aula de <b>Técnologia</b> e <b>Eletrônica</b>.

<BR><div class="login" style= "display: inline-block;padding: 10px 20px; left: 39%;  color: #fff;"><BR>
		<form id="my_form" action="../np-ser/valida.php" method="post"><BR>
		<img src="../np-img/iconeAcessoaoAluno.png"> <input type="text" name="usuario" id="usuario" value="E-mail"><BR> <BR>
		<img src="../np-img/chave.png"> <input type="password" name="senha" id="senha" value="Senha"> <br><BR><button class="but but-success">Entrar</button></form> 

	<form id="my_form" action="./valida.php" method="post">
	<button class="but but-warning">Esqueceu a senha</button>
	</form>
</div></div>
</body>
</html>


