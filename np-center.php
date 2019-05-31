<?php
/**
* Página admin user.
*
* Todos direitos reservado (c).
*
* Autora: Daviny Vidal.
*
*/

/** np-center.php */

$url_includes = "./np-includes.php"; // var do sysadmin.

if (file_exists($url_includes)){
	include"./np-includes.php"; // include do sysadmin.
}

$url_list = "./lll/list.php"; // var do lista aluno.

if (file_exists($url_list)){
	include"./lll/list.php"; // include do lista aluno.
}

if (isset($proteger)) { // if de proteção.

	if($proteger == 1){

?>
<center>
<a href="https://www.ime.usp.br/~glauber/html/acentos.htm" target="_blank">[?] - Caracteres especiais</a> - Dados do site:
</center>     <hr>   
  <form action="./lll/validacao_admin.php" method="post">  
        E-mail para Contato: <input type="text" name="email_contato" id="email_contato" value="<?php echo "$email_cotato"; ?>"/><br>
	Nome do professor(a): <input type="text" name="nome_prof" id="nome_prof" value="<?php echo "$nome_prof" ?>"/><br>
	Url da pasta dos arquivos do simulador: <input type="text" name="url_sin" id="url_sin" value='<?php echo "$url_sin"; ?>'"/><br>
        E-mail p/ Envio de Mensagens: <input type="text" name="email_duvida" id="email_duvida" value="<?php echo "$email_duvida"; ?>"/><br>
	E-mail para contato financeiro e o mesmo e-mail de contato <br>
    	<button type='submit' class='btn btn-success'>enviar</button><br></form>

<BR><form action="./?pg=5" method="post">  
<center>
Dados aluno: 

</center> <hr>
	
	ID: <select name="id">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	</select> <button type='submit' class='btn btn-success'>Carregar dados</button><br></form><BR>
	<form action="./lll/validacao.php" method="post">
	ID: <input type="text" name="id" id="id" value="<?php echo "$id";?>"/><br>
     	Nome: <input type="text" name="nome" id="nome" value="<?php echo "$nome[$id]";?>"/><font size="2px"> *Prencher apenas o primeiro nome.</font> <br>
     	E-mail: <input type="text" name="e_mail" id="e_mail" value='<?php echo "$usuario[$id]";?>'/> <font size="2px"> *E-mail de acesso ao sistema.</font><br>
     	Profisão: <input type="text" name="profissao" id="profissao" value='<?php echo "$profissao[$id]";?>'/><font size="2px"> *Será exibido na list da sala.</font> <br>
	Lição: <input type="text" name="licao" id="licao" value='<?php echo "$licao[$id]";?>'/><font size="2px"> *Apenas números.</font><br>
	Apostila: <input type="text" name="apostila" id="apostila" value='<?php echo "$apostila[$id]";?>'/><font size="2px"> *<i>Url</i> da apostila, não esquecer "http://".</font><br>
	Localização: <input type="text" name="localizado" id="localizado" value='<?php echo "$localidade[$id]";?>'/><font size="2px"> *Apenas letras.</font><br>
	Simulado: <input type="text" name="simulador" id="simulador" value='<?php echo "$simulador[$id]";?>'/><font size="2px"> *Pode colocar uma frase, um <i>url</i> para sistema esterno ou apenas dizer que o aluno está abito para o simulado.</font><br>
     	Exame: <input type="text" name="avaliacao" id="avalicacao" value='<?php echo "$avaliacao[$id]";?>'/><font size="2px"> *Data e horário do exame ou a nota dos mesmo.</font><br>
	Nota: <input type="text" name="nota" id="nota" value='<?php echo "$nota[$id]";?>'/><font size="2px"> *Apenas números.</font><br>
	Histórico: <input type="text" name="hist" id="hist" value='<?php echo "$hist[$id]";  ?>'/><font size="2px"> *Prencher com números separa por ";".</font><br>
	Nome da aula: <input type="text" name="titulo" id="titulo" value='<?php echo "$aula[$id]";?>'/><br>
	Frase:<input type="text" name="barra_aviso" id="barra_aviso" value='<?php echo "$aviso[$id]"; ?>'/><br>
	Notificação:<BR> <textarea name="notificacao" id="notificacao" rows="5" cols="20"> <?php echo "$notificacao[$id]";?></textarea><br>
	Resposta da Dúvida:<br><textarea name="duvida" id="duvida" rows="3" cols="20"> <?php echo "$duvida[$id]";?></textarea><br>	
Atividade: <br><textarea name="atividade" id="atividade" rows="3" cols="20"><?php echo "$responder[$id]"; ?></textarea><br>	

	layout: <select name="layout">
	<option value="10">Pure</option>
	<option value="11">Inglês</option>
	<option value="12">Bloqueio</option>
	<option value="13">Inadimplente</option>
	</select><BR><BR>
	<button type='submit' class='btn btn-success'>enviar</button> </form><BR>

<BR><form action="./?pg=5" method="post">   
<center>
Senha: 

</center> <hr>
	
	ID: <select name="id">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	</select> <button type='submit' class='btn btn-success'>Carregar dados</button><br></form><BR>
	<form action="./lll/validacao_pass.php" method="post">
		ID: <input type="text" name="id" id="id" value="<?php echo "$id";?>"/><br>
		Senha: <input type="password" name="senha" id="senha"/><font size="2px"> *Dica: Digite uma senha forte.</font> <br>
		Repetir senha: <input type="password" name="repetir_senha" id="repetir_senha"/> <font size="2px"> *Digite a senha novamente.</font>
	<BR><button type='submit'>enviar</button></form></font><br>

<BR><hr>
<p> Estou ciente que apôs o clique no botão "zerar informações", tudo será perdido definitivamente.
	</P>


 	<form action="./lll/zerar.php" method="post"> <button type='submit'>Zerar informações</button></form><BR></form>

		<BR>

    </body>
</html>
<?php
	}
}  elseif($proteger == 2 ) {
	
}else{
	include"./np-404.php";
}

?>
