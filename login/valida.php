<?
/**
* Página Validar Senha.
*
*
* Todos direitos reservado (c).
*
* Autora: Daviny Vidal.
*
*/

/** /login/valida.php */ 

?><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>Perdi a password</title>
</head>
<body>
<h1>Perdi a password</h1>
<?php
  if( !empty($_POST) ){
    // processar o pedido
	
	$ip = date("Ymd"); 
    include("../lll/cone.php"); // conexão db.
 
    $user = mysql_real_escape_string($_POST['email']);
    $user = addslashes($user);
 
    
	 
	
	   $q = mysql_query("SELECT * FROM usuarios WHERE usuario = '$user'");
     if( mysql_num_rows($q) == 1 ){
      // o utilizador existe, vamos gerar um link único e enviá-lo para o e-mail
 
      // gerar a chave
      // exemplo adaptado de http://snipplr.com/view/20236/
      $chave = sha1(uniqid( mt_rand(), true));
 
      // guardar este par de valores na tabela para confirmar mais tarde
      $conf = mysql_query("INSERT INTO recuperacao VALUES ('$user', '$chave' , '$ip')");
	 
      if( mysql_affected_rows() == 1 ){
 
        $link = "http://www.pereira.pro.br/~rod/login/recuperar.php?utilizador=$user&confirmacao=$chave";
 	$emailsender = "contato@pereira.pro.br";
        if( mail($user, 'Mudar senha <contato@pereira.pro.br', 'Olá; '.$user.', visite este link para recuperar sua senha, não esquecerem de atualizar o mesmo. '.$link ,'Caso você não solicitou o e-mail de recuperação, desconsidere' , $emailsender) ){
          echo '<p>Foi enviado um e-mail com um link único para alterar a seu password</p>';
 
        } else {
          echo '<p>Houve um erro ao enviar o email </p>';
 
        }
 
		// Apenas para testar o link, no caso do e-mail falhar
		
      } else {
        echo '<p>Não foi possível gerar o endereço único</p>';
 
      }
    } else {
	  echo '<p>Esse utilizador não existe</p>';
	}
  } else {
    // mostrar formulário de recuperação
?>
<form method="post">
  <label for="email">E-mail:</label>
  <input type="text" name="email" id="email" />
  <input type="submit" value="Recuperar" />
</form>
<?php
  }
?>
</body>
</html>
