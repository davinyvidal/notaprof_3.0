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
                    <h1 class="email-content-title">Plugins</h1>
                    <p class="email-content-subtitle">
                        
                    </p>
                </div>

             
            </div>

            <div class="email-content-body">
                <p>
                    Está página contém os plugins disponíveis:
                </p>
               <p><?php plugin(); ?></p>
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
