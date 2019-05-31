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
                    <h1 class="email-content-title">Atividade</h1>
                    <p class="email-content-subtitle">
                        
                    </p>
                </div>

             
            </div>

            <div class="email-content-body">
                <p>
                    
                </p>
               <p>  <?php 

			
 $array=explode("[d",$responder[$idsessao]);

$atividade = str_replace('[d', '', $responder[0]);
		$today = date('mdy');
		$today = (int) $today;
		
		@$array1 = (int) $array[1];
		@$array2 = (int) $array[2];
		@$array4 = (int) $array[4];
		@$array5 = (int) $array[5];
		@$array7 = (int) $array[7];
		@$array8 = (int) $array[8];
		@$array10 = (int) $array[10];
		@$array11 = (int) $array[11];
		@$array11 = (int) $array[13];
		@$array11 = (int) $array[14];
		@$array11 = (int) $array[16];
		@$array11 = (int) $array[17];
		@$array11 = (int) $array[19];
		@$array11 = (int) $array[20];
	if (isset($array1,$array2,$array[3])) {
		if ($today >= $array1 and  $today <= $array2){
			echo "$array[3]";
		}

	}
	if (isset($array4,$array5,$array[6])) {
		if ($today >= $array4 and  $today <= $array5){
			echo "$array[6]";
		}
	}
	if (isset($array7,$array8,$array[9])) {
		if ($today  >= $array7 and  $today <= $array8){
			echo "$array[9]";
		}
	}
	if (isset($array10,$array11,$array[12])) {
		if ($today  >= $array10 and  $today <= $array11){
			echo "$array[12]";
		}
	}
	if (isset($array13,$array14,$array[15])) {
		if ($today  >= $array13 and  $today <= $array14){
			echo "$array[15]";
		}
	}
	if (isset($array16,$array17,$array[18])) {
		if ($today  >= $array16 and  $today <= $array17){
			echo "$array[18]";
		}
	}
	if (isset($array19,$array20,$array[21])) {
		if ($today  >= $array19 and  $today <= $array20){
			echo "$array[21]";
		}
	}	
?>
			</p>
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
