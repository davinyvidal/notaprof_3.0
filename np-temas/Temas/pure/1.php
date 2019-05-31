 <?php

$url_includes = "./np-includes.php";

if (file_exists($url_includes)){
	include"./np-includes.php"; // include do sysadmin.
} 

if (isset($proteger)) {

	if($proteger == 1){

?>
 <div id="main" class="pure-u-1">
        <div class="email-content">
            <div class="email-content-header pure-g">
                <div class="pure-u-1-2">
                    <h1 class="email-content-title"><?php echo "Olá, " . $_SESSION['usuarioNomerf3'];  ?></h1><?php echo $barra_aviso ?>
                    <p class="email-content-subtitle">
                        
                    </p>
                </div>

             
            </div>

            <div class="email-content-body">
                <p>
                     Olá seja muito bem-vindo ao ambiente virtual, o seu curso é: <b><?php echo "$titulo" ?></b>. Está página ficará todas as notificações, videos e outras informações.
                </p>
               <p>Notificação(ões) para o aluno <?php echo  $_SESSION['usuarioNomerf3'];  ?>, <BR><BR><?php echo "$notificacao[$idsessao]"; ?></p>
                <p>Nome do professor(a): <?php echo "$nome_prof" ?></p>
		<p>
                      <?php echo"$footer"; ?>
                </p>
            </div>
        </div>
    </div>
<?php
	}
} else {

	include"../../../np-404.php";
}
?>
