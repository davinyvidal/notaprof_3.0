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
                    <h1 class="email-content-title">Enviar mensagem</h1>
                    <p class="email-content-subtitle">
                        
                    </p>
                </div>

             
            </div>

            <div class="email-content-body">
                <p>
                   
                </p>
               <p>
<form action="./np-enviar.php" method="post">

<ul>                     
    
        <label for="name">Nome:</label><br>
        <input type="text" name="name" id="name" value="<?php echo  $_SESSION['usuarioNomerf3'];  ?>"/>
    <br>
    <label for="email">Email:</label><br>
        <input type="text" name="email" id="email" value="<?php echo  $_SESSION['usuarioLoginrf3'];  ?>"/>
    
<br>
        <label for="message">Mensagem:</label><br>

        <textarea name="message" id="message" rows="10" cols="30"></textarea>

</ul>
        <button type="submit" class="btn btn-default" id="send_message" value="Enviar">Enviar</button>

   </form> </p>
		<hr><br><p>
                     Resposta da(s) pergunta(s) feita no formulário acima:<BR>
                </p>
		<div style="background-color: #916fff;"><p><?php echo  $_SESSION['usuarioDuvidarf3'];  ?>
		</p></div>
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
