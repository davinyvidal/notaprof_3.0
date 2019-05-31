
<?php

if (isset($proteger)) {

	if($proteger == 1){

?>
 <div id="main" class="pure-u-1">
        <div class="email-content">
            <div class="email-content-header pure-g">
                <div class="pure-u-1-2">
                    <h1 class="email-content-title">Configurações
                    <p class="email-content-subtitle">
                        
                    </p>
                </div>

             
            </div>

            <div class="email-content-body">
		<p> Está página contém as configurações disponíveis: </p>
		<p>              
			<?php config_lll(); ?>	
                </p>
		<p>
			<?php config_user(); ?>
		</p>
		<p>
                	</a><?php echo"$footer"; ?>
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

