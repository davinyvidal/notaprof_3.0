<?php
/**
* Página envio e-mail (mensagem).
*
* Todos direitos reservado (c).
*
* Autor: Daviny Vidal.
*
*/

/** np-enviar.php*/

include ("./np-ser/seguranca.php"); // Inclui o arquivo com o sistema de segurança.
	protegePagina(); // proteção.

$proteger = 1; // var de proteção
	
include"./np-includes.php"; // include do sysadmin.


    $name = $_SESSION['usuarioNomerf3']; //pega os dados que foi digitado: name.
    $email = $_SESSION['usuarioLoginrf3']; //pega os dados que foi digitado: email.
    $subject  =   "Dúvida da aula";
    $message  =   $_POST['message']; //pega os dados que foi digitado no ID message.


  
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
 
/*abaixo será os dados que serão enviado para o email
cadastrado para receber o formulário.*/
 
       $corpo = "Formulário enviado\n";
       $corpo .= "Nome: " . $name . "\n";
       $corpo .= "Email: " . $email . "\n";
       $corpo .= "Comentários: " . $message . "\n";
 
       $email_to = "$email_duvida"; //substitua este email pelo seu email do seu site.
       
       $status = mail($email_to, $subject, $corpo, $headers); //enviando o email.
 
    if($status) {
        echo "<script> alert('Formulário enviado com sucesso.'); </script>"; //verifica se foi enviado o email com sucesso.
    }
    else {
        echo "<script> alert('Falha ao enviar o Formulário.'); </script>"; //se houve algum erro de envio.
    }

    echo "<script> window.location.href = './'; </script>"; //aqui você coloca uma página que será redirecionada após o envio do formulário, dei um exemplo do meu site.
 
?>
