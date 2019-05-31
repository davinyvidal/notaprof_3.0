<?php

$url_includes = "./np-includes.php";

if (file_exists($url_includes)){
	include"./np-includes.php"; // include do sysadmin.
} 

if (isset($proteger)) {

	if($proteger == 1){

		@$pg = $_GET['pg']; // Obtendo o valor via get.

		@$pg = (int)$pg; // convertendo de string para inteiro.
		
		if($pg > 5 or $pg == 0){
		$pg = 1;
		}
?>

<!doctype html>
<html lang="en">
<head>
    
    <title><?php echo "$titulo" ?></title>

<link rel="stylesheet" href="./np-temas/Temas/pure/css/pure-min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/email-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="./np-temas/Temas/pure/css/layouts/email.css">
    <!--<![endif]-->
   <link rel="icon" href="data:image/png;base64,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">
<script>
function exame(){
	alert('<?php echo "$avaliacao[$idsessao]"; ?>');
}
</script>
<script>
function simulado(){
	alert('<?php echo "$simulador[$idsessao]"; ?>');
}
</script>

</head>
<body>	
<div id="layout" class="content pure-g">
    <div id="nav" class="pure-u">
        <a href="#" class="nav-menu-button">Menu</a>

        <div class="nav-inner">
            <button class="primary-button pure-button"><?php echo "Olá, " . $_SESSION['usuarioNomerf3'];  ?></button>

            <div class="pure-menu">
                <ul class="pure-menu-list">
                    <li class="pure-menu-item"><a href="./?pg=1" class="pure-menu-link">Avisos: <span class="email-count"> &gt; &gt; 
                    <li class="pure-menu-item"><a href="./?pg=2" class="pure-menu-link">Mensagem</a></li>
                    <li class="pure-menu-item"><a href="./?pg=3" class="pure-menu-link">Atividade</a></li>
                    <li class="pure-menu-item"><a href="./?pg=4" class="pure-menu-link">Plugins</a></li>
		    <li class="pure-menu-item"><a href="./?pg=5" class="pure-menu-link">Configurações</a></li>
                    <li class="pure-menu-item"><a href="./np-sair.php" class="pure-menu-link">Sair</a></li>
                    <li class="pure-menu-heading">Lição atual</li>
                    <li class="pure-menu-item"><a href="np-includes/pdf/<?php echo "$apostila[$idsessao]"; ?>.pdf "target="_blank" class="pure-menu-link"><span class="email-label-personal"></span>Apostila</a></li>
                    <li class="pure-menu-item"><a href="#" class="pure-menu-link" onclick="simulado()"><span class="email-label-work"></span>Simulado</a></li>
                    <li class="pure-menu-item"><a href="#" class="pure-menu-link" onclick="exame()"><span class="email-label-travel"></span>Exame </a></li>
                </ul>
            </div>
        </div>
    </div>

    <div id="list" class="pure-u-1">

<?php

	for($i =0 ; $i <= $quantidade_de_aluno ; $i++ ){ 
		
		echo" <div class='email-item email-item-selected pure-g'>
            <div class='pure-u'>
                <img class='email-avatar' alt='Avatar' height='64' width='64' src='./np-img/yui-avatar.png'>
            </div>
		<div class='pure-u-3-4'>
                <h5 class='email-name'>$nome[$i]</h5>
                <h4 class='email-subject'>$profissao[$i]</h4>
                <p class='email-desc'>
                    $usuario[$i]<br>$localidade[$i]<br>lição: $licao[$i]<br>Nota: $nota[$i]
                </p>
            </div>
        </div>";	
}

?>
    </div> 
<?php

include"./np-temas/Temas/pure/$pg.php";

?>

</div>

<script src="./np-temas/Temas/pure/yui-min.js"></script>

<script>
    YUI().use('node-base', 'node-event-delegate', function (Y) {

        var menuButton = Y.one('.nav-menu-button'),
            nav        = Y.one('#nav');

        // Setting the active class name expands the menu vertically on small screens.
        menuButton.on('click', function (e) {
            nav.toggleClass('active');
        });

        // Your application code goes here...

    });
</script>

</body>
</html>

<?php
	}
} else {

	include"../../../np-404.php";
}
?>
