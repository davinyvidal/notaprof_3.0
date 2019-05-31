<?php
/**
* Página envio de e-mail (Contato).
*
* Todos direitos reservado (c).
*
* Autor: Daviny Vidal.
*
*/

/** np-contato.php */   

include ("./np-ser/seguranca.php"); // Inclui o arquivo com o sistema de segurança.
	protegePagina(); // proteção.

$proteger = 1; // var de proteção
	
include"./np-includes.php"; // include do sysadmin.



    $name     =  $_SESSION['usuarioNomerf3']; //pega os dados que foi digitado: name.
    $email    =  $_SESSION['usuarioLoginrf3']; //pega os dados que foi digitado: email.
    $subject  =   $_POST['subject']; //pega os dados que foi digitado no ID subject.
    $message  =   $_POST['message']; //pega os dados que foi digitado no ID message.
    $rand  =   $_POST['code']; //pega os dados que foi digitado no code message.
	$resultado  =   $_POST['resultado']; //pega os dados que foi digitado no resutado do code.

$rand = (int) $rand;
$resultado = (int) $resultado;

$valor = $resultado-$rand;

 
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
 
/*abaixo será os dados que serão enviado para o email
cadastrado para receber o formulário.*/
 
       $corpo = "Formulário enviado\n";
       $corpo .= "Nome: " . $name . "\n";
       $corpo .= "Email: " . $email . "\n";
       $corpo .= "Comentários: " . $message . "\n";
 
    
if ($valor == 1 ){
    $status = mail($email_cotato, $subject, $corpo, $headers); //enviando o email.
  }else {
        echo "<script> alert(' Falha (1) ao enviar o Formulário.'); </script>"; //se houve algum erro de envio.
    }
  
    if($status) {
        echo "<script> alert('Formulário enviado com sucesso.'); </script>"; //verifica se foi enviado o email com sucesso.
    }
    else {
        echo "<script> alert('Falha (2) ao enviar o Formulário.'); </script>"; //se houve algum erro de envio.
    }

 



    echo "<script> window.location.href = 'http://www.pereira.pro.br'; </script>"; //aqui você coloca uma página que será redirecionada após o envio do formulário, dei um exemplo do meu site.
 
?>
