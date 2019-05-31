<?
/**
* Página Alterar Senha.
*
*
* Todos direitos reservado (c).
*
* Autor: Daviny Vidal.
*
*/

/** /login/recuperar.php */ 

?><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>Alterar password</title>
</head>
<body>
<h1>Alterar password</h1>
<?php
  if( empty($_GET['utilizador']) || empty($_GET['confirmacao']) )
    die('<p>Não é possível alterar a password: dados em falta</p>');
 
     include("../lll/cone.php"); // conexão db.
 
  $user = mysql_real_escape_string($_GET['utilizador']);
  $hash = mysql_real_escape_string($_GET['confirmacao']);
 
  $q = mysql_query("SELECT COUNT(*) FROM recuperacao WHERE utilizador = '$user' AND confirmacao = '$hash'");
 
  if( mysql_result($q, 0, 0) == "1" ){
    // os dados estão corretos: eliminar o pedido e permitir alterar a password
    mysql_query("DELETE FROM recuperacao WHERE utilizador = '$user' AND confirmacao = '$hash'");
 	
	$rand = mt_rand();
	$senhapura = $rand. "&5!".$rand;
	$senha = MD5($senhapura);

	$query = "UPDATE `usuarios` SET `senha` = '".$senha."' WHERE usuario = '$user'";
	
	$atualiza = mysql_query($query);
			if ($atualiza) {	

			} else {
				echo "erro:";
			}

    echo "Sucesso! sua senha nova é: $senhapura";
   
 
  } else {
    echo '<p>Não é possível alterar a password: dados incorretos</p>';
 
  }
 
?>
</body>
</html>
